<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\FaculityMajor;
use Illuminate\Support\Facades\Hash;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class StudentController extends Controller
{
    public function list()
    {
        $student = Student::orderBy('faculity_id','DESC')->get();
        return view('index_Chuan.admin.student.list', ['student' => $student]);
    }

    public function create()
    {
        $faculity = FaculityMajor::whereNull('faculity_major_id')->get();
        $major = FaculityMajor::whereNotNull('faculity_major_id')->get();
        $user = User::where('type', '1')->get();
        return view('index_Chuan.admin.student.insert', ['user' => $user, 'faculity' => $faculity, 'major' => $major]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'student_code' => 'required|min:6|unique:students',
            'first_name'   => 'required|min:2',
            'last_name'    => 'required|min:5',
            'email'        => 'required|email',
            'user_name'    => 'required|unique:users',
            'password'     => 'required|min:5|max:32',
            'passwordAgain' => 'required|same:password',
            'address'      => 'required:min:5',
            'phone_number' => 'required|min:10|max:11',
            'date_birth'   => 'required',
        ], [
            'student_code.required' => "Bạn chưa nhập mã sinh viên",
            'student_code.min' => "Mã sinh viên phải có ít nhất 6 ký tự.",
            'student_code.unique' => "Mã sinh viên đã tồn tại",
            'first_name.required' => "Chưa nhập họ người dùng",
            'first_name.min'      => "Họ người dùng phải có ít nhất 2 ký tự",
            'last_name'           => "Chưa nhập tên người dùng",
            'last_name.min'       => "Tên người dùng phải có ít nhất 5 ký tự",
            'emai.required'       => "Chưa nhập email",
            'emai.email'          => "email không hợp lệ",
            'user_name.required'  => "Yêu cầu nhập tên đăng nhập",
            'user_name.unique'    => "Tên đăng nhập đã tồn tại",
            'password.required'   => "Chưa nhập mật khẩu",
            'password.min'        => "Password phải có ít nhất 3 ký tự",
            'password.max'        => "Password có nhiều nhất 32 ký tự",
            'passwordAgain.required' => "Chưa nhập lại password",
            'passwordAgain.same'     => "Mật khẩu chưa đúng",
            'address.required'       => "Chưa nhập địa chỉ",
            'phone_number.required'  => "Chưa nhập số điện thoại",
            'date_birth.required'    => "Chưa nhập ngày sinh"
        ]);

        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->email       = $request->email;
        $user->password   = Hash::make($request->password);
        $user->address    = $request->address;
        $user->user_name   = $request->user_name;
        $user->phone_number = $request->phone_number;
        $user->date_birth = $request->date_birth;
        $user->sex = $request->sex;
        $user->type = 1;
        
        $user->save();

        $student = new Student();
        $student->user_id = $user->id;
        $student->student_code = $request->student_code;
        $student->type = $request->type;
        $student->faculity_id = $request->faculity_id;
        $student->class = $request->class;
        $student->session = $request->session;
        $student->save();

        return redirect()->route('student.list')->with('Thongbao', 'Thêm sinh viên thành công.');
    }

    public function getupdate($id)
    {
        $student = Student::find($id);
        $faculity = FaculityMajor::whereNull('parent_id')->get();
        $major = FaculityMajor::whereNotNull('parent_id')->get();
        $user = User::where('type', '1')->get();

        return view('index_Chuan.admin.student.update', ['student' => $student, 'faculity' => $faculity, 'major' => $major, 'user' => $user]);
    }

    public function postupdate(Request $request, $id)
    {
        $this->validate($request,[],[]);

        $student = Student::find($id);
        $student->user_id = $request->user_id;
        $student->student_code = $request->student_code;
        $student->type = $request->type;
        $student->faculity_id = $request->faculity_id;
        $student->save();

        return redirect()->route('student.list')->with('Thongbao', 'Sửa sinh viên thành công.');
    }

    public function delete($id){
        $student = Student::find($id);
        $student->delete();

        return redirect()->route('student.list')->with('Thongbao', 'Xoá sinh viên thành công.');
    }

    public function import(Request $request)
    {
        if($request->method() == "POST"){
            try {
                $reader = ReaderEntityFactory::createXLSXReader();
                $path_file = $request->pathfile;
                $reader->open($path_file);
    
                foreach ($reader->getSheetIterator() as $k => $sheet) {
                    $this->importStudent($sheet);
                }
    
                return redirect()->back()->with('success', 'Successfully');
            } catch (Throwable $th) {
                //throw $th;
            }
        }
        return view('index_Chuan.admin.student.import');
    }

    function importStudent($data)
    {
        foreach ($data->getRowIterator() as $rowIndex => $row) {
            if ($rowIndex === 1) {
                continue;
            }
            $cell = $row->getCells();

            $user = $this->createUserImport(
                $cell[0]->getValue(), 
                $cell[1]->getValue(), 
                $cell[2]->getValue(), 
                $cell[3]->getValue()
            );

            $this->createStudentImport(
                $user->id,
                $cell[0]->getValue(),
                $cell[6]->getValue(),
                $cell[4]->getValue(),
                $cell[5]->getValue(), 
            );  
        }
        return redirect()->route('student.list')->with('Thongbao', 'Thêm Sinh Viên thành công.');
    }

    function createUserImport($code, $name, $birthDay, $sex)
    {
        $user = User::where('user_name', $code)->first();
        if(!$user){
            $user = User::createUserFromFile($code, $name, $birthDay, $sex);
        }
        return $user;
    }

    function createStudentImport($userId, $code, $session, $class, $faculityName)
    {
        $student = Student::where('student_code', $code)->get();
        if(!count($student)){
            Student::createStudentFromFile($userId, $code, $session, $class, $faculityName);
        }
    }
}

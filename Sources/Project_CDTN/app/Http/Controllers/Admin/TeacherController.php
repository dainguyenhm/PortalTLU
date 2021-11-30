<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class TeacherController extends Controller
{
    public function list()
    {
        $teacher = Teacher::all();
        return view('index_Chuan.admin.teacher.list', ['teacher' => $teacher]);
    }
    public function create()
    {
        $user = User::where('type', '2')->get();
        return view('index_Chuan.admin.teacher.insert', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'first_name'   => 'required|min:2',
                'last_name'    => 'required|min:5',
                'email'        => 'required|email',
                'user_name'    => 'required|unique:users',
                'password'     => 'required|min:5|max:32',
                'passwordAgain' => 'required|same:password',
                'address'      => 'required:min:5',
                'phone_number' => 'required|min:10|max:11',
                'date_birth'   => 'required',
            ],
            [
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
            ]
        );

        $user = new User();

        $user->first_name   = $request->first_name;
        $user->last_name    = $request->last_name;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->address      = $request->address;
        $user->user_name    = $request->user_name;
        $user->phone_number = $request->phone_number;
        $user->date_birth   = $request->date_birth;
        $user->sex          = $request->sex;
        $user->type         = 2;

        $user->save();

        $teacher = new Teacher();
        $teacher->teacher_code = $request->teacher_code;
        $teacher->user_id = $user->id;

        $teacher->save();

        return redirect()->route('teacher.list')->with('Thongbao', 'Thêm giảng viên thành công.');
    }

    public function getupdate($id)
    {
        $teacher = Teacher::find($id);
        return view('index_Chuan.admin.teacher.update', ['teacher' => $teacher]);
    }

    public function postupdate(Request $request, $id)
    {
        $this->validate($request, [], []);

        $teacher = Teacher::find($id);
        $teacher->teacher_code = $request->teacher_code;

        $teacher->save();
        return redirect()->route('teacher.list')->with('Thongbao', 'Sửa giảng viên thành công.');
    }

    public function getdelete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('teacher.list')->with('Thongbao', 'Xoá giảng viên thành công.');
    }

    public function importParyoll(Request $request)
    {
        if ($request->method() == "POST") {
            try {
                $reader = ReaderEntityFactory::createXLSXReader();
                $path_file = $request->pathfile;
                $reader->open($path_file);

                foreach ($reader->getSheetIterator() as $k => $sheet) {
                    $this->importTeacher($sheet);
                }

                return redirect()->back()->with('success', 'Successfully');
            } catch (Throwable $th) {
                //throw $th;
            }
        }
        return view('index_Chuan.admin.teacher.import');
    }

    function importTeacher($data)
    {
        foreach ($data->getRowIterator() as $rowIndex => $row) {
            if ($rowIndex === 1) {
                continue;
            }
            $cell = $row->getCells();

            $user = $this->createUserTeacherIfExist(
                $cell[0]->getValue(),
                $cell[1]->getValue()
            );

            Teacher::createTeacherFromFiles(
                $user->id, 
                $cell[0]->getValue(),
                $cell[2]->getValue(),
                $cell[3]->getValue(), 
                $cell[4]->getValue(), 
                $cell[5]->getValue(), 
                $cell[6]->getValue(),
                $cell[7]->getValue(),
                $cell[9]->getValue(),
                $cell[10]->getValue(),
                $cell[11]->getValue(),
                $cell[13]->getvalue(),
                // $cell[13]->getvalue()
            );

        }
        return redirect()->back()->with('Thongbao', 'Import bảng lương thành công.');
    }

    function createUserTeacherIfExist($code, $name)
    {
        $user = User::where('user_name', $code)->first();
        if(!$user){
            $user =  User::createUserTeacherFromFile($code, $name);
        }
        return $user;
    }
}

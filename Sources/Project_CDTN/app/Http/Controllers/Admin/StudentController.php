<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\FaculityMajor;
use Illuminate\Support\Facades\Hash;

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
        ], [
            'student_code.required' => "Bạn chưa nhập mã sinh viên",
            'student_code.min' => "Mã sinh viên phải có ít nhất 6 ký tự.",
            'student_code.unique' => "Mã sinh viên đã tồn tại",
        ]);

        $student = new Student();
        $student->user_id = $request->user_id;
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

    public function import()
    {
        return view('index_Chuan.admin.student.import');
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\User;

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
        $this->validate($request, [], []);

        $teacher = new Teacher();
        $teacher->teacher_code = $request->teacher_code;
        $teacher->user_id = $request->user_id;

        $teacher->save();

        return redirect()->route('teacher.list')->with('Thongbao', 'Thêm giảng viên thành công.');
    }

    public function getupdate($id)
    {
        $teacher = Teacher::find($id);
        return view('index_Chuan.admin.teacher.update',['teacher'=>$teacher]);
    }

    public function postupdate(Request $request, $id){
        $this->validate($request,[],[]);

        $teacher = Teacher::find($id);
        $teacher->teacher_code = $request->teacher_code;

        $teacher->save();
        return redirect()->route('teacher.list')->with('Thongbao', 'Sửa giảng viên thành công.');
    }

    public function getdelete($id){
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect()->route('teacher.list')->with('Thongbao', 'Xoá giảng viên thành công.');
    }
}

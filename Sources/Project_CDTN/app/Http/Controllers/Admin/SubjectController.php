<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function list()
    {
        $subject = Subject::all();
        return view('index_Chuan.admin.subject.list', ['subject' => $subject]);
    }

    //CRUD (Create-Update-Delete)

    public function create()
    {
        $subject = Subject::all();
        return view('index_Chuan.admin.subject.insert', ['subject' => $subject]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'   => 'required|min:8',
            'subject_code'    => 'required|min:2',
        ], [
            'name.required' => "Chưa nhập tên môn học",
            'name.min'      => "Tên môn học phải có ít nhất 8 ký tự",
            'subject_code.required'  => "Chưa nhập mã môn học",
            'subject_code.min'       => "mã môn học phải có ít nhất 2 ký tự",

        ]);

        $subject = new Subject();

        $subject->name = $request->name;
        $subject->subject_code  = $request->subject_code;
        $subject->credit =$request->credit;

        $subject->save();


        return redirect()->route('subject.list')->with('Thongbao', 'Thêm môn học thành công.');
    }

    public function getupdate($id)
    {
        $subject = Subject::find($id);
        return view('index_Chuan.admin.subject.update', ['subject' => $subject]);
    }

    public function postupdate(Request $request, $id)
    {
        $this->validate($request, [], []);

        $subject = Subject::find($id);

        $subject->name = $request->name;
        $subject->subject_code  = $request->subject_code;
        $subject->credit =$request->credit;

        $subject->save();

        return redirect()->route('user.list')->with('Thongbao', 'Sửa môn học thành công.');
    }

    public function getdelete($id)
    {
        $subject = Subject::find($id);
        $subject->delete();

        return redirect()->route('user.list')->with('Thongbao', 'Xoá môn học thành công.');
    }
}

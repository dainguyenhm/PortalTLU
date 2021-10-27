<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FaculityMajor;

class FaculityController extends Controller
{
    public function list()
    {
        $faculity = FaculityMajor::all();
        return view('index_Chuan.admin.faculity.list', ['faculity' => $faculity]);
    }

    public function createFaculity()
    {
        return view('index_Chuan.admin.faculity.insertFaculity');
    }

    public function storeFaculity(Request $request)
    {
        $this->validate($request, [], []);

        $faculity = new FaculityMajor();
        $faculity->name = $request->name;
        $faculity->save();

        return redirect()->route('faculity.list')->with('Thongbao', 'Thêm khoa thành công.');
    }
    public function createMajor()
    {
        $faculity = FaculityMajor::whereNull('faculity_major_id')->get();
        return view('index_Chuan.admin.faculity.insertMajor',['faculity'=>$faculity]);
    }
    public function storeMajor(Request $request)
    {
        $faculity = new FaculityMajor();
        $faculity->name = $request->name;
        $faculity->faculity_major_id = $request->faculity_major_id;
        $faculity->save();

        return redirect()->route('faculity.list')->with('Thongbao', 'Thêm nghành thành công.');
    }

    public function getupdate($id){
        $faculity = FaculityMajor::find($id);
        return view('index_Chuan.admin.faculity.update',['faculity'=>$faculity]);
    }

    public function postupdate(Request $request,$id){
        $faculity = FaculityMajor::find($id);

        $this->validate($request,[
            'name'=>'required|unique',
        ],[
            'name.required'=>'Bạn chưa nhập tên khoa',
            'name.unique'=>'Tên đã tồn tại'
        ]);

        $faculity->name = $request->name;
        $faculity->save();

        return redirect()->route('faculity.list')->with('Thongbao', 'Sửa Tên Khoa thành công.');
    }

    public function delete($id){
        $faculity = FaculityMajor::find($id);
        $faculity->delete();
        return redirect()->route('faculity.list')->with('Thongbao', 'Xoá Tên Khoa thành công.');
    }
}

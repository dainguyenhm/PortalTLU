<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function listRole()
    {
        $roles = Role::all();
        return view('index_Chuan.admin.role.list',['roles'=>$roles]);
    }

    public function create(){
        return view('index_Chuan.admin.role.insert');
    }

    public function store(Request $request){
        $this->validate($request,[],[]);

        $roles = new Role();
        $roles->name = $request->name;
        $roles->save();

        return redirect()->route('role.list')->with('Thongbao', 'Thêm quyền thành công.');
    }
}

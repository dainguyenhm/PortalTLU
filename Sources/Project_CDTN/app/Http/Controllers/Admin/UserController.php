<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;
use App\Models\UserRole;
use App\Models\Student;


class UserController extends Controller
{
    public function list()
    {
        $user=User::all();
        return view('index_Chuan.admin.user.list',['user'=>$user]);
    }

    //CRUD (Create-Update-Delete)

    public function create()
    {
        $role = Role::all();
        return view('index_Chuan.admin.user.insert',['role'=>$role]);
    }

    public function getupdate($id)
    {
        $user = User::find($id);
        return view('index_Chuan.admin.user.update',['user'=>$user]);
    }

    public function postupdate(Request $request, $id){
        $this->validate($request,[],[]);

        $user = User::find($id);

        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->email       = $request->email;
        $user->password   = Hash::make($request->password);
        $user->address    = $request->address;
        $user->user_name   = $request->user_name;
        $user->phone_number = $request->phone_number;
        $user->date_birth = $request->date_birth;
        $user->type = $request->type;
        
        $user->save();

        return redirect()->route('user.list')->with('Thongbao', 'Sửa user thành công.');
    }

    public function getdelete($id)
    {
        $user = User::find($id);
        $user->delete();
        
        return redirect()->route('user.list')->with('Thongbao', 'Xoá user thành công.');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
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
        
        // $user = $request->all();
        // $user['first_name'] = $request->first_name;
        // $user['last_name']  = $request->last_name;
        // $user['password']   = Hash::make($request->password);
        // User::create($user);

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
        $user->type = $request->type;
        
        $user->save();

        // $user_role    = new UserRole();
        // $user_role->user_id = $user->id;
        // $user_role->role_id = $request->role;

        // $user_role->save();

        return redirect()->route('user.list')->with('Thongbao', 'Thêm user thành công.');
    }
}

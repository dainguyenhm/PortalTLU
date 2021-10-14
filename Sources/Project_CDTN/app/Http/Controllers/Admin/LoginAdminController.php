<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginAdminController extends Controller
{
    public function manager(){
        return view('index_Chuan.admin.Layout_admin.index');
    }

    public function getlogin()
    {
        return view('index_Chuan.admin.login.loginAdmin');
    }
    public function postlogin(Request $request)
    {
        $this->validate($request, [
            'user_name_admin' => 'required',
            'password' => 'required|min:3|max:32'
        ], [
            'user_name_admin.required'    => 'Bạn chưa nhập UserName!!!',
            'password.required' => 'Bạn chưa nhập Password',
            'password.min'      => 'Password phải có ít nhất 3 ký tự',
            'password.max'      => 'Password không quá 32 ký tự'
        ]);
        if(Auth::attempt(['user_name' =>$request->user_name_admin, 'password' =>$request->password])){
    
            return redirect('admin/quan-tri');

        }else{
            return redirect()->route('getAdmin.login')->with('Thongbao','Đăng nhập không thành công.');
        }
        
        // dd(Auth::User());
    }

    public function getlogout(){
        Auth::logout();
        return redirect()->route('getAdmin.login');
    }

}

<?php

namespace App\Http\Controllers\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function getlogin()
    {
        return view('index_Chuan.Login_index.login');
    }
    
    function postlogin(Request $request)
    { 
        $this->validate($request, [
            'user_name' => 'required',
            'password' => 'required|min:8|max:32'
        ], [
            'user_name.required' => 'Bạn chưa nhập UserName',
            'password.required' => 'Bạn chưa nhập Password',
            'password.min'      => 'Password phải có ít nhất 8 ký tự',
            'password.max'      => 'Password không quá 32 ký tự'
        ]);
        
        if (Auth::attempt(['user_name' => $request->user_name, 'password' => $request->password])){
            return redirect()->route('index');
        }else{
            return redirect()->back()->with('Thongbao','Đăng nhập không thành công.');
        }
        
    }
    function getlogout(){
        Auth::logout();
        return redirect()->route('index');
    }

    function Profile(){
    
        return view('index_Chuan.Login_index.infor.Profile',);
    }

    function postProfile( Request $request,$id){
        
        // $this->validate($request, [
        //     'first_name' => 'required|min:3',
        //     'last_name' =>'required|min:5'
        // ], [
        //     'first_name.required' => "Bạn chưa nhập tên người dùng",
        //     'first_name.min' => "Tên người dùng phải có ít nhất 3 ký tự.",
        //     'last_name.required' => "Bạn chưa nhập tên người dùng",
        //     'last_name.min' => "Tên người dùng phải có ít nhất 3 ký tự.",
        // ]);

        $user = User::find($id);
        $user->first_name = $request->first_name;
        $user->last_name  = $request->last_name;
        $user->address    = $request->address;
        $user->phone_number = $request->phone_number;
        $user->date_birth = $request->date_birth;

            // $this->validate($request, [
            //     'Password' => 'required|min:3|max:32',
            //     'PasswordAgain' => 'required|same:Password'
            // ], [
            //     'Password.required' => "Bạn chưa nhập mật khẩu",
            //     'Password.min' => "Password phải có ít nhất 3 ký tự",
            //     'Password.max' => "Password có nhiều nhất 32 ký tự",
            //     'PasswordAgain.required' => "Bạn chưa nhập lại password",
            //     'PasswordAgain.same' => "Mật khẩu chưa đúng"
            // ]);

        $user->password =  Hash::make($request->Password);
        $user->save();
        return redirect()->route('profile')->with('Thongbao', 'Update dữ liệu thành công');
    }
    function fogot(){
        return view('index_Chuan.login_index.infor.forgotPW');
    }
}

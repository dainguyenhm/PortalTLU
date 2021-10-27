<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FaculityMajor;
use App\Models\Post;

class HomeController extends Controller
{

    public function home(){

        $faculity = FaculityMajor::whereNull('faculity_major_id')->get();

        $majors = FaculityMajor::whereNull('faculity_major_id')->with('childrenFaculityMajors')->get();

        return view('index_Chuan/index',['faculity'=>$faculity,'majors'=>$majors]);
    }

    public function detail($id){
        $post = Post::find($id);
        return view('index_Chuan.Pages.General.detail',['post'=>$post]);
    }
}

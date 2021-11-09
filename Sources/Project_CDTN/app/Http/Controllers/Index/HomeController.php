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

    public function about(){
        return view('index_Chuan.Pages.about');
    }

    public function team(){
        return view('index_Chuan.Pages.teamList');
    }

    public function infrastructure(){
        return view('index_Chuan.Pages.infrastructure.blog');
    }

    public function Infrastdetails(){
        return view('index_Chuan.Pages.infrastructure.details');
    }

    public function adminssion(){
        $post = Post::where('message','3')->get();
        return view('index_Chuan.Content_index.admissions',['post'=>$post]);
    }

    public function information(){
        return view('index_Chuan.Content_index.information');
    }

    public function enrollment(){
        return view('index_Chuan.Content_index.enrollment');
    }
    
    public function application(){
        return view('index_Chuan.Content_index.application');
    }
    public function instruct(){
        return view('index_Chuan.Content_index.instruct');
    }
    public function floor(){
        return view('index_Chuan.Content_index.floor');
    }

    public function club(){
        return view('index_Chuan.Content_index.clubTLU');
    }

}


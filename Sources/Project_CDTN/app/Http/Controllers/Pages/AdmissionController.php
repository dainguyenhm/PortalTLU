<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class AdmissionController extends Controller
{
    public function formal(){
        $post = Post::where('message','3')->get();
        return view('index_Chuan.Pages.General.Admissions.formal',['post'=>$post]);
    }

    public function trainingMaster(){
        return view('index_Chuan.Pages.General.Admissions.trainingMaster');
    }

    public function intermational(){
        return view('index_Chuan.Pages.General.Admissions.internationalMasters');
    }

    public function connection(){
        return view('index_Chuan.Pages.General.Admissions.connection');
    }

    public function formalDetails($id){
        $post = Post::find($id);
        return view('index_Chuan.Pages.General.Admissions.details',['post'=>$post]);
    }
}

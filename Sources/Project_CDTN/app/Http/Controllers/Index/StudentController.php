<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function search(){
        return view('index_Chuan.Pages.Student.search');
    }

    public function educate(){
        return view('index_Chuan.Pages.Student.educate');
    }

    public function tuition(){
        return view('index_Chuan.Pages.Student.tuition');
    }

    public function insurance(){
        return view('index_Chuan.Pages.Student.insurance');
    }

    public function newpost(){
        return view('index_Chuan.Pages.Student.newpost');
    }
    public function getpost(){
        return view('index_Chuan.Pages.StudentOld.post');
    }
}

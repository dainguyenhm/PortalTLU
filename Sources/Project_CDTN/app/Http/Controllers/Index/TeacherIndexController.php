<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TeacherIndexController extends Controller
{
    public function search()
    {
        return view('index_Chuan.Pages.Teacher.search');
    }


    public function educate()
    {
        return view('index_Chuan.Pages.Teacher.educate');
    }

    public function tuition()
    {
        return view('index_Chuan.Pages.Teacher.tuition');
    }

    public function insurance()
    {
        return view('index_Chuan.Pages.Teacher.insurance');
    }

    public function message()
    {
        return view('index_Chuan.Pages.Teacher.message');
    }

    public function messageTuition()
    {
        return view('index_Chuan.Pages.Teacher.messageTuition');
    }
}

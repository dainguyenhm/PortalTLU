<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function getpost(){
        return view('index_Chuan.Pages.StudentOld.post');
    }
}

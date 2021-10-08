<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class duLichController extends Controller
{
    function DLLH(){
        return view('index_Chuan.Pages.DuLich.DL-lu-hanh');
    }
}

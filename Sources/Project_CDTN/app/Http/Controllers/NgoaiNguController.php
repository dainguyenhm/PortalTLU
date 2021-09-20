<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NgoaiNguController extends Controller
{
    function NN_ANH(){
        return view('index_Chuan.Pages.NgoaiNgu.NN-Anh');
    }
    function NN_NHAT(){
        return view('index_Chuan.Pages.NgoaiNgu.NN-Nhat');
    }
    function NN_HAN(){
        return view('index_Chuan.Pages.NgoaiNgu.NN-Han');
    }
    function NN_TQ(){
        return view('index_Chuan.Pages.NgoaiNgu.NN-TQ');
    }
    
}

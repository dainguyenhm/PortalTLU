<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class toanTinController extends Controller
{
    function KH_maytinh(){
        return view('index_Chuan.Pages.ToanTin.KH-may-tinh');
    }
    function HT_thongtin(){
        return view('index_Chuan.Pages.ToanTin.HT-thong-tin');
    }
    function CN_thongtin(){
        return view('index_Chuan.Pages.ToanTin.CN-thong-tin');
    }
    function Mang_maytinh(){
        return view('index_Chuan.Pages.ToanTin.Mang-may-tinh');
    }
    function Toan_UD(){
        return view('index_Chuan.Pages.ToanTin.Toan-UD');
    }
    function TT_nhantao(){
        return view('index_Chuan.Pages.ToanTin.TT-nhan-tao');
    }
}

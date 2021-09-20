<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToanTinController extends Controller
{
    function KH_maytinh(){
        return view('index_Chuan.Pages.ToanTin.KH-may-tinh');
    }
    function HT_thongtin(){
        return view('index_Chuan.Pages.ToanTin.HT-thong-tin');
    }
    function CN_thongtin(){
        return view('index_Chuan.Pages.ToanTin.CN_thong-tin');
    }
    function Mang_maytinh(){
        return view('index_Chuan.Pages.ToanTin.Mang_may-tinh');
    }
    function Toan_UD(){
        return view('index_Chuan.Pages.ToanTin.Toan-UD');
    }
    function TT_nhantao(){
        return view('index_Chuan.Pages.ToanTin.TT-nhan-tao');
    }
}

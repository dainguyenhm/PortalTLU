<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KinhTeController extends Controller
{
    function Kinhte()
    {
        return view('index_Chuan.Pages.KinhTe.Ke-toan');
    }
    function KT_quocte()
    {
        return view('index_Chuan.Pages.KinhTe.KT-quoc-te');
    }
    function LOGITICS()
    {
        return view('index_Chuan.Pages.KinhTe.Logitics');
    }
    function Luat_kt()
    {
        return view('index_Chuan.Pages.KinhTe.Luat-KT');
    }
    function Marketing()
    {
        return view('index_Chuan.Pages.KinhTe.Marketing');
    }
    function QT_kinhdoanh()
    {
        return view('index_Chuan.Pages.KinhTe.QT-kinh-doanh');
    }
    function TC_nganhang()
    {
        return view('index_Chuan.Pages.KinhTe.TC-ngan-hang');
    }
}

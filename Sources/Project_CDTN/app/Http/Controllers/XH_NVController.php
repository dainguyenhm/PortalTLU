<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class XH_NVController extends Controller
{
    function CT_xahoi(){
        return view('index_Chuan.Pages.XaHoi-NhanVan.CT-xa-hoi');
    }
    function VN_hoc(){
        return view('index_Chuan.Pages.XH-NV.VN-Hoc');
    }
}

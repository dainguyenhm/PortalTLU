<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class xahoiNhanvanController extends Controller
{
    
    function CT_xahoi(){
        return view('index_Chuan.Pages.XaHoi-NhanVan.CT-xa-hoi');
    }
    function VN_hoc(){
        return view('index_Chuan.Pages.XH-NV.VN-Hoc');
    }
}

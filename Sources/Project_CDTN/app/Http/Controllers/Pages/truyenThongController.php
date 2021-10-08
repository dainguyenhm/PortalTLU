<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class truyenThongController extends Controller
{
    function TT_daphuongtien(){
        return view('index_Chuan.Pages.TruyenThong.TT_da-phuong-tien');
    }
}

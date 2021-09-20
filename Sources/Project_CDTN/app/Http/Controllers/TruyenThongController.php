<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TruyenThongController extends Controller
{
    function TT_daphuongtien(){
        return view('index_Chuan.Pages.TruyenThong.TT_da-phuong-tien');
    }
}

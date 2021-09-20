<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SucKhoeController extends Controller
{
    function DieuDuong()
    {
        return view('index_Chuan.Pages.SucKhoe.DieuDuong');
    }
    function DinhDuong()
    {
        return view('index_Chuan.Pages.SucKhoe.DinhDuong');
    }
}

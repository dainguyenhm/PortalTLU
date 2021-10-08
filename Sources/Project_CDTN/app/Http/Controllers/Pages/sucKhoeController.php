<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class sucKhoeController extends Controller
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

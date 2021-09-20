<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmNhacController extends Controller
{
    function ThanhNhac(){
        return view('index_Chuan.Pages.AmNhac.ThanhNhac');
    }
}

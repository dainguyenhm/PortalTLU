<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class amNhacController extends Controller
{
    function ThanhNhac(){
        return view('index_Chuan.Pages.AmNhac.ThanhNhac');
    }
}

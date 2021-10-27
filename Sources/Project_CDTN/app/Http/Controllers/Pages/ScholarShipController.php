<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ScholarShipController extends Controller
{
    public function scholarship(){
        return view('index_Chuan.Pages.General.scholarship');
    }
}

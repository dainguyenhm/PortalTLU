<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EnterpriseController extends Controller
{
    public function list(){
        return view('index_Chuan.admin.doanhnghiep.danhsach');
    }
}

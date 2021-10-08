<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TranscriptController extends Controller
{
    public function list(){
        return view('index_Chuan.admin.transcript.list');
    }
}

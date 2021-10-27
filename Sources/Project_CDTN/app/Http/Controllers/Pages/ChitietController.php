<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class ChitietController extends Controller
{
    public function test(){
        $post = Post::all();
        return view('index_Chuan.Pages.ThongTinChung.chitiet',['post'=>$post]);
    }
}

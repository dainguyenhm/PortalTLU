<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function list(){
        $post = Post::all();
        return view('index_Chuan.admin.post.list',['post'=>$post]);
    }
}

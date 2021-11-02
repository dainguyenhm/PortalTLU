<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function list(){
        $post = Post::all();
        return view('index_Chuan.admin.post.list',['post'=>$post]);
    }

    public function insert(){
        $user = User::where('type','0')->get();
        return view('index_Chuan.admin.post.insert',['user'=>$user]);
    }

    function acceptPost($id){
        $post = Post::find($id);
        $post->status = 1;
        $post->save();
        return redirect()->route('post.list')->with('Thongbao', 'Duyệt Thành Công');
    }

    public function store(Request $request){
        $this->validate($request, [
            'user_id' => 'required',
            'title' => 'required|min:5|unique:posts,title',
            'summary' => 'required|min:10|unique:posts,title',
            'content' => 'required|min:5|unique:posts,title'
        ], [
            'user_id.required' => 'Bạn chưa chọn user',
            'title.required' => 'Bạn chưa nhật tiêu đề',
            'title.min'      => 'Tiêu đề phải có ít nhất 5 ký tự',
            'summary.required' => 'Bạn chưa nhập tóm tắt',
            'summary.min'      => 'Tóm Tắt phải có ít nhất 10 ký tự',
            'content.required' => 'Bạn chưa nhập nội dung',
            'content.min'     => 'Nội dung phải có ít nhất 5 ký tự'
        ]);

        $post = new Post();
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->summary = $request->summary;
        $post->content = $request->content;
        $post->status = $request->status;
        $post->type = $request->type;
        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $duoi = $file->getClientOriginalExtension();
            if ($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg') {
                return redirect()->route('post.insert')->with('Thongbao', 'File chưa đúng định dạng. Hình ảnh phải có đuôi jpg,png,jpeg');
            }
            $name = $file->getClientOriginalName();
            $img = "a" . "_" . $name;
            while (file_exists('upload/images/$img')) {
                $Hinh = "b" . "_" . $name;
            }
            $file->move("upload/images", $img);
            $post->img = $img;
        } else {
            $post->img = "";
        }
        $post->save();
        return redirect()->route('post.insert')->with('Thongbao', 'Thêm Thành Công');
    }

    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('post.insert')->with('Thongbao', 'Xoá Thành Công');
    }
}

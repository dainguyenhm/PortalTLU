<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Transcript;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class StudentIndexController extends Controller
{
    public function search()
    {
        return view('index_Chuan.Pages.Student.search');
    }

    public function postSearch(Request $request)
    {
        $count = 0;
        $search = $request->search;
        $student = Student::where('student_code', "$search")->first();
        $score = Transcript::where('student_id',  $student->id)->get();
        
        foreach ($score as $value) {
            $count = $count + $value->Subject->credit;
        }
        
        return view('index_Chuan/Pages/Student/result', ['score' => $score, 'count' => $count,'search'=>$search]);
        
    }

    public function educate()
    {
        return view('index_Chuan.Pages.Student.educate');
    }

    public function tuition()
    {
        $post = Post::all();
        return view('index_Chuan.Pages.Student.tuition',['post'=>$post]);
    }

    public function insurance()
    {
        return view('index_Chuan.Pages.Student.insurance');
    }

    public function listRecruitment(){
        $post = Post::where('type','1')->get();
        return view('index_Chuan.Pages.Student.postList',['post'=>$post]);
    }

    public function newRecruitment($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Student.post',['post'=>$post]);
    }
    public function recruitment()
    {
        return view('index_Chuan.Pages.StudentOld.post');
    }

    public function postRecruitment(Request $request){
        $this->validate($request,[
            'title'=>'required|min:6|unique:posts',
            'summary'=>'required|min:10',
            'content'=>'required|min:30',

        ],[
            'title.required' => 'Bạn chưa nhật tiêu đề',
            'title.min'      => 'Tiêu đề phải có ít nhất 5 ký tự',
            'summary.required' => 'Bạn chưa nhập tóm tắt',
            'summary.min'      => 'Tóm Tắt phải có ít nhất 10 ký tự',
            'content.required' => 'Bạn chưa nhập nội dung',
            'content.min'     => 'Nội dung phải có ít nhất 5 ký tự',
        ]);

        $recruitment = new Post();
        $recruitment->title = $request->title;
        $recruitment->summary = $request->summary;
        $recruitment->content = $request->content;
        $recruitment->user_id = Auth()->user()->id;
        $recruitment->type = 1;
        $recruitment->status= 0;
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
            $recruitment->img = $img;
        } else {
            $recruitment->img = "";
        }
        $recruitment->save();
        return redirect()->route('recruitment')->with('Thongbao', 'Gửi Thành Thành Công, Vui Lòng Đợi Xét Duyệt');


    } 

    public function detailMessage()
    {
        return view('index_Chuan.Pages.Student.message');
    }

    public function messageTuition($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Student.messageTuition',['post'=>$post]);
    }
}

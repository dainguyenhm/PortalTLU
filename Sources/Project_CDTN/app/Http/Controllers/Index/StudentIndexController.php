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
        $count1 = 0;
        if (Auth::check() == true) {
            if(auth()->user()->type==1){
                $user = auth()->user()->id;
                $student = Student::where('user_id', "$user")->first();
    
                $credit = Transcript::where('student_id',  $student->id)->get();
    
                foreach ($credit as $value) {
                    $count = $count + $value->Subject->credit;
                }
                foreach ($credit as $score){
                    $count1 = $count1 + $score->score;
                }
            }else{
                return view('index_Chuan.403');
            }
           
        }else{
            return view('index_Chuan.403');
        }

        return view('index_Chuan/Pages/Student/result', ['credit' => $credit, 'count1'=>$count1 ,'count' => $count, 'user' => $user,'student'=>$student]);
    }

    public function educate()
    {
        $post = Post::all();
        return view('index_Chuan.Pages.Student.educate', ['post' => $post]);
    }

    public function tuition()
    {
        $post = Post::all();
        return view('index_Chuan.Pages.Student.tuition', ['post' => $post]);
    }

    public function insurance()
    {
        return view('index_Chuan.Pages.Student.insurance');
    }

    public function listRecruitment()
    {
        $post = Post::where('type', '1')->get();
        return view('index_Chuan.Pages.Student.postList', ['post' => $post]);
    }

    public function newRecruitment($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Student.post', ['post' => $post]);
    }
    public function recruitment()
    {
        return view('index_Chuan.Pages.StudentOld.post');
    }

    public function postRecruitment(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:6|unique:posts',
            'summary' => 'required|min:10',
            'content' => 'required|min:30',

        ], [
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
        $recruitment->status = 0;
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

    public function detailMessage($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Student.message', ['post' => $post]);
    }

    public function messageTuition($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Student.messageTuition', ['post' => $post]);
    }

    public function listOldStudent(){
        $student = Student::where('type','1')->get();
        return view('index_Chuan.Pages.StudentOld.list',['student'=>$student]);
    }
}

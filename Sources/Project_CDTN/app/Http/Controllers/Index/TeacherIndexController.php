<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class TeacherIndexController extends Controller
{
    public function search()
    {
        return view('index_Chuan.Pages.Teacher.payroll');
    }

    public function educate()
    {
        $post = Post::all();
        return view('index_Chuan.Pages.Teacher.educate',['post'=>$post]);
    }

    public function tuition()
    {
        $post = Post::all();
        return view('index_Chuan.Pages.Teacher.tuition',['post'=>$post]);
    }

    public function insurance()
    {
        return view('index_Chuan.Pages.Teacher.insurance');
    }

    public function message($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Teacher.message',['post'=>$post]);
    }

    public function messageTuition($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Teacher.messageTuition',['post'=>$post]);
    }

    public function postSearch(Request $request)
    {
        $lesson             = $request->lesson;
        $teacherCoefficient = $request->teacherCoefficient;
        $subjectCoefficient = $request->subjectCoefficient;
        $classCoefficient   = $request->classCoefficient;

        $money = $lesson * ( $teacherCoefficient + $subjectCoefficient + $classCoefficient ) * 10000;
        
        return view('index_Chuan.Pages.Teacher.payroll', [
            'lesson'                => $lesson,
            'teacherCoefficient'    => $teacherCoefficient,
            'subjectCoefficient'    => $subjectCoefficient,
            'classCoefficient'      => $classCoefficient,
            'money'                 => $money
        ]);

    }

}

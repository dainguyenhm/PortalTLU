<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Student;
use App\Models\Transcript;
use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class TeacherIndexController extends Controller
{
    public function search()
    {
        return view('index_Chuan.Pages.Teacher.payroll');
    }

    public function educate()
    {
        $post = Post::all();
        return view('index_Chuan.Pages.Teacher.educate', ['post' => $post]);
    }

    public function tuition()
    {
        $post = Post::all();
        return view('index_Chuan.Pages.Teacher.tuition', ['post' => $post]);
    }

    public function insurance()
    {
        return view('index_Chuan.Pages.Teacher.insurance');
    }

    public function message($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Teacher.message', ['post' => $post]);
    }

    public function messageTuition($id)
    {
        $post = Post::find($id);
        return view('index_Chuan.Pages.Teacher.messageTuition', ['post' => $post]);
    }

    // public function postSearch(Request $request)
    // {
    //     $lesson             = $request->lesson;
    //     $teacherCoefficient = $request->teacherCoefficient;
    //     $subjectCoefficient = $request->subjectCoefficient;
    //     $classCoefficient   = $request->classCoefficient;

    //     $money = $lesson * ($teacherCoefficient + $subjectCoefficient + $classCoefficient) * 10000;

    //     return view('index_Chuan.Pages.Teacher.payroll', [
    //         'lesson'                => $lesson,
    //         'teacherCoefficient'    => $teacherCoefficient,
    //         'subjectCoefficient'    => $subjectCoefficient,
    //         'classCoefficient'      => $classCoefficient,
    //         'money'                 => $money
    //     ]);
    // }

    public function learningSearch()
    {
        return view('index_Chuan.Pages.Teacher.search');
    }

    public function postLearning(Request $request)
    {
        $count = 0;
        $count1 = 1;
        $search = $request->search;
        $student = Student::where('student_code', "$search")->first();
        $credit = Transcript::where('student_id',  $student->id)->get();

        foreach ($credit as $value) {
            $count = $count + $value->Subject->credit;
        }
        foreach ($credit as $score) {
            $count1 = $count1 +  ($score->score * $score->Subject->credit);
        }

        return view('index_Chuan/Pages/Teacher/result', ['credit' => $credit, 'count' => $count, 'count1' => $count1, 'search' => $search, 'student' => $student]);
    }
}

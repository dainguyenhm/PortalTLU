<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\Transcript;

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
        
        return view('index_Chuan/Pages/Student/result', ['score' => $score, 'count' => $count]);
        
    }

    public function educate()
    {
        return view('index_Chuan.Pages.Student.educate');
    }

    public function tuition()
    {
        return view('index_Chuan.Pages.Student.tuition');
    }

    public function insurance()
    {
        return view('index_Chuan.Pages.Student.insurance');
    }

    public function newpost()
    {
        return view('index_Chuan.Pages.Student.newpost');
    }
    public function getpost()
    {
        return view('index_Chuan.Pages.StudentOld.post');
    }

    public function message()
    {
        return view('index_Chuan.Pages.Student.message');
    }

    public function messageTuition()
    {
        return view('index_Chuan.Pages.Student.messageTuition');
    }
}

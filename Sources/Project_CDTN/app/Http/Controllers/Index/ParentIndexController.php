<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Transcript;
use App\Models\User;

class ParentIndexController extends Controller
{
    public function search()
    {
        return view('index_Chuan.Pages.Parent.search');
    }

    public function postSearch(Request $request)
    {
        $count = 0;
        $search = $request->search;
        $user = User::where('phone_number',"$search")->first();
        $student = Student::where('user_id', $user->id)->first();
        $score = Transcript::where('student_id',  $student->id)->get();
        
        foreach ($score as $value) {
            $count = $count + $value->Subject->credit;
        }
        
        return view('index_Chuan/Pages/Parent/result', ['score' => $score, 'count' => $count]);
        
    }
}

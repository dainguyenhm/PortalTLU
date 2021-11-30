<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    const STUDENT = 0;
    const ALUMNI = 1;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function faculityMajor()
    {
        return $this->hasOne(FaculityMajor::class, 'faculity_id', 'id');
    }

    public function transcript()
    {
        return $this->hasOne(Transcript::class, 'student_id', 'id');
    }

    public static function createStudentFromFile($userId, $code, $session, $class, $faculityName)
    {
        $faculity = FaculityMajor::where('name', $faculityName)->first();
        $student = new Student;
        $student->type = self::STUDENT;
        $student->user_id = $userId;
        $student->student_code = $code;
        $student->session = $session;
        $student->class = $class;
        $student->faculity_id = $faculity->id ?? 0;
        $student->save();
        return $student;
    }

    public static function createStudentFromFiles($userId, $code, $session, $class, $faculityName, $graduation_type, $graduation_year, $graduation_form, $decision,$period)
    {
        $faculity = FaculityMajor::where('name', $faculityName)->first();
        $student = new Student;
        $student->type = self::ALUMNI;
        $student->user_id = $userId;
        $student->student_code = $code;
        $student->session = $session;
        $student->class = $class;
        $student->faculity_id = $faculity->id ?? 0;
        $student->graduation_type = $graduation_type;
        $student->graduation_year = $graduation_year;
        $student->graduation_form = $graduation_form;
        $student->decision = $decision;
        $student->period = $period;
        $student->save();
        return $student;
    }
}

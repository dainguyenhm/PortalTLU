<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $table = 'teachers';

    public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public static function createTeacherFromFiles(
        $userId, 
        $code,
        $department,
        $coefficients_salary, 
        $position_coefficient, 
        $basic_salary, 
        $salary,
        $bonus,
        $social_insurance,
        $health_insurance,
        $personal_income_tax
    )
    {
        $teacher = Teacher::where('teacher_code', $code)->first();

        if(!$teacher){
            $teacher = new Teacher;
            $teacher->user_id               = $userId;
            $teacher->teacher_code          = $code;
        }

        $teacher->coefficients_salary   = $coefficients_salary;
        $teacher->position_coefficient  = $position_coefficient;
        $teacher->basic_salary          = $basic_salary;
        $teacher->salary                = $salary;
        $teacher->bonus                 = $bonus;
        $teacher->social_insurance      = $social_insurance;
        $teacher->health_insurance      = $health_insurance;
        $teacher->personal_income_tax   = $personal_income_tax;
        $teacher->department            = $department;
        $teacher->save();

        return $teacher;
    }
}

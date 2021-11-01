<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $table = 'subjects';

    public function transcripts() 
    {
        return $this->hasMany(Transcript::class,'subject_id','id');
    }

    public static function createSubjectFromFile($name, $code, $credit){
        $subject = new Subject;
        $subject->name          = $name;
        $subject->subject_code  = $code;
        $subject->credit        = $credit;
        $subject->save();
        
        return $subject;
    }
}
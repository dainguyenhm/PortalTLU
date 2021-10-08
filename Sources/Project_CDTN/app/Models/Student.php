<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    public function user() 
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function faculityMajor() 
    {
        return $this->hasOne(FaculityMajor::class,'faculity_id','id');
    }

    public function transcript() 
    {
        return $this->hasOne(Transcript::class,'student_id','id');
    }
}

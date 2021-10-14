<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Students;

class Transcript extends Model
{
    use HasFactory;
    protected $table = 'transcripts';

    protected $fillable = ['name', 'student_id', 'subject_id','score'];

    public function student() 
    {
        return $this->belongsTo(Students::class, 'student_id','id');
    }

    public function subject() 
    {
        return $this->belongsTo(Subject::class, 'subject_id','id');
    }
}

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
}
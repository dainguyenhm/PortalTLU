<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportSubject extends Model
{
    protected $fillable = [
        'subject_code',
        'name',
        'credit',
        'student_code',
        'score'
    ];
}

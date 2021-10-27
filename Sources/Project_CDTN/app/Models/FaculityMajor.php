<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Students;

class FaculityMajor extends Model
{
    use HasFactory;
    protected $table = 'faculity_majors';

    public function students()
    {
        return $this->belongsToMany(Students::class, 'faculity_id', 'id');
    }

    public function faculityMajors()
    {
        return $this->hasMany(FaculityMajor::class);
    }

    public function childrenFaculityMajors()
    {
        return $this->hasMany(FaculityMajor::class,'faculity_major_id','id')->with('faculityMajors');
    }

    // public function childs()
    // {
    //     return $this->hasMany(FaculityMajor::class)->with('childs');
    // }

    // public function parent()
    // {
    //     return $this->belongsTo(FaculityMajor::class, 'parent_id', 'id')->with('parent');
    // }
}

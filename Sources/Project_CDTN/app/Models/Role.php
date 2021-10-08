<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';

    public function userRoles()
    {
        return $this->hasMany(UserRole::class ,'role_id','id');
    }

    public function permisstion()
    {
        return $this->belongsToMany(Permisstion::class,'role_permisstions');
    }
}

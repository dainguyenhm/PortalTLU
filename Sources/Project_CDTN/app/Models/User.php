<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const ADMIN = 0;
    const STUDENT = 1;
    const TEACHER = 2;

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function student() 
    {
         return $this->hasOne(Student::class, 'user_id', 'id');
    }

    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'user_id', 'id');
    }

    public function enterprise()
    {
        return $this->hasOne(Enterprise::class, 'user_id', 'id');
    }

    public function userRoles()
    {
        return $this->hasMany(UserRole::class, 'user_id', 'id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    public static function createUserFromFile($code, $name, $birthDay, $sex){
        $arrName = explode(' ',$name);
        $firstName = array_shift($arrName);
        $lastName = implode(' ',$arrName);

        $user = new User;
        $user->user_name = $code;
        $user->password = Hash::make($code);
        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->date_birth = $birthDay;
        $user->type = self::STUDENT;
        $user->sex = $sex;
        $user->email = sprintf('%s@thanglong.edu.vn', $code);
        $user->save();

        return $user;
    }

    public static function createUserFromFiles($code, $name, $birthDay, $sex, $nation, $place_birth,$nationality){
        $arrName = explode(' ',$name);
        $firstName = array_shift($arrName);
        $lastName = implode(' ',$arrName);

        $user = new User;
        $user->user_name = $code;
        $user->password = Hash::make($code);
        $user->first_name = $firstName;
        $user->last_name = $lastName;
        $user->date_birth = $birthDay;
        $user->type = self::STUDENT;
        $user->sex = $sex;
        $user->email = sprintf('%s@thanglong.edu.vn', $code);
        $user->nation = $nation;
        $user->place_birth = $place_birth;
        $user->nationality = $nationality;
        $user->save();

        return $user;
    }
}
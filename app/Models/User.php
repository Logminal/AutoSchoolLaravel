<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['login', 'surname', 'patronymic', 'password', 'phone', 'course_id', 'status', 'img'];

    public $timestamps = false;

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $fillable = ['name_course', 'price_course', 'category'];

    public $timestamps = false;

    public function user()
    {
        return $this->hasManyTo(User::class);
    }

    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class report extends Model
{
    protected $fillable = [
        'user_id',
        'teacher_id',
        'course_id',
        'course_title',
        'report',
    ];
}

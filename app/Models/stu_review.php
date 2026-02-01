<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class stu_review extends Model
{
    protected $fillable = [
        'Student_id',
        'Teacher_id',
        'course_title',
        'review',
    ];
}

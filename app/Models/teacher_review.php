<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class teacher_review extends Model
{
    protected $fillable = [
        'Teacher_id',
        'Student_id',
        'Student_name',
        'course_title',
        'review',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'Teacher_id');
    }
}

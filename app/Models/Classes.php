<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    protected $table = 'classes';

    protected $fillable = [
        'user_id',
        'title',
        'category_id',
        'tags',
        'overview',
        'years_experience',
        'is_certified_teacher',
        'file',
    ];
}

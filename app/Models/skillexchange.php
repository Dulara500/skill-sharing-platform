<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class skillexchange extends Model
{
    protected $table = 'skillexchange';
    protected $fillable = [
        'user_id',
        'teach',
        'exchange',
    ];
    protected $casts = [
        'teach' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

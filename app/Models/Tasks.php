<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Tasks extends Model
{
    protected $fillable = [
        'title',
        'description', 
        'conclusion_date',
        'period',
        'course_id',
        'user_id'
    ];

    public function course(): HasOne
    {
        return $this->hasOne(Course::class);
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
}

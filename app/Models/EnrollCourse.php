<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollCourse extends Model
{
    use HasFactory;

    public function enrollCourseDetail()
    {
        return $this->hasMany(EnrollCourseDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

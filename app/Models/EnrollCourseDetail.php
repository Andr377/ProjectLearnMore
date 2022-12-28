<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnrollCourseDetail extends Model
{
    use HasFactory;

    public function course() {
        return $this->belongsTo(Course::class);
    }

    public function enrollCourse() {
        return $this->belongsTo(EnrollCourse::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function courseMaterial() {
        return $this->hasMany(CourseMaterial::class);
    }

    public function courseCategory() {
        return $this->belongsTo(CourseCategory::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function enrollCourseDetail() {
        return $this->hasMany(EnrollCourseDetail::class);
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function enrollCourse() {
        return $this->hasMany(EnrollCourse::class);
    }

    public function course() {
        return $this->hasMany(Course::class);
    }

    public function lectureApproval() {
        return $this->hasMany(LectureApproval::class);
    }

}
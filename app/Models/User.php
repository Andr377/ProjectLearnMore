<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    public function enrollCourse()
    {
        return $this->hasMany(EnrollCourse::class);
    }

    public function course()
    {
        return $this->hasMany(Course::class);
    }

    public function lectureApproval()
    {
        return $this->hasMany(LectureApproval::class);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{

    public function index()
    {
        // -> Show all courses.
        $courses = Course::all();

        return view('user.home')->with('courses', $courses);
    }
}

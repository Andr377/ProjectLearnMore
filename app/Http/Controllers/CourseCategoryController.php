<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CourseCategory;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{

    public function categoryIndex($id)
    {
        $courses = CourseCategory::join('courses', 'courses.id', '=', 'course_categories.CourseId')
            ->where('course_categories.CategoryId', '=', $id)->get();
        $category = Category::find($id);

        return view('user.courseCategory')->with('courses', $courses)->with('categoryName', $category->CategoryName);
    }
}

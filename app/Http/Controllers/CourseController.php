<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{

    public function index()
    {
        // -> Show all courses.
        $courses = Course::all();

        return view('user.home')->with('courses', $courses);
    }

    public function insertCourseIndex()
    {
        return view('user.insertNewCourse');
    }

    public function insertCourse(Request $request)
    {
        $request->validate([
            'course_title' => 'required',
            'course_description' => 'required',
            'course_category' => 'required|'
        ]);

        $user = Auth::user();

        $course = new Course();
        $course->CourseTitle = $request->course_title;
        $course->CourseDescription = $request->course_description;
        $course->CreatedDate = Carbon::now()->toDateString();
        $course->LectureId = $user->id;
        $course->save();

        $category = DB::table('categories')->where('CategoryName', '=', $request->course_category)->first();

        if (is_null($category)) {
            $category = new Category();
            $category->CategoryName = $request->course_category;
            $category->save();
        }

        $courseCategory = new CourseCategory();
        $courseCategory->CourseId = $course->id;
        $courseCategory->CategoryId = $category->id;
        $courseCategory->save();

        return redirect('/MyCourses');
    }

    public function editCourse($courseId)
    {
        $course = Course::find($courseId);

        $materials = DB::table('course_materials')->where('CourseId', '=', $courseId)->get();

        return view('user.manageCourse')->with('course', $course)->with('materials', $materials);
    }

    public function deleteCourse($courseId)
    {
        $course = Course::find($courseId);
        $course->delete();

        return redirect('/MyCourses');
    }
}

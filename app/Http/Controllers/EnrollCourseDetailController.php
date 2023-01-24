<?php

namespace App\Http\Controllers;

use App\Models\EnrollCourseDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EnrollCourseDetailController extends Controller
{
    public function viewCourse($courseId)
    {
        $user = Auth::user();

        $course = DB::table('enroll_course_details')
            ->join('enroll_courses', 'enroll_courses.id', '=', 'enroll_course_details.EnrollCourseId')
            ->join('courses', 'courses.id', '=', 'enroll_course_details.CourseId')
            ->where('enroll_courses.UserId', '=', $user->id)
            ->where('enroll_course_details.CourseId', '=', $courseId)
            ->first();

        $materials = DB::table('course_materials')->where('CourseId', '=', $courseId)->get();

        return view('user.viewCourse')->with('course', $course)->with('materials', $materials);
    }

    public function insertReview(Request $request, $courseId, $enrollCourseId) {
        $request->validate([
            'rating' => 'required|numeric',
            'description' => 'required|max:255',
        ]);

        $enrollCourseDetail = EnrollCourseDetail::find($enrollCourseId);
        $enrollCourseDetail->Rating = $request->rating;
        $enrollCourseDetail->RatingDescription = $request->description;
        $enrollCourseDetail->save();

        return redirect('/ViewCourse'.'/'.$courseId);
    }

}

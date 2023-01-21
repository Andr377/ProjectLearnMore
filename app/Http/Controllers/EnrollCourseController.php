<?php

namespace App\Http\Controllers;

use App\Models\EnrollCourse;
use App\Models\EnrollCourseDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EnrollCourseController extends Controller
{
    public function enrollCourse($courseId)
    {
        $user = Auth::user();
        $check = DB::table('enroll_course_details')
            ->join('enroll_courses', 'enroll_course_details.EnrollCourseId', '=', 'enroll_courses.id')
            ->where('enroll_course_details.CourseId', '=', $courseId)
            ->where('enroll_courses.UserId', '=', $user->id)
            ->first();


        // Buat enroll baru
        if (is_null($check)) {
            $newEnroll = new EnrollCourse();
            $newEnroll->UserId = $user->id;
            $newEnroll->save();

            $newEnrollDetail = new EnrollCourseDetail();
            $newEnrollDetail->CourseId = $courseId;
            $newEnrollDetail->EnrollCourseId = $newEnroll->id;

            // Total Users Enrolled
            $totalEnrolled = count(DB::table('enroll_course_details')
                ->join('enroll_courses', 'enroll_course_details.EnrollCourseId', '=', 'enroll_courses.id')
                ->where('enroll_course_details.CourseId', '=', $courseId)
                ->get());

            $newEnrollDetail->TotalUsersEnrolled = $totalEnrolled;
            $newEnrollDetail->DateEnrolled = Carbon::now()->toDateString();
            $newEnrollDetail->save();
        }

        // Masuk view course
        return redirect('/ViewCourse' . '/' . $courseId);
    }
}

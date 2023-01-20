<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EnrollCourseDetail;
use App\Models\LectureApproval;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function signIn(Request $request)
    {
        $user = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($user)) {
            $request->session()->regenerate();

            if (Auth::user()->Role == 'member') {
                return redirect('/home');
            }

            return redirect('/admin');
        }

        return back()->with('loginError', 'Login Error!');
    }

    public function signUp(Request $request)
    {
    }

    public function myProfileIndex()
    {
        $user = Auth::user();

        if ($user->Role == 'admin') {
            return view('admin.myProfile')->with('user', $user);
        }

        return view('user.myProfile')->with('user', $user);
    }

    public function logOut()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerateToken();
        return redirect('/');
    }

    public function myCoursesindex()
    {
        $user = Auth::user();
        $myCourses = Course::join('users', 'users.id', '=', 'courses.LectureId')->where('users.id', $user->id)->get();
        $enrolledCourses = DB::table('courses')
            ->join('enroll_course_details', 'enroll_course_details.CourseId', '=', 'courses.id')
            ->join('enroll_courses', 'enroll_course_details.EnrollCourseId', '=', 'enroll_courses.id')
            ->where('enroll_courses.UserId', '=', $user->id)->get();

        return view('user.myCourses')->with('enrolledCourses', $enrolledCourses)->with('myCourses', $myCourses);
    }

    public function adminIndex()
    {
        return view('admin.home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\EnrollCourseDetail;
use App\Models\LectureApproval;
use App\Models\Question;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $request->validate([
            'username' => 'required|unique:users,Username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'conf_password' => 'required|same:password|min:6'
        ]);

        $user = new User();
        $user->Username = $request->username;
        $user->Name = $request->username;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->JoinDate = Carbon::now()->toDateString();
        $user->save();

        return back()->with('signUpSuccess', 'Sign Up Success!');
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
        $myCourses = User::join('courses', 'users.id', '=', 'courses.LectureId')->where('users.id', $user->id)->get();
        $enrolledCourses = DB::table('courses')
            ->join('enroll_course_details', 'enroll_course_details.CourseId', '=', 'courses.id')
            ->join('enroll_courses', 'enroll_course_details.EnrollCourseId', '=', 'enroll_courses.id')
            ->where('enroll_courses.UserId', '=', $user->id)->get();

        return view('user.myCourses')->with('enrolledCourses', $enrolledCourses)->with('myCourses', $myCourses)->with('user', $user);
    }

    public function adminIndex()
    {
        return view('admin.home');
    }

    public function complainIndex()
    {
        if (Auth::user()->Role == 'admin') {
            $questions = User::join('questions', 'users.id', '=', 'questions.UserId')->get();

            return view('admin.customerService')->with('questions', $questions);
        }

        return view('user.customerService');
    }

    public function insertComplain(Request $request)
    {
        $request->validate([
            'question' => 'required'
        ]);

        $user = Auth::user();

        $question = new Question();
        $question->UserId = $user->id;
        $question->Question = $request->question;
        $question->save();

        return redirect('/home');
    }
}

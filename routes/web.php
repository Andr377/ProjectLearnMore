<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseMaterialController;
use App\Http\Controllers\EnrollCourseController;
use App\Http\Controllers\EnrollCourseDetailController;
use App\Http\Controllers\LectureApprovalController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Controller::class, 'index']);

// Sign In dan Sign Up -> sama-sama masuk home.
Route::post('/SignIn', [UserController::class, 'signIn']);
Route::post('/SignUp', [UserController::class, 'signUp']);

// Member's Routes
Route::get('/home', [CourseController::class, 'index'])->middleware('auth');
Route::get('/MyProfile', [UserController::class, 'myProfileIndex'])->middleware('auth');
Route::get('/MyCourses', [UserController::class, 'myCoursesindex'])->middleware('auth');
Route::get('/EnrollCourse/{courseId}', [EnrollCourseController::class, 'enrollCourse']);
Route::get('/ViewCourse/{courseId}', [EnrollCourseDetailController::class, 'viewCourse']);
Route::post('/MakeReview/{CourseId}/{EnrollCourseId}', [EnrollCourseDetailController::class, 'insertReview']);
Route::get('/InsertNewCourse', [CourseController::class, 'insertCourseIndex'])->middleware('lecturer');
Route::post('/InsertNewCourse', [CourseController::class, 'insertCourse'])->middleware('lecturer');
Route::get('/ManageCourse/{courseId}', [CourseController::class, 'editCourse'])->middleware('lecturer');
Route::get('/ManageCourse/InsertNewMaterial/{courseId}', [CourseMaterialController::class, 'insertMaterialIndex'])->middleware('lecturer');
Route::post('/ManageCourse/InsertNewMaterial/{courseId}', [CourseMaterialController::class, 'insertMaterial'])->middleware('lecturer');
Route::get('/ManageCourse/DeleteCourse/{courseId}', [CourseController::class, 'deleteCourse'])->middleware('auth');
Route::get('/CourseCategory/{categoryId}', [CourseCategoryController::class, 'categoryIndex'])->middleware('auth');
Route::get('/AskAdmin', [UserController::class, 'complainIndex'])->middleware('auth');
Route::post('/AskAdmin', [UserController::class, 'insertComplain'])->middleware('auth');
Route::get('/LogOut', [UserController::class, 'logOut']);

// Admin's Routes
Route::get('/admin', [UserController::class, 'adminIndex'])->middleware('admin');

// Admin's and Member's Routes
Route::get('/LectureApproval', [LectureApprovalController::class, 'index'])->middleware('auth');
Route::get('/LectureApproval/{approve}/{UserId}/{reqId}', [LectureApprovalController::class, 'approval'])->middleware('auth');

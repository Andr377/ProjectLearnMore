<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CourseCategoryController;
use App\Http\Controllers\CourseController;
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
Route::get('/home', [CourseController::class, 'index']);
Route::get('/MyProfile', [UserController::class, 'myProfileIndex']);
Route::get('/MyCourses', [UserController::class, 'myCoursesindex']);
Route::get('/CourseCategory/{categoryId}', [CourseCategoryController::class, 'categoryIndex']);
Route::get('/LogOut', [UserController::class, 'logOut']);

// Admin's Routes
Route::get('/admin', [UserController::class, 'adminIndex']);

// Admin's and Member's Routes
Route::get('/LectureApproval', [LectureApprovalController::class, 'index']);
Route::get('/LectureApproval/{approve}/{UserId}/{reqId}', [LectureApprovalController::class, 'approval']);

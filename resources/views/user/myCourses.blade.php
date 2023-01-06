@extends('template')

@section('document_title')
    My Courses
@endsection

@section('home_button')
    '/home'
@endsection

@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="/MyCourses">My Courses</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/MyProfile">My Profile</a>
    </li>
@endsection

@section('body')
    {{-- Show all my courses. --}}
    <div class="text-center m-5">
        <h1>
            My Courses
        </h1>

    </div>

    <div class="d-flex p-2">
        @foreach ($enrolledCourses as $enrolledCourse)
            <div class="card text-center m-2 w-75">
                <div class="card-header">
                    <h6>
                        Your Rating
                    </h6>
                    {{ $enrolledCourse->Rating }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $enrolledCourse->CourseTitle }}</h5>
                    <p class="card-text">{{ $enrolledCourse->CourseDescription }}</p>
                    <a href="#" class="btn btn-primary">View Course</a>
                </div>
                <div class="card-footer text-muted">
                    <h6>
                        Date Enrolled
                    </h6>
                    {{ $enrolledCourse->DateEnrolled }}
                </div>
            </div>
        @endforeach
    </div>
@endsection

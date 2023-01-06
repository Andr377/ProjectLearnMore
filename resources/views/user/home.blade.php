@extends('template')

@section('document_title')
    Home
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
    {{-- Show all courses. --}}
    <div class="text-center m-5">
        <h1>
            All Courses
        </h1>

    </div>

    <div class="d-flex p-2">
        @foreach ($courses as $course)
            <div class="card text-center m-2 w-75">
                <div class="card-header">
                    <h6>
                        Average Rating
                    </h6>
                    {{ $course->RatingAvg }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $course->CourseTitle }}</h5>
                    <p class="card-text">{{ $course->CourseDescription }}</p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                </div>
                <div class="card-footer text-muted">
                    {{ $course->CreatedDate }}
                </div>
            </div>
        @endforeach
    </div>
@endsection

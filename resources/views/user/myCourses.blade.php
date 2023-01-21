@extends('template')

@section('document_title')
    My Courses
@endsection

@section('home_button')
    '/home'
@endsection

@section('navbar')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Course Category
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($categories as $category)
                <li>
                    <a class="dropdown-item" href="/CourseCategory/{{ $category->id }}">{{ $category->CategoryName }}</a>
                </li>
                <li>
                    <hr class="dropdown-divider">
                </li>
            @endforeach
        </ul>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/MyCourses">My Courses</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/MyProfile">My Profile</a>
    </li>
@endsection

@section('body')

    @if (count($myCourses) > 0)
        {{-- Show all my courses --}}
        <div class="text-center m-5">
            <h1>
                Manage Courses
            </h1>

        </div>

        <div class="d-flex p-2">
            @foreach ($myCourses as $myCourse)
                <div class="card text-center m-2 w-75">
                    <div class="card-header">
                        <h6>
                            Course Rating
                        </h6>
                        {{ $myCourse->RatingAvg }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $myCourse->CourseTitle }}</h5>
                        <p class="card-text">{{ $myCourse->CourseDescription }}</p>
                        <a href="#" class="btn btn-primary">View Course</a>
                    </div>
                    <div class="card-footer text-muted">
                        <h6>
                            Date Created
                        </h6>
                        {{ $myCourse->CreatedDate }}
                    </div>
                </div>
            @endforeach
        </div>
    @endif

    {{-- Show all my enrolled courses. --}}
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

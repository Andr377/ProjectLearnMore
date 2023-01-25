@extends('template')

@section('document_title')
    Home
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
    <section class="home" id="home">
        <div class="content">
            <h3>The Best Courses</h3>
            <h3>You Will Find Here!</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, dolorem? Voluptatum accusamus iste ratione
                quia eius officia, dicta assumenda laudantium nesciunt tempore sapiente perspiciatis earum reiciendis
                deleniti officiis aut nisi.</p>
            <a href="#" class="btn">Get Started</a>
        </div>
    </section>

    <div class="d-flex justify-content-center p-2 row row-cols-1 row-cols-sm-2  row-cols-lg-4 g-5">
        @foreach ($courses as $course)
            <div class="card text-center m-5 w-10">
                <div class="card-header">
                    <h6>
                        Average Rating
                    </h6>
                    {{ $course->RatingAvg }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $course->CourseTitle }}</h5>
                    <p class="card-text">{{ $course->CourseDescription }}</p>
                    <a href="/EnrollCourse/{{ $course->id }}" class="btn btn-primary">Enroll Now</a>
                </div>
                <div class="card-footer text-muted">
                    {{ $course->CreatedDate }}
                </div>
            </div>
        @endforeach
    </div>
@endsection

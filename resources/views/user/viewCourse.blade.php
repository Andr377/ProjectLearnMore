@extends('template')

@section('document_title')
    Course
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
    {{-- Show all my enrolled courses. --}}
    <div class="text-center m-5">
        <h1>
            {{ $course->CourseTitle }}
        </h1>
        <h5>
            {{ $course->CourseDescription }}
        </h5>
        <h6>
            Created at:
            {{ $course->CreatedDate }}
        </h6>

    </div>

    <div class="d-flex p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">View Material</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($materials as $material)
                    <tr>
                        <td><a href="{{ asset($material->FilePath) }}" target="_blank" class="text-decoration-none">Click
                                Here</a></td>
                        <td>{{ $material->MaterialDescription }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if ($course->Rating)
        <div class="d-flex flex-column  mt-5 p-5">
            <div>
                <h6>
                    Your Rating: {{ $course->Rating }}
                </h6>
            </div>

            <div class="mt-5">
                <h6>
                    Your Review
                </h6>
                <p>
                    {{ $course->RatingDescription }}
                </p>
            </div>
        </div>
    @else
        <div class="p-5 w-50">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ $errors->first() }}
                </div>
            @endif

            <form action="/MakeReview/{{ $course->CourseId }}/{{ $course->EnrollCourseId }}" method='POST'
                class="align-items-center d-flex flex-column">
                @csrf
                <div class="input-group mb-3">
                    <input type="float" class="form-control" placeholder="Your Rating" name="rating">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Your Review Description" name="description">
                </div>

                <button type="submit" class="btn btn-primary mt-5 w-25">Create a Review</button>
            </form>
        </div>
    @endif
@endsection

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
                        <td><a href="{{ asset($material->FilePath) }}" target="_blank" class="text-decoration-none">Click Here</a></td>
                        <td>{{ $material->MaterialDescription }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection

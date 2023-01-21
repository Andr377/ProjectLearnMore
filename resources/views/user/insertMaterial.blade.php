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
    <div class="d-flex justify-content-center mt-5">
        <h1>
            Insert New Material
        </h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ $errors->first() }}
        </div>
    @endif

    <div class="d-flex justify-content-center mt-5">
        <form action="/ManageCourse/InsertNewMaterial/{{ $courseId }}" method='POST'
            class="align-items-center d-flex flex-column" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Material Description" name="material_description">
            </div>

            <div class="input-group mb-3">
                <input type="file" class="form-control" name="material_file">
            </div>

            <button type="submit" class="btn btn-primary mt-5 w-50">Insert New Material</button>
        </form>

    </div>
@endsection

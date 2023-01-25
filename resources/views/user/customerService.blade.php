@extends('template')

@section('document_title')
    Customer Service
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
    <div class="d-flex flex-column align-items-center me-5 ">
        <h3 class="text-center mb-5 mt-5">
            Ask Questions
        </h3>

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="/AskAdmin" method='POST' class="align-items-center d-flex flex-column ms-5 border border-2 rounded p-3">
            @csrf
            <div class="input-group mb-3 d-flex flex-column">
                <label for="question">Insert your questions:</label>
                <textarea id="question" name="question" rows="10" cols="50"></textarea>
            </div>

            <button type="submit" class="btn btn-primary mt-5 w-50">Insert Questions</button>
        </form>
    </div>
@endsection

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
                <li><a class="dropdown-item" href="#">{{ $category->CategoryName }}</a></li>
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
    <div class="d-flex flex-column align-items-center mt-5">
        <h1>
            Awaiting for Admin's Permission
        </h1>

        <h5>Request Date: {{ $reqDate }}</h5>

        <div class="mt-5">
            <a class="btn btn-danger" href="{{ url()->previous() }}">Back</a>
        </div>

    </div>
@endsection

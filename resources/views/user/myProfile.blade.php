@extends('template')

@section('document_title')
    My Profile
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
    <div class="align-items-center m-5 d-flex flex-column">

        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">

                <li class="list-group-item">
                    <label for=""><strong>Username: </strong></label>
                    {{ $user->Username }}
                </li>
                <li class="list-group-item">
                    <label for=""><strong>Name: </strong></label>
                    {{ $user->Name }}
                </li>
                <li class="list-group-item">
                    <label for=""><strong>Date of Birth: </strong></label>
                    {{ $user->DOB }}
                </li>
                <li class="list-group-item">
                    <label for=""><strong>Email: </strong></label>
                    {{ $user->email }}
                </li>
                <li class="list-group-item">
                    <label for=""><strong>Joined Date: </strong></label>
                    {{ $user->JoinDate }}
                </li>
            </ul>
            <p class="card-text text-center m-5">You are {{ $user->IsLecture ? 'a lecture' : 'not a lecture' }}</p>
        </div>

        @if (!$user->IsLecture)
            <div class="mt-5">
                <a class="btn btn-primary" href="/LectureApproval">Become a Lecture</a>
            </div>
        @endif

        <div class="mt-5">
            <a class="btn btn-danger" href="/LogOut">Log Out</a>
        </div>

    </div>
@endsection

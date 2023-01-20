@extends('template')

@section('document_title')
    Home
@endsection

@section('home_button')
    '/admin'
@endsection

@section('navbar')
    <li class="nav-item">
        <a class="nav-link" href="/LectureApproval">Lecture Requests</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/MyProfile">My Profile</a>
    </li>
@endsection

@section('body')
    <div>
        <h1>
            Welcome back Admin
        </h1>
    </div>
@endsection

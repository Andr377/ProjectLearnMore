@extends('template')

@section('document_title')
    Users Question
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

        <div class="d-flex justify-content-center mt-5">
            <h1>
                Member's Questions
            </h1>
        </div>

        <div class="container mt-5 text-center">
            <div class="row bg-secondary rounded text-white p-2">
                <div class="col">
                    <h6>
                        Name
                    </h6>
                </div>
                <div class="col">
                    <h6>
                        Question
                    </h6>
                </div>
                <div class="col">
                </div>
            </div>

            @foreach ($questions as $question)
                <div class="row mt-2">
                    <div class="col">
                        {{ $question->Name }}
                    </div>
                    <div class="col">
                        {{ $question->Question }}
                    </div>
                    <div class="col">
                        <a href="https://mail.google.com/mail/u/0/?fs=1&to={{ $question->email }}&su={{ $question->Name }} Reply&body=Hi this is Admin&tf=cm"
                            target="_blank">Reply</a>
                    </div>
                </div>
            @endforeach

        </div>

    </div>
@endsection

@extends('template')

@section('document_title')
    My Profile
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

    <div class="d-flex justify-content-center mt-5">
        <h1>
            List of Member's Admin Requests
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
                    Request Date
                </h6>
            </div>
            <div class="col">
                <h6>
                    Approval Date
                </h6>
            </div>
        </div>

        @foreach ($lecRequests as $lecReq)
            <div class="row mt-2">
                <div class="col">
                    {{ $lecReq->Name }}
                </div>
                <div class="col">
                    {{ $lecReq->RequestDate }}
                </div>
                <div class="col">
                    @if ($lecReq->ApprovalDate)
                        {{ $lecReq->ApprovalDate }}
                    @else
                        <a class="text-decoration-none"
                            href="/LectureApproval/{{ 1 }}/{{ $lecReq->UserId }}/{{ $lecReq->id }}">Accept</a>
                        <a class="link-danger text-decoration-none"
                            href="/LectureApproval/{{ 0 }}/{{ $lecReq->UserId }}/{{ $lecReq->id }}">Decline</a>
                    @endif
                </div>
            </div>
        @endforeach

    </div>
@endsection

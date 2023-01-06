@extends('template')

@section('document_title')
    Home
@endsection

@section('home_button')
    '/'
@endsection

@section('body')
    <div class="justify-content-center d-flex mt-5">

        <div class="d-flex flex-column align-items-center me-5">
            <h3 class="text-center mb-5">
                Sign Up
            </h3>

            <form action="/SignUp" method='POST' class="align-items-center d-flex flex-column">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                </div>

                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Phone Number" name="phone_number">
                </div>

                <button type="submit" class="btn btn-primary mt-5 w-50">Sign Up</button>
            </form>
        </div>

        <div class="d-flex flex-column align-items-center ms-5">
            <h3 class="text-center mb-5">
                Sign In
            </h3>

            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                </div>
            @endif

            <form action="/SignIn" method='POST' class="align-items-center d-flex flex-column">
                @csrf
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Email" name="email">
                </div>

                <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>

                <button type="submit" class="btn btn-primary mt-5 w-50">Sign In</button>
            </form>
        </div>


    </div>
@endsection

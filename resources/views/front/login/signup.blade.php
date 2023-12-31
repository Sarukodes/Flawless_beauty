@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="login ">
        <form action="{{ route('front.auth.signup') }}" method="POST">
            @csrf
            <div class="box">
                <div class="row">
                    <div class="col md 6">
                        <div class="girl-signup">
                            @foreach ($imagess as $image)
                            <img src="{{ asset($image->signup_image) }}" alt="" srcset="">
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6 text">
                        <div class="head">
                            <p class="flaw">Flawless</p>
                            {{-- <p class="log">Signup</p> --}}
                            <p class="welcome"> Welcome to Flawless! Please Signup</p>
                        </div>
                        <div class="form">
                            <label for="">Name*</label><br>
                            <input type="text" name="name" id="name" class="input-box" required>
                        </div>
                        <div class="form">
                            <label for="">email*</label><br>
                            <input type="text" name="email" id="email" class="input-box" required>
                        </div>
                        <div class="form">
                            <label for="">Password*</label><br>
                            <input type="text" name="password" id="password" class="input-box" required>
                        </div>
                        <button class="login"> Signup </button>
                        <div class="down">
                            Already have an account? <a href="{{ route('front.auth.login') }}" class="">Login</a>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection

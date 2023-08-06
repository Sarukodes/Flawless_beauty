@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="login ">
        <form action="{{route('front.signup')}}" method="POST">
            @csrf
            <div class="box">
                <div class="head">
                    Welcome to Flawless! Please Signup
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
                    <div class="down">
                        Already have an account? <a href="{{ route('front.login') }}" class="">Login</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

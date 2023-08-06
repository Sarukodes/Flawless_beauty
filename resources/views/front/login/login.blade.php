@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="login ">
        <form action="{{route('front.login')}}" method="POST">
            @csrf
            <div class="box">
                <div class="head">
                    Welcome to Flawless! Please login
                </div>
                <div class="form">
                    <label for="">Email*</label><br>
                    <input type="text" name="email" id="email" class="input-box" required>
                </div>
                <div class="form">
                    <label for="">Password*</label><br>
                    <input type="text" name="password" id="password" class="input-box" required>
                </div>
                <a href="" class="form"> Forget Password?</a>
                <button class="login"> Login </button>
                <div class="down">
                    Don't have an account? <a href="{{ route('front.signup') }}" class="">Signup</a>
                </div>
            </div>
        </form>
    </div>
@endsection

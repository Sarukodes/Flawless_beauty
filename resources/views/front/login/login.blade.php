@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="login ">
        <form action="{{ route('front.login') }}" method="POST">
            @csrf
            {{-- <section class="home"
            style=" background-image: linear-gradient(
            180deg,
            rgba(22, 23, 23, 0.42),
            rgba(12, 12, 12, 0.167)
        ),
        @foreach ($images as $image)
        url('{{ asset($image->image) }}');
        @endforeach"> --}}

            <div class="box">
                <div class="row">
                    <div class="col-md-6 text">
                        <div class="head">
                            <p class="flaw">Flawless</p>
                            <p class="log">Login</p>
                            <p class="welcome">Welcome back!</p>
                        </div>
                        <div class="form">
                            <label for="">Email</label><br>
                            <input type="text" name="email" id="email" class="input-box" placeholder="Enter email address" required>
                        </div>
                        <div class="form">
                            <label for="">Password</label><br>
                            <input type="password" name="password" id="password" class="input-box"  placeholder="Enter your password" required>
                            {{-- <i class="password-toggle-icon fas fa-eye" id="password-toggle"></i> --}}
                        </div>
                        <a href="" class="form"> Forget Password?</a>
                        <button class="login"> Login </button>
                        <p class="google">Or you can log In with email<br>
                            <button class="goo"> <i class="fa-brands fa-google"></i> Login with google</button>
                        <div class="down">
                            Don't have an account? <a href="{{ route('front.signup') }}" class="">Signup</a>
                        </div>
                    </div>
                    <div class="col md 6">
                        <div class="girl-login">
                            @foreach ($images as $image)
                            <img src="{{ asset($image->login_image) }}" alt="" srcset="">
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            {{-- </section> --}}
        </form>
    </div>
@endsection

{{--
<script>
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('password-toggle');

    passwordToggle.addEventListener('click', function() {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            passwordToggle.classList.remove('fa-eye');
            passwordToggle.classList.add('fa-eye-slash');
        } else {
            passwordInput.type = 'password';
            passwordToggle.classList.remove('fa-eye-slash');
            passwordToggle.classList.add('fa-eye');
        }
    });
</script> --}}

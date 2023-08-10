
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Admin Panel - @yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/back/index.css') }}">
    @yield('css')
</head>
<body>
    <div class="login ">
        <form action="{{ route('admin.login') }}" method="POST">
            @csrf
                <div class="box">
                    <div class="head">
                        Welcome Admin! Please login
                    </div>
                    <div class="form">
                        <label for="username">Username*</label><br>
                        <input type="username" name="username" id="username" class="input-box"  required>
                    </div>
                    <div class="form">
                        <label for="password">Password*</label><br>
                        <input type="password" name="password" id="password" class="input-box"  required>
                    </div>
                    <a href="#" class="form"> Forgot Password?</a><br>
                    <button class="login"> Login </button>
                </div>
            </form>
        </div>
</html>

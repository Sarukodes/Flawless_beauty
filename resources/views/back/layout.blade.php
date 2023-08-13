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

    <div>
        <div class="sidebar">
            <div class="logo-details">
                <i class="fa-solid fa-user"></i>
                <span class="logo_name">Admin</span>
            </div>
            <ul class="nav-links">
                <li>
                    <a href="#" class="active">
                        <i class="fa-solid fa-gauge"></i>
                        <span class="links_name">Dashboard</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('admin.slider.index') }}" class="">
                        <i class="fa-solid fa-sliders"></i>
                        <span class="links_name">Slider</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('admin.image.index') }}" class="">
                        <i class="fa-solid fa-sliders"></i>
                        <span class="links_name">Image</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}" class="">
                        <i class="fa-solid fa-list"></i>
                        <span class="links_name">Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.product.index') }}" class="">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <span class="links_name">Product</span>
                    </a>
                </li>

                <li class="log_out">
                    <a href="{{route('logout')}}">
                        <i class="fa-solid fa-user"></i>
                        <span class="links_name">Log out</span>
                    </a>
                </li>
            </ul>

        </div>

    </div>
    <div class="main p-md-3 p-2">
        <div id="jumbo" class="shadow d-flex align-items-center justify-content-between">
            <div class="linkbar">
                <a href="{{ route('admin.index') }}">Dashboard</a> @yield('linkbar')
            </div>
            <div class="toolbar">
                @yield('toolbar')
            </div>
        </div>
        @yield('content')

    </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    @yield('scripts')

</html>

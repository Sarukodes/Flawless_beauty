@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="nav">
        <button class="nav-button">
            <i class="fa-solid fa-bars"></i>
        </button>
        <span>Lorem, ipsum.</span>
        <div class="left-icons">
            <i class="fas fa-user"></i>
            <i class="fas fa-envelope"></i>
            <i class="fas fa-bell"></i>
        </div>
        <button class="login-button">Login</button>
    </div>
    <section class="slideshow">
        <div class="control"></div>
        <div class="slideshow-container" id="slideshow-container">

            @foreach ($sliders as $key => $slider)
                <div class="slide {{ $key == 0 ? 'active' : '' }}">
                    <picture>
                        <!-- Mobile image -->
                        <source media="(max-width: 767px)" srcset="{{ asset($slider->mobile_image) }}">

                        <!-- Desktop image -->
                        <source media="(min-width: 768px)" srcset="{{ asset($slider->image) }}">

                        <!-- Fallback image for browsers that don't support the <picture> element -->
                        <img src="{{ asset($slider->image) }}" alt="Alternate Text">
                    </picture>
                </div>
            @endforeach

        </div>
        <div class="control"></div>
    </section>

    <div class="home-main mb-4">
        <div class="control"></div>
        <div class="main-wrapper">
            <div class="category">
                <h3 class="category-title">Category</h3>
                <div class="category-holder">
                    @foreach ($categories as $key => $category)
                        @include('front.home.category', ['i' => $key, 'cat' => $category])
                    @endforeach
                </div>
            </div>
            <div class="product">
                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-3">
                            @include('front.home.product')
                        </div>
                    @endforeach
                </div>
                <button class="button">All Product</button>
            </div>

        </div>
        <div class="control"></div>
    </div>
@endsection
@section('script')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        var current = 0;
        setInterval(function() {
            const slides = document.querySelectorAll('.slideshow-container .slide');
            current += 1;
            console.log(current, slides.length);
            if (current >= slides.length) {
                current = 0;
            }

            $('.slideshow-container .slide').each(function(index, element) {
                if (index == current) {
                    $(element).addClass('active');

                } else {

                    $(element).removeClass('active');
                }

            });

        }, 10000);
    </script>
@endsection

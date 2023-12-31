@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <section class="home"
        style=" background-image: linear-gradient(
        180deg,
        rgba(22, 23, 23, 0.42),
        rgba(239, 155, 231, 0.167)
    ),
    url('{{ asset($image->image) }}');">

        <div class="container">
            <div class="navbar">
                <a href="{{ route('front.index') }}" class="a"> Home </a>
                <div class="flaw">Flawless</div>
                <div class="icon">

                        <a href="{{ route('front.cart') }}" >
                            <i class="fa-solid fa-bag-shopping"></i>
                        </a>

                    <a href="{{ route('auth.login') }}">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
            </div>
            <div class="home-text col-md-5">
                {{-- <span class="welcome"> {{$image->upper_text}} </span> <br> --}}
                <span class="welcome"> {{ $image->upper_text }} </span> <br>
                <span class="up ">{{ $image->text }}</span><br>
                <button class="shop">{{ $image->button_text }}</button>
            </div>
        </div>
        <section class="main">
            <div class="category">
                <h3 class="category-title">Shop By Category</h3>
                <div class="category-holder">
                    @foreach ($categories as $key => $category)
                        <div class="category-box">
                            <img src="{{ $category->image }}">
                            <h5>{{ $category->title }}</h5>
                            <p> {{ $category->des }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="product">
                <div class="product-title">All Products</div>
                <div class="product-holder">
                    @foreach ($products as $key => $product)
                        <div class="product-box">
                            <a href="{{ route('front.product', ['id' => $product->id]) }}" class="product-link">
                                <img src="{{ $product->image }}">
                                <h4>{{ $product->name }}</h4>
                                <p class="price"> Rs.{{ $product->price }}</p>
                                <p class="sale_price"> Rs.{{ $product->sale_price }}</p>
                                {{-- <i class="fa-solid fa-bag-shopping"></i> --}}
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="footer">
                <div class="row m-0">
                    <div class="col-md-4 ">
                        <p class="flaw"> Flawless </p>
                    </div>
                    <div class="col-md-4 pe">
                        <p class="menu">Menu </p>
                        <a href="{{ route('front.index') }}" class="a"> Home </a>
                    </div>
                    <div class="col-md-4 ">
                        <div class="cont">
                            <p class="contact">Contact</p>
                            <i class="fa-solid fa-phone fa-shake"></i>Phone<br>
                            <i class="fa-solid fa-location-dot"></i>Address<br>
                            <i class="fa-solid fa-envelope "></i>Email
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection

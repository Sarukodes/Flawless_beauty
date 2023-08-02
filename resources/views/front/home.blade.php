@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <section class="home">
        <div class="container">
         <div class="navbar">
            <li> Home </li>
            <div class="flaw">Flawless</div>
            <div class="icon">
                <i class="fa-solid fa-bag-shopping" style="padding: 20px"></i>
                <i class="fa-solid fa-user"></i>
            </div>
        </div>
            <div class="home-text col-md-5">
                {{-- <span class="welcome"> {{$image->upper_text}} </span> <br> --}}
                @foreach ($images as $image)
                <span class="welcome"> {{$image->upper_text}} </span> <br>
                <span class="up ">{{$image->text}}</span><br>
                @endforeach
                @foreach ($images as $image)
                <button class="shop">{{$image->button_text}}</button>
                @endforeach
            </div>
        </div>
    </section>
    <section class="main">
        <div class="category">
            <h3 class="category-title">Shop By Category</h3>
            <div class="category-holder">
                @foreach ($categories as $key => $category)
                    <div class="category-box">
                        <img src="{{ $category->image }}">
                        <h4>{{ $category->title }}</h4>
                        <p> {{$category->des}}</p>
                        </div>
                @endforeach
            </div>
        </div>
        <div class="product">
            <div class="product-title">All Products</div>
            <div class="product-holder">
                @foreach ($products as $key =>$product)
                <div class="product-box">
                    <img src ="{{$product->image}}">
                    <h4>{{$product->name}}</h4>
                    <div class="overlay">
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                </div>
            @endforeach
            </div>
        </div>

    </section>


@endsection
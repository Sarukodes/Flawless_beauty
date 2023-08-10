@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')
    <div class="container">
        <div class="product-nav">
            <div class="navbar">
                <a href="{{ route('front.index') }}" class="a"> Home </a>
                <div class="flaw">Flawless</div>
                <div class="icon">
                    <a href="{{ route('front.cart') }}">
                        <i class="fa-solid fa-bag-shopping" style="padding: 20px"></i>
                    </a>
                    <a href="{{ route('front.login') }}">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row m-0 product-show">
            <div class="col-md-5 ps-0 ">
                <div class="selected-product">
                    <img src="{{ asset($product->image) }}" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-4 pe">
                <div class="product-details">
                    <p class="name">{{ $product->name }}</p>
                    <p class="price"> Rs.{{ $product->price }}</p>
                    <p class="sale_price"> Rs.{{ $product->sale_price }}</p>
                    <p class="des"> {{ $product->short_desc }}</p>
                    <div class="quantity">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                    </div>
                    <div class="button">
                        <button class="buy">Buy Now</button>
                        <button class="card" onclick="showCartPopup()">Add to Cart</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
{{--
@section('scripts')
    <script>
        function showCartPopup() {
            $("#cart-popup").fadeIn(2000).fadeOut();
        }
    </script>
@endsection --}}


@section('scripts')
    <script>
        function showCartPopup() {

            var productName = "{{ $product->name }}";
            var productPrice = "{{ $product->price }}";
            var productImage = "{{ asset($product->image) }}";

            var cart = JSON.parse(localStorage.getItem('cart')) || [];
            cart.push({ name: productName, price: productPrice, image: productImage });
            localStorage.setItem('cart', JSON.stringify(cart));

            window.location.href = "{{ route('front.cart') }}";
        }
    </script>
@endsection

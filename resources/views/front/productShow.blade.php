@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
@endsection
@section('content')

    <div class="container">
        <div class="row m-0 product-show">
            <div class="col-md-5 ps-0 ">
                <div class="selected-product">
                    <img src="{{ asset($product->image) }}" alt="" srcset="">
                </div>
            </div>
            <div class="col-md-5 pe">
                <div class="product-details">
                    <p class="name">{{ $product->name }}</p>
                    <p class="price"> Rs.{{ $product->price }}</p>
                    <p class="sale_price"> Rs.{{ $product->sale_price }}</p>
                    <div class="quantity">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                    </div>
                    <div class="button">
                        <button class="buy">Buy Now</button>
                        <button class="card">Add to card</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

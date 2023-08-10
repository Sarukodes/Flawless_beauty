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

        <div class="col-md-8 cart-body">

            <h3>Your Shopping Cart</h3>
            <label>
                <input type="checkbox" id="select-all" class="select"> Select All
            </label>
            <table class="table ">
                <thead>

                </thead>
                @foreach ($products as $product)
                    <tbody>
                        <tr>
                            <td>
                                <input type="checkbox" class="product-checkbox">
                            </td>
                            <td>
                                <img src="{{ asset($product->image) }}" alt="" width="50px">
                            </td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->price }}</td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
@endsection



{{-- @extends('front.layout')
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
                    <a href="{{ route('front.auth.login') }}">
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
            <div class="tab">
                <table class="table">
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
                                <a href="{{ route('front.product.del', ['product' => $product->id]) }}"
                                    class="btn btn-danger"
                                    onclick="return prompt('write yes to delete data ')">Delete</a>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection --}}











@extends('front.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="{{asset('script/cart.js')}}"></script>
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
                    <a href="{{ route('front.auth.login') }}">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-8 cart-body">
            <h3>Your Shopping Cart</h3>
            <div class="tab">
                <table class="table ">
                    <thead>
                    </thead>
                    <tbody id="table-list">

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
    @section('js')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script>
        $(document).ready(function() {
            renderCart();
        });
        const renderCart = () => {
            const cartItemsHtml = CART.products.map(product =>
                `
<tr>
    <td>${product.image}<td>
    <td>${product.name}<td>
    <td>${product.price}<td>
    </tr>
    `

            ).join("");
            $('#table-list').html(cartItemsHtml);
        }
    </script>
@endsection

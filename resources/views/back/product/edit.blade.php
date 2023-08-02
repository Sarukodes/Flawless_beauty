@extends('back.dashbaord.index')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('linkbar')
    / <a href="{{ route('admin.product.index') }}">Product</a>/ Edit
@endsection
@section('content')

    <div class="car shadow p-3 mb-3 bg-white">
        <div class="card-body">
            <form action="{{ route('admin.product.edit', ['product' => $product->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-9">
                        <div class="row">
                            <div class="col-md-8">

                                <label for="">Name</label>
                                <input type="text" name="name" id="name" class="form-control" required
                                    value="{{ $product->name }}">
                            </div>
                            <div class="col-md-4">
                                <label for="">Price</label>
                                <input type="number" name="price" id="price" class="form-control" required
                                    value="{{ $product->price }}">

                            </div>
                            <div class="col-md-4">
                                <label for="">Sale Price</label>
                                <input type="number" name="sale_price" id="sale_price" class="form-control" required
                                    value="{{ $product->sale_price }}">

                            </div>

                            <div class="col-md-4">
                                <label for="">stock</label>
                                <input type="number" name="stock" id="stock" class="form-control" required
                                    value="{{ $product->stock }}">
                            </div>
                            <div class="col-md-4">
                                <label for="">Category</label>
                                <select name="category_id" id="category_id" class="form-control" required>
                                    @foreach ($categories as $category)
                                        {{-- @if ($category->id == $product->catogery_id)

                                            <option value="{{ $category->id }}" selected >{{ $category->title}}</option>
                                        @else
                                            <option value="{{ $category->id }}"  >{{ $category->title}}</option>

                                        @endif --}}
                                        <option value="{{ $category->id }}"
                                            {{ $category->id == $product->catogery_id ? 'selected' : '' }}>{{ $category->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-12">
                                <label for="">Short Description</label>
                                <textarea name="short_desc" id="short_desc" cols="30" rows="2" class="form-control" required>{{ $product->short_desc }}</textarea>
                            </div>

                            <div>
                                <label for="long_desc">Long Description</label>
                                <textarea name="long_desc" id="long_desc" class="form-control">{{ $product->long_desc }}</textarea>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3 small">
                        <label for="image">Feature Image</label>
                        <input type="file" name="image" id="image" class="form-control photo" accept="image/*"
                            data-default-file={{ asset($product->image) }}>
                        <hr class="m-1">
                        <div>
                            <input type="checkbox" name="on_sale" id="on_sale" {{ $product->on_Sale ? 'checked' : '' }}
                                value="1">
                            <label for="on_sale">OnSale</label>
                        </div>
                        <hr class="m-1">
                        <button class="btn btn-primary">
                            Update
                        </button>
                        <a href="{{ route('admin.product.index') }}" class="btn btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.photo').dropify();
            $('#long_desc').summernote();
        });
    </script>
@endsection

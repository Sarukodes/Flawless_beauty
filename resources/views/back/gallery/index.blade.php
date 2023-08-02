@extends('back.layout')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>


    </style>
@endsection
@section('linkbar')
    / <a href="{{ route('admin.product.index') }}">Products</a>
    / {{ $product->name }}
    / Gallery
@endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <div class="shadow mb-5 p-3">
                <form action="{{ route('admin.gallery.add') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="type" value="0">
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <div class="row">
                        <div class="col-md-12 small">
                            <label for="image">Image</label>
                            <input type="file" name="image" id="image" class="form-control photo" accept="image/*">
                            <div class="py-2 text-end">
                                <button class="btn btn-primary">Add Gallery</button>
                                <a href="{{ route('admin.product.index') }}" class="btn btn-danger">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="row">
                @foreach ($gallerys as $gallery)
                    <div class="col-md-3 mb-3">
                        <div class="shadow">

                            <a href="{{ route('admin.gallery.del', ['gallery' => $gallery->id]) }}" class="delete-btn" onclick="return prompt('Enter Yes to delete data')"><i
                                    class="fa-solid fa-trash"></i></a>
                            <img loading="lazy" src="{{ asset($gallery->image) }}" alt="Gallery Image" class="img-fluid">
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $('.photo').dropify();
        })
    </script>
@endsection

@extends('back.dashbaord.index');
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
@endsection
@section('linkbar')
    /<a href="{{ route('admin.image.index') }}">Image</a>/Add
@endsection
@section('content')
<form action="{{route('admin.image.add')}}" method="POST" enctype="multipart/form-data">
@csrf
<div class="row">
    <div class="col-md-4 mb-2 small">
        <label for="">Background Image</label>
        <input type="file" name="image" id="image" class="form-control photo" accept="image/*">
    </div>
    <div class="col-md-4 mb-2 small">
        <label for="">Login Image</label>
        <input type="file" name="login_image" id="login_image" class="form-control photo" accept="image/*">
    </div>
    <div class="col-md-4 mb-2 small">
        <label for="">Signup Image</label>
        <input type="file" name="signup_image" id="signup_image" class="form-control photo" accept="image/*">
    </div>
    <div class="col-md-8 mb-2">
        <div>
            <label for="">Upper_text</label>
            <input type="text" name="upper_text" id="Upper_text" class="form-control">
        </div>
        <div>
            <label for="">text</label>
            <input type="text" name="text" id="text" class="form-control">
        </div>
        <div>
            <label for="">button_text</label>
            <input type="text" name="button_text" id="button_text" class="form-control">
        </div>
        <div class="py-2 text-end">
            <button class="btn btn-primary">Add Image</button>
            <a href="{{route('admin.image.index')}}" class="btn btn-danger">Cancel</a>
        </div>

        </div>
    </div>
</form>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(document).ready(function() {
            $(".photo").dropify();
        });
    </script>
@endsection

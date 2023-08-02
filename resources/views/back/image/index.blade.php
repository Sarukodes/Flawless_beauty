@extends('back.layout')
@section('toolbar')
    <a href="{{ route('admin.image.add') }}">Add Image</a>
@endsection
@section('linkbar')
    / Image
@endsection
@section('content')
    <div class="card-shadow mb-5">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th> Image </th>
                    <th> Upper Text </th>
                    <th> Text </th>
                    <th> Button text </th>
                    <th>Action</th>
                </thead>
                <tbody>
                    @foreach ($images as $image)
                        <tr>
                            <td>
                                <img src="{{ asset($image->image) }}" alt="" width="50px">
                            </td>
                            <td> {{ $image->upper_text }}</td>
                            <td> {{ $image->text }}</td>
                            <td> {{ $image->button_text }} </td>
                            <td>
                                <a href="{{ route('admin.image.edit', ['image' => $image->id]) }}"
                                    class="btn btn-primary">Edit</a>
                                <a href="{{ route('admin.image.del', ['image' => $image->id]) }}" class="btn btn-danger"
                                    onclick="return confirm('would you like to delete')">Delete</a>
                            </td>
                    @endforeach

                    <tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection

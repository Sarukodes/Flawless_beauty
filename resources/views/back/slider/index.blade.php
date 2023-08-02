@extends('back.dashbaord.index');
@section('css')
    <style>
        .image {
            max-width: 200px;
            overflow-y: hidden;
        }

        .image {
            max-width: 200px;
            overflow-y: hidden;
        }
    </style>
@endsection
@section('linkbar')
    / Sliders
@endsection
@section('toolbar')
    <a href="{{ route('admin.slider.add') }}" >Add Slider</a>
@endsection
@section('content')
    <div class="card shadow">

        <div class="card-body">
            <div class="shadow mb-3">

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Mobile Image</th>
                            <th>Link</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sliders as $slider)
                            <tr>
                                <td>
                                    <img src="{{ asset($slider->image) }}" alt="" width="70">
                                </td>
                                <td>
                                    <img src="{{ asset($slider->mobile_image) }}" alt="" srcset=""
                                        width="70">
                                </td>
                                <td>{{ $slider->link }}</td>
                                <td>
                                    <a href="{{ route('admin.slider.edit', ['slider' => $slider->id]) }}"
                                        class="btn btn-primary">Edit</a>
                                    <a href="{{ route('admin.slider.del', ['slider' => $slider->id]) }}"
                                        class="btn btn-danger" onclick="return confirm('Delete')">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    </div>
    </div>
@endsection

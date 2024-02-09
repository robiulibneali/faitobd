@extends('backend.master')

@section('title', 'Home Page Sliders')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Home Page Sliders</h3>
                    <a href="{{ route('admin.home-page-sliders.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table class="table" id="file-datatable">
                            <thead>
                            <th>#</th>
                            <th>Slider File Type</th>
                            <th>File Type</th>
                            <th>File</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($homePageSliders as $homePageSlider)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $homePageSlider->slider_file_type }}</td>
                                    <td>
                                        {{ $homePageSlider->file_type ?? 'External URL' }} <br/>

                                    </td>
                                    <td>
                                        @if($homePageSlider->slider_file_type == 'image')
                                            <img src="{{ !empty($homePageSlider->file_url) ? $homePageSlider->file_url : asset($homePageSlider->file) }}" alt="file" style="height: 60px" />
                                        @elseif($homePageSlider->slider_file_type == 'video')
                                            <video src="{{ !empty($homePageSlider->file_url) ? $homePageSlider->file_url : asset($homePageSlider->file) }}" controls style="height: 60px">
                                                <source src="{{ !empty($homePageSlider->file_url) ? $homePageSlider->file_url : asset($homePageSlider->file) }}" type="video/mp4" style="height: 60px" />
                                            </video>
                                        @endif
                                    </td>
                                    <td>{{ $homePageSlider->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.home-page-sliders.edit', $homePageSlider->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('admin.home-page-sliders.destroy', $homePageSlider->id) }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-sm btn-danger ms-1 delete-item"><i class="fa fa-trash"></i></button>
                                        </form>
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

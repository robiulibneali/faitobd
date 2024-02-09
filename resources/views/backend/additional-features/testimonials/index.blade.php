@extends('backend.master')

@section('title', 'Testimonials')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Testimonials</h3>
                    <a href="{{ route('admin.testimonials.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table class="table" id="file-datatable">
                            <thead>
                            <th>#</th>
                            <th>Product Type</th>
                            <th>Parts Model</th>
                            <th>User Name</th>
                            <th>User Designation</th>
                            <th>Massage</th>
                            <th>User Image</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($testimonials as $testimonial)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $testimonial->product_type }}</td>
                                    <td>
                                        {{ $testimonial->product_type == 'parts' ? $testimonial->partsProduct->title : '' }}
                                        {{ $testimonial->product_type == 'bike' ? $testimonial->motorBike->model_name : '' }}
                                    </td>
                                    <td>{{ $testimonial->user_name }}</td>
                                    <td>{{ $testimonial->user_designation }}</td>
                                    <td>{!! str()->words(strip_tags($testimonial->massage), 20, '...') !!}</td>
                                    <td><img src="{{ asset(!empty($testimonial->user_image) ? $testimonial->user_image : 'admin/no-img/no-image.jpeg') }}" alt="" style="height: 60px" /></td>
                                    <td>{{ $testimonial->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.testimonials.edit', $testimonial->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('admin.testimonials.destroy', $testimonial->id) }}" method="post">
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

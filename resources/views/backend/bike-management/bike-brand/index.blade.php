@extends('backend.master')

@section('title', 'Manage Bike Brand')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Bike Brand</h3>
                    <a href="{{ route('admin.bike-brands.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Logo</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($bikeBrands as $bikeBrand)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bikeBrand->name }}</td>
                                <td>{!! str()->words(strip_tags($bikeBrand->description), 20, '...') !!}</td>
                                <td><img src="{{ asset(!empty($bikeBrand->logo) ? $bikeBrand->logo : 'admin/no-img/no-image.jpeg')}}" alt="" style="height: 60px"></td>
                                <td>{{ $bikeBrand->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.bike-brands.edit', $bikeBrand->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.bike-brands.destroy', $bikeBrand->id) }}" method="post" id="deleteItem">
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

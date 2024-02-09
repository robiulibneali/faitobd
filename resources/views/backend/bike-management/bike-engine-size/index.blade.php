@extends('backend.master')

@section('title', 'Manage Bike Engine Size')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Bike Engine Size</h3>
                    <a href="{{ route('admin.bike-engine-sizes.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Name</th>
                        <th>Info</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($bikeEngineSizes as $bikeEngineSize)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bikeEngineSize->name }}</td>
                                <td>{!! str()->words(strip_tags($bikeEngineSize->info), 20, '...') !!}</td>
                                <td>{{ $bikeEngineSize->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.bike-engine-sizes.edit', $bikeEngineSize->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.bike-engine-sizes.destroy', $bikeEngineSize->id) }}" method="post" id="deleteItem">
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

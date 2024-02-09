@extends('backend.master')

@section('title', 'Manage Motor Bike')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Motorbike</h3>
                    <a href="{{ route('admin.motor-bikes.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Bike Brand Name</th>
                        <th>Bike Engine Size Name</th>
                        <th>Bike Motor Type Name</th>
                        <th>Bike Year Version</th>
                        <th>Model Name</th>
                        <th>Size</th>
                        <th>Image</th>
                        <th>Variant</th>
                        <th>Sku</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($motorBikes as $motorBike)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $motorBike->bikeBrand->name }}</td>
                                <td>{{ $motorBike->bikeEngineSize->name }}</td>
                                <td>{{ $motorBike->bikeMotorType->name }}</td>
                                <td>{{ $motorBike->bikeYearVersion->name }}</td>
                                <td>{{ $motorBike->model_name }}</td>
                                <td>{{ $motorBike->size }}</td>
                                <td><img src="{{ asset(!empty($motorBike->image) ? $motorBike->image : 'admin/no-img/no-image.jpeg' )}}" alt="motorbikes" style="height: 60px"></td>
                                <td>{{ $motorBike->variant }}</td>
                                <td>{{ $motorBike->sku }}</td>
                                <td>{{ $motorBike->slug }}</td>
                                <td>{{ $motorBike->status == 1 ? 'Published' : 'Unpublished' }}</td>

                                <td class="d-flex">
                                    <a href="{{ route('admin.motor-bikes.edit', $motorBike->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.motor-bikes.destroy', $motorBike->id) }}" method="post" id="deleteItem">
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

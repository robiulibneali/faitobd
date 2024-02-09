@extends('backend.master')

@section('title', 'Market Vendors')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Market Vendors</h3>
                    <a href="{{ route('admin.market-verdors.create') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table class="table" id="file-datatable">
                            <thead>
                            <th>#</th>
                            <th>Name</th>
                            <th>Logo</th>
                            <th>Status</th>
                            <th>Action</th>
                            </thead>
                            <tbody>
                            @foreach($marketVerdors as $marketVerdor)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $marketVerdor->name }}</td>
                                    <td><img src="{{ asset(!empty($marketVerdor->logo) ? $marketVerdor->logo : 'admin/no-img/no-image.jpeg') }}" alt="" style="height: 60px" /></td>
                                    <td>{{ $marketVerdor->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.market-verdors.edit', $marketVerdor->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                        <form action="{{ route('admin.market-verdors.destroy', $marketVerdor->id) }}" method="post">
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

@extends('backend.master')

@section('title', 'Manage Bike Motor Type')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage Parts Brand Categories</h3>
                    <a href="{{ route('admin.parts-brand-categories.create', ['parts_brand_category_id' => isset($_GET['parts_brand_category_id']) ? $_GET['parts_brand_category_id'] : 0]) }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                    <table class="table" id="file-datatable">
                        <thead>
                        <th>#</th>
                        <th>Parts Parent Brand</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Status</th>
                        <th>Action</th>
                        </thead>
                        <tbody>
                        @foreach($partsBrandCategories as $partsBrandCategory)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $partsBrandCategory->partsParentBrand->name }}</td>
                                <td>
                                    <a href="{{ route('admin.parts-brand-categories.index', ['parts_brand_category_id' => $partsBrandCategory->id]) }}" class="nav-link text-warning">{{ $partsBrandCategory->name }}</a>
                                </td>
                                <td>{!! str()->words(strip_tags($partsBrandCategory->description), 20, '...') !!}</td>
                                <td><img src="{{ asset(!empty($partsBrandCategory->image) ? $partsBrandCategory->image : 'admin/no-img/no-image.jpeg' )}}" alt="" style="height: 60px"></td>
                                <td>{{ $partsBrandCategory->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('admin.parts-brand-categories.edit', $partsBrandCategory->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="{{ route('admin.parts-brand-categories.destroy', $partsBrandCategory->id) }}" method="post" id="deleteItem">
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

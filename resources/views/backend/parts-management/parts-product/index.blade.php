@extends('backend.master')

@section('title', 'Manage Parts Product')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Manage parts Product</h3>
                    <a href="{{ route('admin.parts-products.create') }}" class="btn btn-success btn-sm position-absolute me-5"
                       style="right: 0"><i class="fa fa-plus-circle"></i></a>
                </div>
                <div class="card-body">
                    <div class="table-responsive export-table">
                        <table class="table" id="file-datatable">
                            <thead>
                                <th>#</th>
                                <th>Parts Brand Category</th>
                                <th>Title</th>
                                <th>Sub Title</th>
                                <th>Short Description</th>
                                <th>Long Description</th>
                                <th>Features</th>
                                <th>Sku</th>
                                <th>Sub Images</th>
                                <th>Bikes</th>
                                <th>Vendors</th>
                                <th>Status</th>
                                <th>Action</th>
                            </thead>
                            <tbody>
                                @foreach ($partsProducts as $partsProduct)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $partsProduct->partsBrandCategory->name }}</td>
                                        <td>{{ $partsProduct->title }}</td>
                                        <td>{{ $partsProduct->sub_title }}</td>
                                        <td>{!! str()->words($partsProduct->short_description, 20, '....') !!}</td>
                                        <td>{!! str()->words($partsProduct->long_description, 20, '....') !!}</td>
                                        <td>{!! str()->words($partsProduct->features, 20, '....') !!}</td>
                                        <td>{{ $partsProduct->sku }}</td>
                                        <td>
                                            <div>
                                                <img src="{{ asset($partsProduct->main_image) }}" alt="" style="height: 60px" />
                                            </div>
                                            <div class="mt-2">
                                                @if(!empty($partsProduct->sub_images))
                                                    @foreach (json_decode($partsProduct->sub_images) as $sub_image)
                                                        <img src="{{ asset($sub_image) }}" alt="ete" height="40" class="px-2" />
                                                    @endforeach
                                                @endif
                                            </div>
                                        </td>
                                        <td>
                                            @if(!empty($partsProduct->motorBikes))
                                                @foreach($partsProduct->motorBikes as $motorBike)
                                                    <p class="badge badge-success-light">{{ $motorBike->model_name }}</p>
                                                @endforeach
                                            @endif
                                        </td>
                                        <td>
                                            <div class="">
                                                @if(!empty($partsProduct->marketVerdors))
                                                    @foreach ($partsProduct->marketVerdors as $marketVerdor)
                                                        <p class="badge badge-success-light">{{ $marketVerdor->name }}</p>
                                                    @endforeach
                                                @endif
                                            </div>
                                        </td>
                                        <td>{{ $partsProduct->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.parts-products.edit', $partsProduct->id) }}"
                                               class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <form action="{{ route('admin.parts-products.destroy', $partsProduct->id) }}"
                                                  method="post" id="deleteItem">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-sm btn-danger ms-1 delete-item"><i
                                                        class="fa fa-trash"></i></button>
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

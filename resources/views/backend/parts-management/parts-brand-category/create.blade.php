@extends('backend.master')

@section('title', isset($partsBrandCategory) ? 'Edit' : 'Create'.' Parts Brand Category')

@section('body')
    <div class="row mt-5">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($partsBrandCategory) ? 'update' : 'Create' }} Parts Brand Category</h3>
                    <a href="{{ route('admin.parts-brand-categories.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($partsBrandCategory) ? route('admin.parts-brand-categories.update', $partsBrandCategory->id) : route('admin.parts-brand-categories.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($partsBrandCategory))
                            @method('put')
                        @endif
                        <input type="hidden" name="parts_brand_category_id" value="{{ isset($partsBrandCategory) ? $partsBrandCategory->parts_brand_category_id : (isset($_GET['parts_brand_category_id']) ? $_GET['parts_brand_category_id'] :  0) }}" />
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Parts Parent Brand</label>
                            <div class="col-md-9">
                                <select name="parts_parent_brand_id" class=" form-control " data-toggle="select" data-placeholder="Choose ...">
                                    <option value="">Select a Parts Parent Brand</option>
                                    @foreach($partsParentBrands as $partsParentBrand)
                                        <option value="{{ $partsParentBrand->id }}" {{ $errors->any() ? (old('parts_parent_brand_id')) :(isset($partsBrandCategory) && $partsBrandCategory->parts_parent_brand_id== $partsParentBrand->id ? 'selected' : '')}}> {{ $partsParentBrand->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('parts_parent_brand_id') <span class="text-danger">{{ $errors->first('parts_parent_brand_id') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" value="{{ isset($partsBrandCategory) ? $partsBrandCategory->name : '' }}" placeholder="Bike Motor Type Name" />
                            </div>
                            @error('name') <span class="text-danger">{{ $errors->first('name') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <span class="">Description</span>
                                <div class="">
                                    <textarea type="text" name="description" class="form-control ckeditor" placeholder="Bike Motor Type Other Info" id="" cols="30" rows="5">{{ isset($partsBrandCategory) ? $partsBrandCategory->description : '' }}</textarea>
                                </div>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="form-control" placeholder="Bike Motor Type Image" accept="" id="imagez" />
                                @if(isset($partsBrandCategory))
                                    <img src="{{ asset($partsBrandCategory->image) }}" alt="" style="height: 80px">
                                @endif
                            </div>
                            <div class="col-md-3 mt-2">
                                <div>
                                    <img src="" id="imagePreview" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($partsBrandCategory) && $partsBrandCategory->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($partsBrandCategory) ? 'update' : 'Create' }} Parts Brand Category">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    image<script>
        $(document).ready(function() {
            $('#imagez').change(function() {
                var imgURL = URL.createObjectURL(event.target.files[0]);
                $('#imagePreview').attr('src', imgURL).css({
                    height: 150+'px',
                    width: 150+'px',
                    marginTop: '5px'
                });
            });
        });
    </script>
@endpush

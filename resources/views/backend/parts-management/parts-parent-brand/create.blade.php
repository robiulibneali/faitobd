@extends('backend.master')

@section('title', isset($partsParentBrand) ? 'Edit' : 'Create'.' Parts Parent Brand')

@section('body')
    <div class="row mt-5">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($partsParentBrand) ? 'update' : 'Create' }} Parts Parent Brand</h3>
                    <a href="{{ route('admin.parts-parent-brands.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($partsParentBrand) ? route('admin.parts-parent-brands.update', $partsParentBrand->id) : route('admin.parts-parent-brands.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($partsParentBrand))
                            @method('put')
                        @endif
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" value="{{ isset($partsParentBrand) ? $partsParentBrand->name : '' }}" placeholder="Parts Parent Brand Name" />
                            </div>
                            @error('name') <span class="text-danger">{{ $errors->first('name') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="">Description</label>
                                <div class="">
                                    <textarea type="text" name="description" class="form-control ckeditor" placeholder="Parts Parent Brand Description" id="" cols="30" rows="5">{{ isset($partsParentBrand) ? $partsParentBrand->description : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Logo</label>
                            <div class="col-md-9">
                                <input type="file" name="logo" class="form-control" placeholder="Bike Brand Image" accept="" id="imagez" />
                                @if(isset($partsParentBrand))
                                    <img src="{{ asset($partsParentBrand->logo) }}" alt="" style="height: 80px">
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
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($partsParentBrand) && $partsParentBrand->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($partsParentBrand) ? 'update' : 'Create' }} Parts Parent Brand">
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

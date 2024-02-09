@extends('backend.master')

@section('title', isset($bikeMotorType) ? 'Edit' : 'Create'.' Bike Motor Type')

@section('body')
    <div class="row mt-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($bikeMotorType) ? 'update' : 'Create' }} Bike Motor Type</h3>
                    <a href="{{ route('admin.bike-motor-types.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($bikeMotorType) ? route('admin.bike-motor-types.update', $bikeMotorType->id) : route('admin.bike-motor-types.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($bikeMotorType))
                            @method('put')
                        @endif
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-8">
                                <input type="text" name="name" class="form-control" value="{{ isset($bikeMotorType) ? $bikeMotorType->name : '' }}" placeholder="Bike Motor Type Name" />
                            </div>
                            @error('name') <span class="text-danger">{{ $errors->first('name') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Other Info</label>
                            <div class="col-md-8">
                                <textarea type="text" name="other_info" class="form-control ckeditor" placeholder="Bike Motor Type Other Info" id="" cols="30" rows="5">{{ isset($bikeMotorType) ? $bikeMotorType->other_info : '' }}</textarea>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Image</label>
                            <div class="col-md-8">
                                <input type="file" name="image" class="form-control" placeholder="Bike Motor Type Image" accept="" id="imagez" />
                                @if(isset($bikeMotorType))
                                    <img src="{{ asset($bikeMotorType->image) }}" alt="" style="height: 80px">
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
                            <div class="col-md-8">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($bikeMotorType) && $bikeMotorType->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($bikeMotorType) ? 'update' : 'Create' }} Bike Motor Type">
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

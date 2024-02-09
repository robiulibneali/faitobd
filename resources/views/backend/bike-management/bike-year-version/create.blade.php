@extends('backend.master')

@section('title', isset($bikeYearVersion) ? 'Edit' : 'Create'.' Bike Year Version')

@section('body')
    <div class="row mt-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($bikeYearVersion) ? 'update' : 'Create' }} Bike Year Version</h3>
                    <a href="{{ route('admin.bike-year-versions.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($bikeYearVersion) ? route('admin.bike-year-versions.update', $bikeYearVersion->id) : route('admin.bike-year-versions.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($bikeYearVersion))
                            @method('put')
                        @endif
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" value="{{ isset($bikeYearVersion) ? $bikeYearVersion->name : '' }}" placeholder="Bike Year Version Name" />
                            </div>
                            @error('name') <span class="text-danger">{{ $errors->first('name') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Info</label>
                            <div class="col-md-9">
                                <textarea type="text" name="info" class="form-control ckeditor" placeholder="Bike Year Version Info" id="" cols="30" rows="5">{{ isset($bikeYearVersion) ? $bikeYearVersion->info : '' }}</textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($bikeYearVersion) && $bikeYearVersion->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($bikeYearVersion) ? 'update' : 'Create' }} Bike Year Version">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

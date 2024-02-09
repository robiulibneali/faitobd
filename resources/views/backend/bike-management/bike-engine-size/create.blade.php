@extends('backend.master')

@section('title', isset($bikeEngineSize) ? 'Edit' : 'Create'.' Bike Engine Size')

@section('body')
    <div class="row mt-5">
        <div class="col-md-7 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($bikeEngineSize) ? 'update' : 'Create' }} Bike Engine Size</h3>
                    <a href="{{ route('admin.bike-engine-sizes.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($bikeEngineSize) ? route('admin.bike-engine-sizes.update', $bikeEngineSize->id) : route('admin.bike-engine-sizes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($bikeEngineSize))
                            @method('put')
                        @endif
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Name</label>
                            <div class="col-md-9">
                                <input type="text" name="name" class="form-control" value="{{ isset($bikeEngineSize) ? $bikeEngineSize->name : '' }}" placeholder="Bike Enzine Size Name" />
                            </div>
                            @error('name') <span class="text-danger">{{ $errors->first('name') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Info</label>
                            <div class="col-md-9">
                                <textarea type="text" name="info" class="form-control ckeditor" placeholder="Bike Engine Size Info" id="" cols="30" rows="5">{{ isset($bikeEngineSize) ? $bikeEngineSize->info : '' }}</textarea>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($bikeEngineSize) && $bikeEngineSize->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($bikeEngineSize) ? 'update' : 'Create' }} Bike Engine Size">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

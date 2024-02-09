@extends('backend.master')

@section('title', isset($motorBike) ? 'Edit' : 'Create'.' Motor Bike')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($motorBike) ? 'update' : 'Create' }}Motor Bike</h3>
                    <a href="{{ route('admin.motor-bikes.index') }}" class="btn btn-success btn-sm position-absolute me-5"
                        style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($motorBike) ? route('admin.motor-bikes.update', $motorBike->id) : route('admin.motor-bikes.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if (isset($motorBike))
                            @method('put')
                        @endif

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="" class=""> Bike Brand Name</label>
                                <div class="">
                                    <select name="bike_brand_id" class=" form-control " data-toggle="select"
                                        data-placeholder="Choose ...">
                                        <option value="">Select a Bike Brand</option>
                                        @foreach ($bikeBrands as $bikeBrand)
                                            <option value="{{ $bikeBrand->id }}"
                                                {{ $errors->any() ? old('bike_brand_id') : (isset($motorBike) && $motorBike->bike_brand_id == $bikeBrand->id ? 'selected' : '') }}>
                                                {{ $bikeBrand->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('bike_brand_id')
                                    <span class="text-danger">{{ $errors->first('bike_brand_id') }}</span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <label for="" class=""> Bike Enzine Size </label>
                                <div class="">
                                    <select name="bike_engine_size_id" class=" form-control " data-toggle="select"
                                        data-placeholder="Choose ...">
                                        <option value="">Select a Bike Engine Size</option>
                                        @foreach ($bikeEngineSizes as $bikeEngineSize)
                                            <option value="{{ $bikeEngineSize->id }}"
                                                {{ $errors->any() ? old('bike_engine_size_id') : (isset($motorBike) && $motorBike->bike_engine_size_id == $bikeEngineSize->id ? 'selected' : '') }}>
                                                {{ $bikeEngineSize->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('bike_engine_size_id')
                                    <span class="text-danger">{{ $errors->first('bike_engine_size_id') }}</span>
                                @enderror
                            </div>



                            <div class="col-md-4">
                                <label for="" class=""> Bike Motor Type</label>

                                <select name="bike_motor_type_id" class=" form-control " data-toggle="select"
                                    data-placeholder="Choose ...">
                                    <option value="">Select a Bike Motor Type</option>
                                    @foreach ($bikeMotorTypes as $bikeMotorType)
                                        <option value="{{ $bikeMotorType->id }}"
                                            {{ $errors->any() ? old('bike_motor_type_id') : (isset($motorBike) && $motorBike->bike_motor_type_id == $bikeMotorType->id ? 'selected' : '') }}>
                                            {{ $bikeMotorType->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            @error('bike_motor_type_id')
                                <span class="text-danger">{{ $errors->first('bike_motor_type_id') }}</span>
                            @enderror
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="" class=""> Bike Year Version</label>
                                <div class="">
                                    <select name="bike_year_version_id" class=" form-control " data-toggle="select"
                                        data-placeholder="Choose ...">
                                        <option value="">Select a Bike Year Version</option>
                                        @foreach ($bikeYearVersions as $bikeYearVersion)
                                            <option value="{{ $bikeYearVersion->id }}"
                                                {{ $errors->any() ? old('bike_year_version_id') : (isset($motorBike) && $motorBike->bike_year_version_id == $bikeYearVersion->id ? 'selected' : '') }}>
                                                {{ $bikeYearVersion->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('bike_year_version_id')
                                    <span class="text-danger">{{ $errors->first('bike_year_version_id') }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="" class="">Model Name</label>
                                <div class="">
                                    <input type="text" name="model_name" class="form-control"
                                        value="{{ isset($motorBike) ? $motorBike->model_name : '' }}"
                                        placeholder=" Motor Bike Model Name" />
                                </div>
                                @error('model_name')
                                    <span class="text-danger">{{ $errors->first('model_name') }}</span>
                                @enderror
                            </div>

                            <div class="col-md-4">
                                <label for="" class="">Size</label>
                                <div class="">
                                    <input type="text" name="size" class="form-control"
                                        value="{{ isset($motorBike) ? $motorBike->size : '' }}"
                                        placeholder=" Motor Bike Size" />
                                </div>
                                @error('size')
                                    <span class="text-danger">{{ $errors->first('size') }}</span>
                                @enderror
                            </div>


                            <div class="row mt-4">
                                <div class="col-md-4">
                                    <label for="" class="">Variant</label>
                                    <div class="">
                                        <input type="text" name="variant" class="form-control"
                                            value="{{ isset($motorBike) ? $motorBike->variant : '' }}"
                                            placeholder=" Motor Bike Variant" />
                                    </div>
                                    @error('variant')
                                        <span class="text-danger">{{ $errors->first('variant') }}</span>
                                    @enderror
                                </div>


                                <div class="col-md-4">
                                    <label for="" class="">Sku</label>
                                    <div class="">
                                        <input type="text" name="sku" class="form-control"
                                            value="{{ isset($motorBike) ? $motorBike->sku : '' }}"
                                            placeholder=" Motor Bike Sku" />
                                    </div>
                                    @error('sku')
                                        <span class="text-danger">{{ $errors->first('sku') }}</span>
                                    @enderror
                                </div>

                                <div class="col-md-4">
                                    <label for="" class="">Image</label>
                                    <div class="">
                                        <input type="file" name="image" class="form-control"
                                            placeholder="Bike Motor Type Image" accept="" id="imagez">
                                        @if (isset($motorBike))
                                            <img src="{{ asset($motorBike->image) }}" alt=""
                                                style="height: 80px">
                                        @endif
                                    </div>
                                    <div class="col-md-3 mt-2">
                                        <div>
                                            <img src="" id="imagePreview" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-3">
                                    <label for="" class="">Status</label>
                                    <div class="">
                                        <div class="material-switch">
                                            <input id="someSwitchOptionLight" name="status" type="checkbox"
                                                {{ isset($motorBike) && $motorBike->status == 0 ? '' : 'checked' }} />
                                            <label for="someSwitchOptionLight" class="label-light"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <label for="" class="col-md-3"></label>
                                <div class="col-md-9">
                                    <input type="submit" class="btn btn-success"
                                           value="{{ isset($motorBike) ? 'update' : 'Create' }} Motor Bike">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            $('#imagez').change(function() {
                var imgURL = URL.createObjectURL(event.target.files[0]);
                $('#imagePreview').attr('src', imgURL).css({
                    height: 100+'px',
                    width: 250+'px',
                    marginTop: '5px'
                });
            });
        });
    </script>
@endpush

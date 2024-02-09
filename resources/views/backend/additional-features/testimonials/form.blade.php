@extends('backend.master')

@section('title', 'Testimonial')

@section('body')
    <div class="row mt-5">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($testimonial) ? 'update' : 'Create' }} Testimonial </h3>
                    <a href="{{ route('admin.testimonials.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($testimonial) ? route('admin.testimonials.update', $testimonial->id) : route('admin.testimonials.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($testimonial))
                            @method('put')
                        @endif
                        <div class="row mt-3">
                            <label for="" class="col-md-3">Product Type</label>
                            <div class="col-md-9 form-group">
                                <select name="product_type" required id="productType" class="form-control select2">
                                    <option value="" disabled selected>Select Product Type</option>
                                    <option value="parts" {{ isset($testimonial) && $testimonial->product_type == 'parts' ? 'selected' : '' }}>parts</option>
                                    <option value="bike" {{ isset($testimonial) && $testimonial->product_type == 'bike' ? 'selected' : '' }}>bike</option>
                                </select>
                            </div>
                            @error('product_type') <span class="text-danger">{{ $errors->first('product_type') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <label for="parentModel" class="col-md-3">Parts Model</label>
                            <div class="col-md-9 form-group">
                                <select name="parent_model_id" required id="parentModel" class="form-control select2">
                                    <option value="" disabled selected>Select Parts </option>
{{--                                    @foreach($partsProducts as $partsProduct)--}}
{{--                                        <option value="{{ $partsProduct->id }}" {{ isset($testimonial) && $partsProduct->id == $testimonial->parent_model_id ? 'selected' : '' }}>{{ $partsProduct->title }}</option>--}}
{{--                                    @endforeach--}}
                                </select>
                            </div>
                            @error('parent_model_id') <span class="text-danger">{{ $errors->first('parent_model_id') }}</span>@enderror
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">User Name</label>
                            <div class="col-md-9">
                                <input type="text" name="user_name" class="form-control" placeholder="User Name" value="{{ isset($testimonial) ? $testimonial->user_name : '' }}" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">User Designation</label>
                            <div class="col-md-9">
                                <input type="text" name="user_designation" class="form-control" placeholder="User Designation" value="{{ isset($testimonial) ? $testimonial->user_designation : '' }}" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="">Message</label>
                                <div class="">
                                    <textarea name="message" class="form-control ckeditor" placeholder="Massage">{{ isset($testimonial) ? $testimonial->message : old('message') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3">User Image</label>
                            <div class="col-md-9">
                                <input type="file" name="user_image" class="form-control" accept="image/*" id="imagez"/>
                                @if(isset($testimonial))
                                    <img src="{{ asset($testimonial->user_image) }}" alt="" style="height: 80px" />
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
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($testimonial) && $testimonial->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($testimonial) ? 'update' : 'Create' }} Testimonial ">
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
                    height: 150+'px',
                    width: 150+'px',
                    marginTop: '5px'
                });
            });
        });
    </script>
    <script>
        $(document).on('change', '#productType', function () {
            var productType = $(this).val();
            $.ajax({
                url: BASEURL+"get-products-by-parent-type/"+productType,
                method: "GET",
                success:function (response) {
                    console.log(response);
                    var option  = '';
                    $.each(response, function (key, value) {
                        option  += '<option value="'+value.id+'" >'+value.option_title+'</option>';
                    })
                    $('#parentModel').empty().append(option);
                    $('.select2').select2();
                }
            })
        })
    </script>
@endpush

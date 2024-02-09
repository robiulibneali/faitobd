

@extends('backend.master')

@section('title', isset($partsProduct) ? 'Edit' : 'Create'.' Parts Product')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($partsProduct) ? 'update' : 'Create' }} Parts Product</h3>
                    <a href="{{ route('admin.parts-products.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($partsProduct) ? route('admin.parts-products.update', $partsProduct->id) : route('admin.parts-products.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($partsProduct))
                            @method('put')
                        @endif

                        <div class="row mt-3">
                            <div class="col-md-12 mt-2">
                                <label for="" class="">Title</label>
                                <div class="">
                                    <input type="text" name="title" class="form-control" value="{{ isset($partsProduct) ? $partsProduct->title : '' }}" placeholder="Parts Product Title" />
                                </div>
                                @error('title') <span class="text-danger">{{ $errors->first('title') }}</span>@enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="" class="">Sub Title</label>
                                <div class="">
                                    <input type="text" name="sub_title" class="form-control" value="{{ isset($partsProduct) ? $partsProduct->sub_title : '' }}" placeholder="Parts Product Sub Title" />
                                </div>
                                @error('sub_title') <span class="text-danger">{{ $errors->first('sub_title') }}</span>@enderror
                            </div>
                            <div class="col-md-4 mt-2">
                                <label for="" class="">Parts Brand Category</label>
                                <div class="form-group">
                                    <select name="parts_brand_category_id" class=" form-control select2" data-toggle="select" data-placeholder="Choose ...">
                                        <option value="">Select a Parts Brand Category</option>
                                        @foreach($partsBrandCategories as $partsBrandCategory)
                                            <option value="{{ $partsBrandCategory->id }}" {{ (isset($partsProduct) && $partsProduct->parts_brand_category_id== $partsBrandCategory->id ? 'selected' : '') }}> {{ $partsBrandCategory->name }}</option>
                                            @if(!empty($partsBrandCategory))
                                                @if(count($partsBrandCategory->partsBrandCategories) > 0)
                                                    @include('backend.parts-management.parts-product.category-loop', ['partsBrandCategory' => $partsBrandCategory, 'child' => 1])
                                                @endif
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                                @error('parts_brand_category_id') <span class="text-danger">{{ $errors->first('parts_brand_category_id') }}</span>@enderror
                            </div>

                            <div class="col-md-4 mt-2">
                                <label for="" class="">Motor Bikes</label>
                                <div class="form-group">
                                    <select name="motorbike_ids[]" required multiple class=" form-control select2" data-toggle="select" data-placeholder="Choose ...">
                                        <option value="">Select Motor Bikes</option>
                                        @foreach($motorbikes as $motorbike)
                                            <option value="{{ $motorbike->id }}" @if(isset($partsProduct)) @foreach($partsProduct->motorBikes as $selectedMotorbike) @if($selectedMotorbike->id == $motorbike->id) selected @endif @endforeach @endif > {{ $motorbike->model_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @error('motorbike_ids') <span class="text-danger">{{ $errors->first('motorbike_ids') }}</span>@enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12 mt-2">
                                <div class="card border-0 rounded-0">
                                    <div class="card-header">
                                        <span>Select Market Vendors</span>
                                        <button type="button" class="btn btn-sm btn-success clone-row position-absolute right-0 me-3" style="right: 0"><i class="fa fa-plus"></i></button>
                                    </div>
                                    <div class="card-body" id="cloneChilds">
                                        @if(isset($partsProduct) && count($partsProduct->marketVerdors) > 0)
                                            @foreach($partsProduct->marketVerdors as $key => $marketVerdor)
                                                <div class="row mt-2 " id="cloneDiv">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <select name="marketplace_vendor[{{ $key }}][ids]" required class=" form-control vendor-name" data-toggle="select" data-placeholder="Choose ...">
                                                                <option value="">Select a Parts Brand Category</option>
                                                                @foreach($marketplaceVendors as $marketplaceVendor)
                                                                    <option value="{{ $marketplaceVendor->id }}" @if($marketVerdor->id == $marketplaceVendor->id) selected @endif > {{ $marketplaceVendor->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" required class="form-control vendor-link" value="{{ $marketVerdor->pivot->link }}" name="marketplace_vendor[{{ $key }}][links]" placeholder="Product Link" />
                                                    </div>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="row mt-2 " id="cloneDiv">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <select name="marketplace_vendor[0][ids]" required class=" form-control vendor-name" data-toggle="select" data-placeholder="Choose ...">
                                                            <option value="">Select a Parts Brand Category</option>
                                                            @foreach($marketplaceVendors as $marketplaceVendor)
                                                                <option value="{{ $marketplaceVendor->id }}" > {{ $marketplaceVendor->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" required class="form-control vendor-link" name="marketplace_vendor[0][links]" placeholder="Product Link" />
                                                </div>
                                            </div>
                                        @endif
                                    </div>
                                </div>
                                @error('marketplace_ids') <span class="text-danger">{{ $errors->first('marketplace_ids') }}</span>@enderror
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="">Short Description</label>
                                <div class="">
                                    <textarea type="text" name="short_description" class="form-control ckeditor" placeholder="Parts Product Short Description" id="" cols="30" rows="5">{{ isset($partsProduct) ? $partsProduct->short_description : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="">Long Description</label>
                                <div class="">
                                    <textarea type="text" name="long_description" class="form-control ckeditor" placeholder="Parts Product Long Description" id="" cols="30" rows="5">{{ isset($partsProduct) ? $partsProduct->long_description : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="">Features</label>
                                <div class="">
                                    <textarea type="text" name="features" class="form-control ckeditor" placeholder="Parts Product Features" id="" cols="30" rows="5">{{ isset($partsProduct) ? $partsProduct->features : '' }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="" class="">Sku</label>
                                <div class="">
                                    <input type="text" name="sku" class="form-control" value="{{ isset($partsProduct) ? $partsProduct->sku : '' }}" placeholder="Parts Product Sku" />
                                </div>
                                @error('sku') <span class="text-danger">{{ $errors->first('sku') }}</span>@enderror
                            </div>
                            <div class="col-md-4">
                                <label for="" class="">Main Image</label>
                                <div class="">
                                    <input type="file" name="main_image" class="form-control" placeholder="Parts Product Main Image" accept="" id="imagez" />
                                    @if(isset($partsProduct))
                                        <img src="{{ asset($partsProduct->main_image) }}" alt="" style="height: 80px">
                                    @endif
                                </div>
                                <div class="col-md-3 mt-2">
                                    <div>
                                        <img src="" id="imagePreview" alt="">
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <label for="" class="">Sub Images</label>
                                <div class="">
                                    <input type="file" name="sub_images[]" multiple class="form-control img-file" id="multiImgs" placeholder="Parts Product Sub Images" accept="">
                                    <div id="imgContainer">
                                        @if(isset($partsProduct) && !empty($partsProduct->sub_images))
                                            @foreach (json_decode($partsProduct->sub_images) as $sub_image)
                                                <img src="{{ asset($sub_image) }}" alt="ete" height="60" width="80"
                                                     style="margin: 6px" />
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="">Status</label>
                            <div class="">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($partsProduct) && $partsProduct->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($partsProduct) ? 'update' : 'Create' }} Parts Product">
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
                    height: 60+'px',
                    width: 100+'px',
                    marginTop: '5px'
                });
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#multiImgs').change(function(event) {
                const files = event.target.files;
                const container = $('#imgContainer');
                container.empty();
                for (var i = 0; i < files.length; i++)
                {
                    const reader = new FileReader();
                    reader.onload   = (e) => {
                        var img = $('<img>');
                        img.attr('src', e.target.result).css({height: "60px", padding: "5px"});
                        container.append(img);
                    }
                    reader.readAsDataURL(files[i]);
                }
            });
        });

        // var rowSerial = 1;
        $(document).on('click', '.clone-row', function () {
            var htmlContent = $('#cloneDiv').clone(true);
            $('#cloneChilds').append(htmlContent);
            var lastCloneDiv    = $('#cloneDiv:last');

            var rowSerial = --$('#cloneChilds').find('.row').length;

            lastCloneDiv.find('.vendor-name').attr('name', 'marketplace_vendor['+rowSerial+'][ids]');
            lastCloneDiv.find('.vendor-link').attr('name', 'marketplace_vendor['+rowSerial+'][links]');
            // rowSerial++;
            // $('.select2').select2();
        })
    </script>
    <script>
        $(document).ready(function() {
            $('.img-file').change(function() {
                var idName = $(this).attr('name');
                var imgURL = URL.createObjectURL(event.target.files[0]);
                $('#'+idName).attr('src', imgURL).css({
                    // height: 150+'px',
                    // width: 150+'px',
                    // marginTop: '5px'
                });
            });
        });
    </script>
@endpush

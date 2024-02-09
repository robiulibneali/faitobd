@extends('backend.master')

@section('title', isset($blog) ? 'Edit' : 'Create'.' Blog ')

@section('body')
    <div class="row py-5">
        <div class="col-md-9 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>{{ isset($blog) ? 'Edit' : 'Create' }} Blog </h3>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>
                </div>
                <div class="card-body">
                    <form action="{{ isset($blog) ? route('admin.blogs.update', $blog->id) : route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($blog))
                            @method('put')
                        @endif
                        <div class="row mt-2">
                            <label for="" class="col-md-3">Category Name</label>
                            <div class="col-md-9 form-group">
                                <select name="blog_category_id" required id="" class="form-control select2">
                                    <option value="" disabled selected>Select a Category</option>
                                    @foreach($blogCategories as $blogCategory)
                                        <option value="{{ $blogCategory->id }}" {{ isset($blog) && $blogCategory->id == $blog->blog_category_id ? 'selected' : '' }}>{{ $blogCategory->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Blog Title*</label>
                            <div class="col-md-9">
                                <input type="text" name="title" class="form-control" placeholder="Blog Title" value="{{ isset($blog) ? $blog->title : '' }}" />
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Blog Image</label>
                            <div class="col-md-9">
                                <input type="file" name="image" class="form-control" accept="image/*" id="imagez" />
                                @if(isset($blog))
                                    <img src="{{ asset($blog->image) }}" alt="" style="height: 80px" />
                                @endif
                            </div>
                            <div class="col-md-3 mt-2">
                                <div>
                                    <img src="" id="imagePreview" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12">
                                <label for="" class="col-md-3">Content</label>
                                <div class="">
                                    <textarea name="content" id="" class="form-control ckeditor" placeholder="Answer">{{ isset($blog) ? $blog->content : '' }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3">Status</label>
                            <div class="col-md-9">
                                <div class="material-switch">
                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($blog) && $blog->status == 0 ? '' : 'checked' }} />
                                    <label for="someSwitchOptionLight" class="label-light"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <label for="" class="col-md-3"></label>
                            <div class="col-md-9">
                                <input type="submit" class="btn btn-success" value="{{ isset($blog) ? 'Update' : 'Create' }} Blog ">
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

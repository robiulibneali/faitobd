@extends('backend.master')

@section('title', 'Contact')

@section('body')
{{--    <div class="row mt-5">--}}
{{--        <div class="col-md-7 mx-auto">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header bg-light">--}}
{{--                    <h3>{{ isset($faq) ? 'update' : 'Create' }} Faq </h3>--}}
{{--                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-success btn-sm position-absolute me-5" style="right: 0"><i class="fa fa-sliders"></i></a>--}}
{{--                </div>--}}
{{--                <div class="card-body">--}}
{{--                    <form action="{{ isset($faq) ? route('admin.faqs.update', $faq->id) : route('admin.faqs.store') }}" method="post" enctype="multipart/form-data">--}}
{{--                        @csrf--}}
{{--                        @if(isset($faq))--}}
{{--                            @method('put')--}}
{{--                        @endif--}}
{{--                        <div class="row mt-3">--}}
{{--                            <label for="" class="col-md-3">Question</label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input type="text" name="question" required class="form-control" value="{{ isset($faq) ? $faq->question : '' }}" placeholder="Question" />--}}
{{--                            </div>--}}
{{--                            @error('question') <span class="text-danger">{{ $errors->first('question') }}</span>@enderror--}}
{{--                        </div>--}}
{{--                        <div class="row mt-3">--}}
{{--                            <div class="col-12">--}}
{{--                                <label for="" class="">Answer</label>--}}
{{--                                <div class="">--}}
{{--                                    <textarea name="answer" id="" required class="form-control ckeditor" placeholder="Answer">{{ isset($faq) ? $faq->answer : '' }}</textarea>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mt-3">--}}
{{--                            <label for="" class="col-md-3">Status</label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <div class="material-switch">--}}
{{--                                    <input id="someSwitchOptionLight" name="status" type="checkbox" {{ isset($faq) && $faq->status == 0 ? '' : 'checked' }} />--}}
{{--                                    <label for="someSwitchOptionLight" class="label-light"></label>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="row mt-3">--}}
{{--                            <label for="" class="col-md-3"></label>--}}
{{--                            <div class="col-md-9">--}}
{{--                                <input type="submit" class="btn btn-success" value="{{ isset($faq) ? 'update' : 'Create' }} Faq ">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@extends('backend.master')

@section('title', 'Site Settings')

@section('body')
    <div class="row mt-5">
        <div class="col-md-12 mx-auto">
            <div class="card">
                <div class="card-header bg-light">
                    <h3>Site Settings</h3>
                </div>
                <div class="card-body">
                    <form action="{{ isset($siteSettings) ? route('admin.site-settings.update', $siteSettings->id) : route('admin.site-settings.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @if(isset($siteSettings))
                            @method('put')
                        @endif
                        <div class="row mt-5">
                            <div class="col-md-3">
                                <label for="" class="">Name</label>
                                <div class="">
                                    <input type="text" name="name" class="form-control" value="{{ isset($siteSettings) ? $siteSettings->name : old('name') }}" placeholder="Name" />
                                    @error('name') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Title</label>
                                <div class="">
                                    <input type="text" name="title" class="form-control" value="{{ isset($siteSettings) ? $siteSettings->title : old('title') }}" placeholder="Site Title" />
                                    @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Email</label>
                                <div>
                                    <input type="email" name="email" class="form-control" value="{{ isset($siteSettings) ? $siteSettings->email : old('email') }}" placeholder="Email" />
                                    @error('email') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Helpline Number</label>
                                <div>
                                    <input type="text" name="helpline_number" class="form-control" value="{{ isset($siteSettings) ? $siteSettings->helpline_number : old('helpline_number') }}" placeholder="Helpline Number" />
                                    @error('helpline_number') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <label for="">Office Address</label>
                            <div id="">
                                <textarea name="description" class="form-control ckeditor"  placeholder="Site Description">{{ isset($siteSettings) ? $siteSettings->description : old('description') }}</textarea>
                                @error('description') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="row mt-5">
                            <label for="">Default SEO Header</label>
                            <div id="">
                                <textarea name="default_seo_header" class="form-control ckeditor" placeholder="Default SEO Header">{{ isset($siteSettings) ? $siteSettings->default_seo_header : old('default_seo_header') }}</textarea>
                                @error('default_seo_header') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="row mt-5">
                            <label for="">Default SEO Footer</label>
                            <div id="">
                                <textarea name="default_seo_footer" class="form-control ckeditor" placeholder="Default SEO Footer">{{ isset($siteSettings) ? $siteSettings->default_seo_footer : old('default_seo_footer') }}</textarea>
                                @error('default_seo_footer') <span class="text-danger">{{ $message }}</span>@enderror
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-4">
                                <label for="">Menu Logo</label>
                                <div>
                                    <input type="file" name="menu_logo" class="form-control img-file" accept="image/*" />
                                    <img src="{{ asset(isset($siteSettings) ? $siteSettings->menu_logo : '') }}" alt="" style="height: 60px; margin-top: 10px;" id="menu_logo" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Footer Logo</label>
                                <div>
                                    <input type="file" name="footer_logo" class="form-control img-file" accept="image/*" />
                                    <img src="{{ asset(isset($siteSettings) ? $siteSettings->footer_logo : '') }}" alt="" style="height: 60px; margin-top: 10px;" id="footer_logo" />
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Favicon</label>
                                <div>
                                    <input type="file" name="favicon" class="form-control img-file" accept="image/*" />
                                    <img src="{{ asset(isset($siteSettings) ? $siteSettings->favicon : '') }}" alt="" style="height: 20px; margin-top: 10px;" id="favicon" />
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-3">
                                <label for="">Instagram Link</label>
                                <div>
                                    <input type="text" name="insta_link" class="form-control" value="{{ isset($siteSettings) ? $siteSettings->insta_link : old('insta_link') }}" placeholder="Instagram Link" />
                                    @error('insta_link') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Facebook Link</label>
                                <div>
                                    <input type="text" name="fb_link" class="form-control" value="{{ isset($siteSettings) ? $siteSettings->fb_link : old('fb_link') }}" placeholder="Facebook Link" />
                                    @error('fb_link') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Youtube Link</label>
                                <div>
                                    <input type="text" name="youtube_link" class="form-control" value="{{ isset($siteSettings) ? $siteSettings->youtube_link : old('youtube_link') }}" placeholder="Youtube Link" />
                                    @error('youtube_link') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="">Tiktok Link</label>
                                <div>
                                    <input type="text" name="tiktok_link" class="form-control" value="{{ isset($siteSettings) ? $siteSettings->tiktok_link : old('tiktok_link') }}" placeholder="Tiktok Link" />
                                    @error('tiktok_link') <span class="text-danger">{{ $message }}</span>@enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mt-5">
                            <label for="" class="col-md-4"></label>
                            <div class="col-md-6">
                                <input type="submit" class="btn btn-success" value="{{ isset($siteSettings) ? 'Update' : 'Create' }} Site Setting">
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
            $('.img-file').change(function() {
                var idName = $(this).attr('name');
                var imgURL = URL.createObjectURL(event.target.files[0]);
                $('#'+idName).attr('src', imgURL).css({
                    height: 60+'px',
                    width: 80+'px',
                    marginTop: '5px'
                });
            });
        });
    </script>
@endpush

@extends('frontend.master')

@section('body')
    <section class="banner-home">
        <span class="dots-abs"><img src="{{ asset('/') }}frontend/assets/images/material/dots-square.png" alt=""></span>
        <div class="slider-home">
            @foreach($homePageSliders as $homePageSlider)
                <div class="list-slider">
                <figure>
                    @if($homePageSlider->slider_file_type == 'image')
                        <img
                        src="#"
                        data-img-large="{{ asset(!empty($homePageSlider->file) ? $homePageSlider->file : 'frontend/assets/contents/ZElyCoBksg.png' ) }}"
                        data-img-medium="{{ asset(!empty($homePageSlider->file) ? $homePageSlider->file : 'frontend/assets/contents/KKpBIdJBF7.png' ) }}"
                        data-img-small="{{ asset(!empty($homePageSlider->file) ? $homePageSlider->file : 'frontend/assets/contents/Qy72pR5HJ3.png' ) }}"
                        alt="" />
                    @elseif($homePageSlider->slider_file_type == 'video')
                        <div class="video-home">
                            <video {{--src="{{ asset(!empty($homePageSlider->file_url) ? $homePageSlider->file_url : asset($homePageSlider->file)) }}"--}} autoplay="" loop="" control="" muted="">
                                <source src="{{ asset(!empty($homePageSlider->file_url) ? $homePageSlider->file_url : asset($homePageSlider->file)) }}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    @endif
                </figure>
{{--                     change on this line--}}
                    @if($loop->first)
                        <a href="{{ route('frontend.faitology') }}" class="caption">
                            <h2>FAITO <b></b></h2>
                            <p>OUR INNOVATION FOR THE COMFORT</p>
                            <p>AND PERFORMANCE OF YOUR MOTORBIKE</p>
                            <div class="btn-arr-home"><span>{{ trans('frontend.common.read_more') }}</span></div>
                        </a>
                    @endif
{{--                    to this line--}}
            </div>
            @endforeach
        </div>
        <div class="medsos-banner">
            @foreach($siteSettings as $siteSetting)
                <a href="{{ $siteSetting->fb_link ?? '' }}/" rel="nofollow" target="_blank"><img src="{{ asset('/') }}frontend/assets/contents/DL94PSMnkG.png" alt=""></a>
                <a href="{{ $siteSetting->tiktok_link ?? '' }}" rel="nofollow" target="_blank"><img src="{{ asset('/') }}frontend/assets/contents/G6cXnP7XQs.png" alt=""></a>
                <a href="{{ $siteSetting->insta_link ?? '' }}" rel="nofollow" target="_blank"><img src="{{ asset('/') }}frontend/assets/contents/8kSM0H9toL.png" alt=""></a>
                <a href="{{ $siteSetting->youtube_link ?? '' }}" rel="nofollow" target="_blank"><img src="{{ asset('/') }}frontend/assets/contents/lLW3VdDELH.png" alt=""></a>
            @endforeach
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>

    <section class="about home">
        <div class="trigger-about"></div>
        <span class="img-abs"><img src="{{ asset('/') }}frontend/assets/images/material/shape-about-1.png" alt=""></span>
        <span class="img-abs-2"><img src="{{ asset('/') }}frontend/assets/images/material/shape-about-2.png" alt=""></span>
        <div class="wrapper">
            <div class="wrap-flex-home">
                <a href="{{ route('frontend.faitology') }}" class="img anim-from-bottom" trigger-anim=".trigger-about" delay="0.5">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/ouPkud6jhV.png" alt="">
                    </figure>
                    <span class="abs-img"><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
                </a>
                <a href="{{ route('frontend.faitology') }}" class="text anim-from-bottom" trigger-anim=".trigger-about" delay="0.8">
                    <small class="text-line">{{ trans('frontend.home.motto') }}</small>
                    <span class="number-big"><img src="{{ asset('/') }}frontend/assets/contents/index.html" alt=""></span>
                    <h1>{{ trans('frontend.home.motto_title') }}</h1>
                    <p>{{ trans('frontend.home.motto_sub_title') }}</p>
                    <p>{{ trans('frontend.home.motto_des') }}</p>
                    <p>&nbsp;</p>
                    <span class="btn-arr">{{ trans('frontend.common.read_more') }}</span>
                </a>
            </div>
        </div>
    </section>

    <section class="about-2 home">
        <div class="trigger-about-2"></div>
        <span class="img-abs"><img src="{{ asset('/') }}frontend/assets/images/material/path-about-faito.png" alt=""></span>
        <span class="img-abs-2"><img src="{{ asset('/') }}frontend/assets/images/material/dots-about-faito.png" alt=""></span>
        <div class="wrap-flex-home sec-2">
            <a href="{{ route('frontend.faitotech') }}" class="text anim-from-bottom" trigger-anim=".trigger-about-2" delay="0.6">
                <span class="number-big"><img src="{{ asset('/') }}frontend/assets/contents/index.html" alt=""></span>
                <small class="text-line">{{ trans('frontend.home.faitotech') }}</small>
                <h1>{{ trans('frontend.home.faitotech_title') }}</h1>
                <p>{{ trans('frontend.home.faitotech_des') }}</p>
                <p>&nbsp;</p>
                <span class="btn-arr">{{ trans('frontend.common.read_more') }}</span>
            </a>
            <a href="{{ route('frontend.faitotech') }}" class="img anim-from-bottom" trigger-anim=".trigger-about-2" delay="0.3">
                <figure>
                    <img src="{{ asset('/') }}frontend/assets/contents/4DMaMQm0mL.png" alt="">
                </figure>
            </a>
        </div>
    </section>

    <section class="product home">
        <div class="trigger-product"></div>
        <span class="bg"><img src="{{ asset('/') }}frontend/assets/contents/tB8tSyuiP2.png" alt=""></span>
        <div class="wrapper">
            <div class="text-tittle">
                <span class="number-big"><img src="{{ asset('/') }}frontend/assets/contents/index.html" alt=""></span>
                <small class="text-line vertical anim-from-bottom" trigger-anim=".trigger-product" delay="0.3">{{ trans('frontend.home.faito_products') }}</small>
                <h1 class="anim-from-bottom" trigger-anim=".trigger-product" delay="0.5">{{ trans('frontend.home.faito_products_title') }}</h1>
            </div>
            <div class="box-slider-product-home anim-from-bottom" trigger-anim=".trigger-product" delay="0.7">
                <div class="slider-product-home">
                    @foreach($bikeMotorTypes as $bikeMotorType)
                        <a href="#" class="list">
                        <figure>
                            <img src="{{ asset(!empty($bikeMotorType->image) ? $bikeMotorType->image : 'frontend/assets/contents/cn62IBPq8M.png') }}" alt="Matic">
                            <figcaption>
                                <h5>{{ $bikeMotorType->name ?? '' }}</h5>
                            </figcaption>
                        </figure>
                    </a>
                    @endforeach
                </div>
                <div class="indicator-slider">
        <span class="number-slider">
          <span class="number-in-slider">01</span> of <span class="count-in-slider">5</span>
        </span>
                    <div class="line-indicator-slider">
                        <span></span>
                    </div>
                    <a href="#" class="btn-arr">{{ trans('frontend.common.view_all_product') }}</a>
                </div>
            </div>
        </div>
    </section>

    <section class="news home">
        <div class="trigger-news"></div>
        <div class="wrapper">
            <div class="title-news anim-from-bottom" trigger-anim=".trigger-news" delay="0.3">
                <h4>{{ trans('frontend.home.latest_update') }}</h4>
                <a href="{{ route('frontend.blog') }}" class="btn-arr">{{ trans('frontend.common.view_all') }}</a>
            </div>
            <div class="wrap-box-news">
                <a href="{{ route('frontend.blog-details', ['blog_id' => $blogs[0]->id, 'titile' => str_replace(' ', '-', $blogs[0]->title)]) }}" class="big-img anim-from-bottom" trigger-anim=".trigger-news" delay="0.6">
                    <span class="dots-abs"><img src="{{ asset('/') }}frontend/assets/images/material/dots-square-small.png" alt=""></span>
                    <img src="{{ asset(!empty($blogs[0]->image) ? $blogs[0]->image : 'frontend/assets/contents/enbXNhcBFb.png') }}" alt="">
                    <figcaption>
                        <h5>
                            {{ $blogs[0]->title ?? '' }}
                        </h5>
                        <div class="caption-small">
                            <span>{{ $blogs[0]->blogCategory->name ?? '' }}</span>
                            <span class="date">{{ $blogs[0]->created_at->format('d M Y') ?? '' }}</span>
                        </div>
                    </figcaption>
                </a>
                <div class="right-list anim-from-bottom" trigger-anim=".trigger-news" delay="0.8">
                    @foreach($blogs->skip(1) as $blog)
                        <a href="{{ route('frontend.blog-details', ['blog_id' => $blog->id, 'titile' => str_replace(' ', '-', $blog->title)]) }}" class="list">
                            <figure>
                                <img src="{{ asset(!empty($blog->image) ? $blog->image : 'frontend/assets/contents/uyynP93oEV.jpg') }}" alt="" style="width: 177px; height: 101px" />
                            </figure>
                            <div class="text">
                                <p>{{ $blog->title ?? '' }}</p>
                                <div class="caption-small me-5">
                                    <span>{{ $blog->blogCategory->name ?? '' }}</span>
                                    <span class="date">{{ $blog->created_at->format('d M Y') ?? '' }}</span>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('frontend.master')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/rxITWU03xa.jpg" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ trans('frontend.story.testimonial.testimonial_upper') }}</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>

    <section class="content-landing testi">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing no-text-right">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>{{ trans('frontend.story.testimonial.testimonial') }}</small>
                        <h3>{{ trans('frontend.story.testimonial.testimonial') }}</h3>
                    </div>
                </div>
                <div class="box-slider-testi">
                    <div class="slider-testimonial">
                        @foreach($testimonials as $testimonial)
                            <div class="list-testi">
                            <div class="inner">
                                <h3>{{ $testimonial->partsProduct->title ?? '' }}</h3>
                                <p><img style="display: block; margin-left: auto; margin-right: auto;" src="{{ asset(!empty($testimonial->partsProduct->main_image) ? $testimonial->partsProduct->main_image : 'admin/no-img/no-image.jpeg') }}" alt="" width="534" height="468" /></p>
                                <p>{!! $testimonial->message ?? '' !!}</p>
                                <div class="profile">
                                    <figure>
                                        <img src="{{ asset(!empty($testimonial->user_image) ? $testimonial->user_image : 'frontend/assets/contents/RMCJ3XziEN.png') }}" alt="">
                                    </figure>
                                    <div class="tagprofile">
                                        <h5>{{ $testimonial->user_name ?? '' }}</h5>
                                        <p>{{ $testimonial->user_designation }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="indicator-slider">
          <span class="number-slider">
            <span class="number-in-slider"></span> of <span class="count-in-slider"></span>
          </span>
                        <div class="line-indicator-slider">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@extends('frontend.master')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/lxx0CHAACE.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>FAQ</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.html" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.html" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing full">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>FAQ</small>
                        <h3>FAQ</h3>
                    </div>
                </div>
                <div class="accordion">
                    @foreach($faqs as $faq)
                    <div class="list-acc">
                        <div class="grid-acc">
                            <h5>{{ $faq->question ?? '' }}</h5>
                            <div class="plus">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="content-acc text-content">
                            <p>{!! $faq->answer !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection

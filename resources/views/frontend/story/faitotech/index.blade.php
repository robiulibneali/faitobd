@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/RKehFbne8f.jpg" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ trans('frontend.story_dropdown.faitotech') }}</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>{{ trans('frontend.story.faitotech.faitotech_title') }}</small>
                        <h3>{{ trans('frontend.story.faitotech.faitotech_title') }}</h3>
                    </div>
                    <div class="text-right">
                        <p><p style="text-align: justify;">We are perfecting existing technology so that driving comfort and performance are more excellent. Comes with products developed by an R&amp;D team who are full of experience, each product is designed by considering many factors and product testing before being thrown into the market, both performance testing and durability testing so that Faito's products are indeed worthy of being the choice of bikers to upgrade their motorbikes.</p>
                        <p style="text-align: justify;">Performance, durability and ride comfort are Faito's philosophy in creating innovative products.</p></p>
                    </div>
                </div>
            </div>
        </div>


    </section>
@endsection

@extends('frontend.master')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/z57opEbSvz.jpg" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ trans('frontend.story_dropdown.faitology') }}</h2>
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
                        <small>{{ trans('frontend.story.faitology.title') }}</small>
                        <h3>{{ trans('frontend.story.faitology.sub_title') }}</h3>
                    </div>
                    <div class="text-right">
                        <p><p style="text-align: justify;">{{ trans('frontend.story.faitology.faitology_des_1') }}</p>
                        <p style="text-align: justify;">{{ trans('frontend.story.faitology.faitology_des_2') }}</p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-visimisi">
            <div class="box" style="background-color: #2957A4;">
                <small>{{ trans('frontend.story.faitology.faitology_vision') }}</small>
                <p>{{ trans('frontend.story.faitology.faitology_vision_des') }}</p>
            </div>
            <div class="box" style="background-color: #4C4C4E;">
                <small>{{ trans('frontend.story.faitology.faitology_mission') }}</small>
                <p style="text-align: justify;">{{ trans('frontend.story.faitology.faitology_mission_des_1') }}</p>
                <p style="text-align: justify;">{{ trans('frontend.story.faitology.faitology_mission_des_2') }}</p>
            </div>
        </div>

        <div class="wrapper">
            <section class="milestone">
                <small class="with-line">{{ trans('frontend.story.faitology.faitology_milestones') }}</small>
                <div class="wrap-box-miles">
                    <div class="left-box">
                        <div class="slider-miles">
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/2gU0Uve8lX.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2006</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/61bTcjkPNI.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2012</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/8QN5u8sDRQ.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2013</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/pzQYmlDsCi.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2015</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="slider-text">
                            <div class="list">
                                <p>{{ trans('frontend.story.faitology.faitology_milestones_des_1') }}</p>
                            </div>
                            <div class="list">
                                <p>{{ trans('frontend.story.faitology.faitology_milestones_des_2') }}</p>
                                <p>{{ trans('frontend.story.faitology.faitology_milestones_des_3') }}</p>
                                <p>{{ trans('frontend.story.faitology.faitology_milestones_des_4') }}</p>
                                <p>{{ trans('frontend.story.faitology.faitology_milestones_des_5') }}</p>
                            </div>
                            <div class="list">
                                <p>{{ trans('frontend.story.faitology.faitology_milestones_des_6') }}</p>
                                <p>{{ trans('frontend.story.faitology.faitology_milestones_des_7') }}</p>
                            </div>
                            <div class="list">
                                <p>{{ trans('frontend.story.faitology.faitology_milestones_des_8') }}</p>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    </section>
@endsection

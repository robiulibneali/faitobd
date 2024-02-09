@extends('frontend.master')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/1af3cr0SHq.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ trans('frontend.story.brembology.brembology') }}</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs-red.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner-red.png" alt=""></span>
    </section>

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>{{ trans('frontend.story.brembology.brembology') }}</small>
                        <h3>{{ trans('frontend.story.brembology.brembology') }}</h3>
                    </div>
                    <div class="text-right">
                        <p><p style="text-align: justify;">{{ trans('frontend.story.brembology.brembology_des') }}</p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap-visimisi">
            <div class="box" style="background-color: #E90000;">
                <small>{{ trans('frontend.story.brembology.brembology_vision') }}</small>
                <p>&ldquo;{{ trans('frontend.story.brembology.brembology_vision_title') }}&rdquo;</p>
            </div>
            <div class="box" style="background-color: #000;">
                <small>{{ trans('frontend.story.brembology.brembology_mission') }}</small>
                <p>{{ trans('frontend.story.brembology.brembology_mission_des') }}</p>
            </div>
        </div>

        <div class="wrapper">
            <section class="milestone">
                <small class="with-line">{{ trans('frontend.story.brembology.brembology_milestones') }}</small>
                <div class="wrap-box-miles">
                    <div class="left-box">
                        <div class="slider-miles">
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/YRdO8v9iyT.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>1960s</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/ZswjLG3nEV.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>1970s</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/kXqmmwWfzP.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>1980s</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/F6u05WZECn.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>1990s</span>
                                </div>
                            </div>
                            <div class="list">
                                <figure>
                                    <img src="{{ asset('/') }}frontend/assets/contents/lDdQM7CQb8.png" alt="">
                                </figure>
                                <div class="years">
                                    <span>2000s</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right-box">
                        <div class="slider-text">
                            <div class="list">
                                <p style="text-align: justify;">{{ trans('frontend.story.brembology.brembology_milestones_1') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_1_des_1') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_1_des_2') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_1_des_3') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_1_des_4') }}</p>
                            </div>
                            <div class="list">
                                <p style="text-align: justify;">{{ trans('frontend.story.brembology.brembology_milestones_2') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_2_des_1') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_2_des_2') }}</p>
                            </div>
                            <div class="list">
                                <p>{{ trans('frontend.story.brembology.brembology_milestones_3') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_3_des_1') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_3_des_2') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_3_des_3') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_3_des_4') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_3_des_5') }}</p>
                            </div>
                            <div class="list">
                                <div>
                                    <p>{{ trans('frontend.story.brembology.brembology_milestones_4') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_4_des_1') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_4_des_2') }}</p>
                                </div>
                            </div>
                            <div class="list">
                                <p>{{ trans('frontend.story.brembology.brembology_milestones_5') }}<br /><br />{{ trans('frontend.story.brembology.brembology_milestones_4_des_1') }}</p>
                            </div>
                        </div>
                    </div>
            </section>
        </div>

    </section>
@endsection

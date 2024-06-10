@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/x4ZsrY20hD.jpg" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ $brand->name ?? '' }}</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>


    <section class="content-landing testi">
        <div class="wrapper">
            <div class="middle">
                <div class="title-landing">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>{{ $brand->name ?? '' }}</small>
                        <h3>{{ $brand->name ?? '' }}</h3>
                    </div>
                    <div class="text-right">
                        <p style="text-align: justify;">{!! $brand->description ?? '' !!}</p>
                    </div>
                </div>
            </div>
            <div class="box-grid">
                @foreach($categories as $category)
                    <a href="{{ route('frontend.sub-cat', ['parts_parent_brand_category_id' => $category->id, 'name' => str_replace(' ', '-', $category->name)]) }}" class="box">
                        <figure>
                        <img src="{{ asset(!empty($category->image) ? $category->image : 'frontend/assets/contents/rsQC1C7Fkq.png') }}" alt="" />
                        <figcaption>
                            <h5>{{ $category->name ?? '' }}</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection

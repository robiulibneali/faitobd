@extends('frontend.master')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/FFAgeh1hrx.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ trans('frontend.story.news.news') }}</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.html" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.html" alt=""></span>
    </section>

    <section class="content-landing detail">
        <div class="wrapper">
            <div class="wrap-box-news news-detail">
                <span class="dots-abs"><img src="{{ asset('/') }}frontend/assets/images/material/dots-square-small.html" alt=""></span>
                <a href="{{ route('frontend.blog-details', ['blog_id' => $blogs[0]->id, 'titile' => str_replace(' ', '-', $blogs[0]->title)]) }}" class="big-img">
                    <img src="{{ asset(!empty($blogs[0]->image) ? $blogs[0]->image : 'frontend/assets/contents/enbXNhcBFb.png') }}" alt="">
                </a>
                <a href="{{ route('frontend.blog-details', ['blog_id' => $blogs[0]->id, 'titile' => str_replace(' ', '-', $blogs[0]->title)]) }}" class="right-list">
                    <h3>{{ $blogs[0]->title ?? '' }}</h3>
                    <p>For CRF150, NMAX, Ninja 150, Ninja 250, Satria F150</p>
                    <div class="caption-small">
                        <span>{{ $blogs[0]->blogCategory->name ?? '' }}</span>
                        <span class="date">{{ $blogs[0]->created_at->format('d M Y') ?? '' }}</span>
                    </div>
                </a>
            </div>
            <div class="listing-wrap news">
                @foreach($blogs->skip(1) as $blog)
                <a href="{{ route('frontend.blog-details', ['blog_id' => $blog->id, 'titile' => str_replace(' ', '-', $blog->title)]) }}" class="list">
                    <figure>
                        <img src="{{ asset(!empty($blog->image) ? $blog->image : 'frontend/assets/contents/uyynP93oEV.jpg') }}" alt="" style="height:180px; width: 315px " />
                    </figure>
                    <div class="text">
                        <h5>{{ $blog->title ?? '' }}</h5>
                        <div class="caption-small">
                            <span>{{ $blog->blogCategory->name ?? '' }}</span>
                            <span class="date">{{ $blog->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>

        </div>
    </section>
@endsection

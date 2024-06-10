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

    <section class="content-landing">
        <div class="wrapper">
            <div class="middle detail">
                <div class="title-landing full">
                    <div class="title">
                        <span class="line-text"></span>
                        <small>{{ $blog->blogCategory->name ?? ''}}</small>
                        <h3>{{ $blog->title ?? '' }} STEERING CONE MX-SERIES</h3>
                        <span class="date-detail">{{ $blog->created_at->format('d M Y') }}</span>
                    </div>
                </div>

                <div class="sharethis-inline-share-buttons"></div>

                <div class="images-detail">
                    <img src="{{ asset(!empty($blog->image) ? $blog->image : 'frontend/assets/contents/enbXNhcBFb.png') }}" alt="">
                </div>
                <div class="text-content">
                    <p>{!! $blog->content ?? '' !!}</p>
                </div>
                <div class="related-news">
                    <div class="wrap-flex">
                        <span class="sub">{{ trans('frontend.story.blog_details.related_news') }}</span>
                        <a href="{{ route('frontend.blog', ['lang' => app()->getLocale()]) }}" class="btn-arr back">{{ trans('frontend.story.blog_details.back_to_news_list') }}</a>
                    </div>
                    <div class="listing-wrap related">
                        @foreach($relatedBlogs as $relatedBlog)
                            <a href="{{ route('frontend.blog-details', ['blog_id' => $relatedBlog->id, 'titile' => str_replace(' ', '-', $relatedBlog->title)]) }}" class="list">
                                <figure>
                                    <img src="{{ asset(!empty($relatedBlog->image) ? $relatedBlog->image : 'frontend/assets/contents/ooLZTrU9bo.jpg') }}" alt="">
                                </figure>
                                <div class="text">
                                    <h6>{{ $relatedBlog->title ?? '' }}</h6>
                                    <div class="caption-small">
                                        <span>{{ $relatedBlog->blogCategory->name }}</span>
                                        <span class="date">{{ $relatedBlog->created_at->format('d M Y') }}</span>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

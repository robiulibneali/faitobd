@extends('frontend.master')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/aDjPKRIUf5.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ $brand->bikeBrand->name ?? 'Brand Name' }}</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs-red.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner-red.png" alt=""></span>
    </section>


    <section class="content-landing testi">
        <div class="wrapper">
            <div class="box-grid">
                @if(!empty($bikeModels))
                    @foreach($bikeModels as $bikeModel)
                        <a href="{{ route('frontend.product-search', ['title' => $bikeModel->model_name]) }}" class="box big">
                            <figure>
                                <img src="{{ asset(!empty($bikeModel->image) ? $bikeModel->image : 'admin/no-img/no-image.png') }}" alt="model name" />
                                <figcaption>
                                    <h5>{{ $bikeModel->model_name }}</h5>
                                    <span>View All</span>
                                </figcaption>
                            </figure>
                        </a>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
@endsection

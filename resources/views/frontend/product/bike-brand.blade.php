@extends('frontend.master')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/aDjPKRIUf5.png" alt="">
        </figure>
        <div class="text-absolute">
            <h2>{{ $motorType->name ?? 'Type Name' }}</h2>
            <span><img src="{{ asset('/') }}frontend/assets/images/material/shape-img-abs.png" alt=""></span>
        </div>
        <span class="shape-banner"><img src="{{ asset('/') }}frontend/assets/images/material/shape-banner.png" alt=""></span>
    </section>


    <section class="content-landing testi">
        <div class="wrapper">
            <div class="box-grid">
                @if(!empty($bikeBrands))
                    @foreach($bikeBrands as $bikeBrand)
                        <a href="{{ route('frontend.category-wise-bikes', ['bike_brand_id' => $bikeBrand->id, 'brand_name' => str_replace(' ', '-', $bikeBrand->name)]) }}" class="box big">
                            <figure>
                                <img src="{{ asset(!empty($bikeBrand) ? $bikeBrand->logo : 'admin/no-img/no-image.png') }}" alt="">
                                <figcaption>
                                    <h5>{{ $bikeBrand->name ?? 'Brand Name' }}</h5>
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

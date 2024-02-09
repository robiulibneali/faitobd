@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="banner-landing">
        <figure>
            <img src="{{ asset('/') }}frontend/assets/contents/x4ZsrY20hD.jpg" alt="">
        </figure>
        <div class="text-absolute">
            <h2>Faito Products</h2>
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
                        <small>Faito Products</small>
                        <h3>BEARING SYSTEM</h3>
                    </div>
                    <div class="text-right">
                        <p>Motorcycle bearings are the support or bearings of rotating machine components so that there is minimal friction between components. Faito is committed to providing high-quality and high-performance motorcycle bearings such as Lite-Tech, S720, pin + pin bearing, crankpin, and steering cone bearings.</p>
                    </div>
                </div>
            </div>
            <div class="box-grid">

                <a href="{{ route('frontend.sub-sub-cat') }}" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/4esXaQt4de.png" alt="">
                        <figcaption>
                            <h5>Faito Lite-Tech Bearing</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="bearing-system/s270-bearing.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/j7fqgLvAsL.png" alt="">
                        <figcaption>
                            <h5>Faito S720 Bearing</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="bearing-system/pin-bearing-pin.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/9lX9jX3opq.png" alt="">
                        <figcaption>
                            <h5>Faito Pin + Pin Bearing</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="bearing-system/crank-pin-bearing.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/FqMn9urEZ8.png" alt="">
                        <figcaption>
                            <h5>Faito Crank Pin Bearing</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>



                <a href="bearing-system/bearing-steering-cone.html" class="box">
                    <figure>
                        <img src="{{ asset('/') }}frontend/assets/contents/bH95J5hWas.png" alt="">
                        <figcaption>
                            <h5>Faito Steering Cone</h5>
                            <span>View All</span>
                        </figcaption>
                    </figure>
                </a>


            </div>
        </div>
    </section>
@endsection

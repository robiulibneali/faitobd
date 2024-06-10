@extends('frontend.master')

@section('body')
{{--    @if(isset($subCategories))--}}
        <section class="banner-landing">
            <figure>
                <img src="{{ asset('/') }}frontend/assets/contents/x4ZsrY20hD.jpg" alt="">
            </figure>
            <div class="text-absolute">
                <h2>{{ $category->partsParentBrand->name ?? '' }}</h2>
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
                            <small>{{ $category->partsParentBrand->name ?? '' }}</small>
                            <h3>{{ $category->name ?? '' }}</h3>
                        </div>
                        <div class="text-right">
                            <p>{!! $category->description ?? '' !!}</p>
                        </div>
                    </div>
                </div>
                <div class="box-grid">
                    @if(isset($subCategories))
                        @foreach($subCategories as $subCategory)
                            <a href="{{ count($subCategory->partsBrandCategories) == 0 ? route('frontend.product-search', ['category' => $subCategory->id]) : route('frontend.sub-cat', ['parts_parent_brand_category_id' => $subCategory->id, 'name' => str_replace(' ', '-', $subCategory->name)]) }}" class="box">
                                <figure>
                                    <img src="{{ asset(!empty($subCategory->image) ? $subCategory->image : 'frontend/assets/contents/4esXaQt4de.png') }}" alt="" />
                                    <figcaption>
                                        <h5>{{ $subCategory->name ?? '' }}</h5>
                                        <span>View All</span>
                                    </figcaption>
                                </figure>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
{{--    @elseif(isset($products))--}}
{{--        <section class="content-landing detail">--}}
{{--            <div class="head-content">--}}
{{--                <div class="overlay-head-content"></div>--}}
{{--                <div class="result-product">--}}
{{--                    <div class="wrapper">--}}
{{--                        <h4>{{ $products[0]->partsBrandCategory->name ?? '' }}</h4>--}}
{{--                        <span class="result">Showing 1-4 of 4 Results</span>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="filter-result">--}}
{{--                    <div class="wrapper">--}}
{{--                        <div class="left-filter">--}}
{{--                            <div class="box">--}}
{{--                                <span>Filter By</span>--}}
{{--                            </div>--}}
{{--                            <div class="select-filter">--}}
{{--                                <div class="list-select-filter" data-filter="brand" data-value="" data-placeholder="Brand">--}}
{{--                                  <span class="btn-filter ">--}}
{{--                                      Brand--}}
{{--                                  </span>--}}
{{--                                    <div class="drop-filter">--}}
{{--                                        <div class="in-drop-filter">--}}
{{--                                            <h5>Brand</h5>--}}
{{--                                            <div class="filter-list">--}}
{{--                                                <a href="#" data-value="ducati-1" >--}}
{{--                                                    <span class="tx">Ducati</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="honda" >--}}
{{--                                                    <span class="tx">Honda</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="husqvarna" >--}}
{{--                                                    <span class="tx">Husqvarna</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="kawasaki" >--}}
{{--                                                    <span class="tx">Kawasaki</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="ktm" >--}}
{{--                                                    <span class="tx">KTM</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="ducati" >--}}
{{--                                                    <span class="tx">Megelli</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="mv-agusta" >--}}
{{--                                                    <span class="tx">MV Agusta</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="piaggio" >--}}
{{--                                                    <span class="tx">Piaggio</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="suzuki" >--}}
{{--                                                    <span class="tx">Suzuki</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="triumph" >--}}
{{--                                                    <span class="tx">Triumph</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="universal" >--}}
{{--                                                    <span class="tx">Universal</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="yamaha" >--}}
{{--                                                    <span class="tx">Yamaha</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="list-select-filter" data-filter="motortype" data-value="" data-placeholder="Motor Type">--}}
{{--                                  <span class="btn-filter ">--}}
{{--                                          Motor Type--}}
{{--                                  </span>--}}
{{--                                    <div class="drop-filter">--}}
{{--                                        <div class="in-drop-filter">--}}
{{--                                            <h5>Motor Type</h5>--}}
{{--                                            <div class="filter-list">--}}
{{--                                                <a href="#" data-value="bebek" >--}}
{{--                                                    <span class="tx">Bebek</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="cross" >--}}
{{--                                                    <span class="tx">Cross</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="matic" >--}}
{{--                                                    <span class="tx">Matic</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="matic-premium" >--}}
{{--                                                    <span class="tx">Matic Premium</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="sport" >--}}
{{--                                                    <span class="tx">Sport</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="list-select-filter" data-filter="year" data-value="" data-placeholder="Year">--}}
{{--                                  <span class="btn-filter ">--}}
{{--                                      Year--}}
{{--                                  </span>--}}
{{--                                    <div class="drop-filter">--}}
{{--                                        <div class="in-drop-filter">--}}
{{--                                            <h5>Year</h5>--}}
{{--                                            <div class="filter-list">--}}
{{--                                                <a href="#" data-value="2024" >--}}
{{--                                                    <span class="tx">2024</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2023" >--}}
{{--                                                    <span class="tx">2023</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2022" >--}}
{{--                                                    <span class="tx">2022</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2021" >--}}
{{--                                                    <span class="tx">2021</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2020" >--}}
{{--                                                    <span class="tx">2020</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2019" >--}}
{{--                                                    <span class="tx">2019</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2018" >--}}
{{--                                                    <span class="tx">2018</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2017" >--}}
{{--                                                    <span class="tx">2017</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2016" >--}}
{{--                                                    <span class="tx">2016</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2015" >--}}
{{--                                                    <span class="tx">2015</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2014" >--}}
{{--                                                    <span class="tx">2014</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2013" >--}}
{{--                                                    <span class="tx">2013</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2012" >--}}
{{--                                                    <span class="tx">2012</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2011" >--}}
{{--                                                    <span class="tx">2011</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2010" >--}}
{{--                                                    <span class="tx">2010</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2009" >--}}
{{--                                                    <span class="tx">2009</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2008" >--}}
{{--                                                    <span class="tx">2008</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2007" >--}}
{{--                                                    <span class="tx">2007</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2006" >--}}
{{--                                                    <span class="tx">2006</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2005" >--}}
{{--                                                    <span class="tx">2005</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2004" >--}}
{{--                                                    <span class="tx">2004</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2003" >--}}
{{--                                                    <span class="tx">2003</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2002" >--}}
{{--                                                    <span class="tx">2002</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2001" >--}}
{{--                                                    <span class="tx">2001</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="2000" >--}}
{{--                                                    <span class="tx">2000</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1999" >--}}
{{--                                                    <span class="tx">1999</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1998" >--}}
{{--                                                    <span class="tx">1998</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1997" >--}}
{{--                                                    <span class="tx">1997</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1996" >--}}
{{--                                                    <span class="tx">1996</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1995" >--}}
{{--                                                    <span class="tx">1995</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1994" >--}}
{{--                                                    <span class="tx">1994</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1993" >--}}
{{--                                                    <span class="tx">1993</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1992" >--}}
{{--                                                    <span class="tx">1992</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1991" >--}}
{{--                                                    <span class="tx">1991</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1990" >--}}
{{--                                                    <span class="tx">1990</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1989" >--}}
{{--                                                    <span class="tx">1989</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1988" >--}}
{{--                                                    <span class="tx">1988</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1987" >--}}
{{--                                                    <span class="tx">1987</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1986" >--}}
{{--                                                    <span class="tx">1986</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1985" >--}}
{{--                                                    <span class="tx">1985</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1984" >--}}
{{--                                                    <span class="tx">1984</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1983" >--}}
{{--                                                    <span class="tx">1983</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1982" >--}}
{{--                                                    <span class="tx">1982</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1981" >--}}
{{--                                                    <span class="tx">1981</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1980" >--}}
{{--                                                    <span class="tx">1980</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="list-select-filter" data-filter="enginesize" data-value="" data-placeholder="Engine Size">--}}
{{--                                  <span class="btn-filter ">--}}
{{--                                      Engine Size--}}
{{--                                  </span>--}}
{{--                                    <div class="drop-filter">--}}
{{--                                        <div class="in-drop-filter">--}}
{{--                                            <h5>Engine Size</h5>--}}
{{--                                            <div class="filter-list">--}}
{{--                                                <a href="#" data-value="625-cc" >--}}
{{--                                                    <span class="tx">625 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="400-cc-1" >--}}
{{--                                                    <span class="tx">400 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="321-cc" >--}}
{{--                                                    <span class="tx">321 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="690-cc" >--}}
{{--                                                    <span class="tx">690 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="700-cc" >--}}
{{--                                                    <span class="tx">700 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="800-cc" >--}}
{{--                                                    <span class="tx">800 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1103-cc" >--}}
{{--                                                    <span class="tx">1103 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1198-cc" >--}}
{{--                                                    <span class="tx">1198 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="1099-cc" >--}}
{{--                                                    <span class="tx">1099 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="849-cc" >--}}
{{--                                                    <span class="tx">849 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="79-cc" >--}}
{{--                                                    <span class="tx">79 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="225-cc" >--}}
{{--                                                    <span class="tx">225 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="70-cc" >--}}
{{--                                                    <span class="tx">70 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="" class=selected>--}}
{{--                                                    <span class="tx">-</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="160-cc" >--}}
{{--                                                    <span class="tx">160 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="200-cc" >--}}
{{--                                                    <span class="tx">200 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="108-cc" >--}}
{{--                                                    <span class="tx">108 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="223" >--}}
{{--                                                    <span class="tx">223 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="universal" >--}}
{{--                                                    <span class="tx">Universal</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="132-cc" >--}}
{{--                                                    <span class="tx">132 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="155-cc" >--}}
{{--                                                    <span class="tx">155 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="113-cc" >--}}
{{--                                                    <span class="tx">113 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="115-cc" >--}}
{{--                                                    <span class="tx">115 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="105-cc" >--}}
{{--                                                    <span class="tx">105 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="130-cc" >--}}
{{--                                                    <span class="tx">130 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="120-cc" >--}}
{{--                                                    <span class="tx">120 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="135-cc" >--}}
{{--                                                    <span class="tx">135 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="100-cc" >--}}
{{--                                                    <span class="tx">100 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="125-cc" >--}}
{{--                                                    <span class="tx">125 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="110-cc" >--}}
{{--                                                    <span class="tx">110 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="500-cc" >--}}
{{--                                                    <span class="tx">1000 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="400-cc" >--}}
{{--                                                    <span class="tx">600 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="250-cc" >--}}
{{--                                                    <span class="tx">250 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                                <a href="#" data-value="150-cc" >--}}
{{--                                                    <span class="tx">150 cc</span>--}}
{{--                                                    <span class="x-tx"></span>--}}
{{--                                                </a>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="right-filter">--}}
{{--                            <span class="close-filter">Close</span>--}}
{{--                            <span class="reset-filter">Reset Filter</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="wrapper">--}}
{{--                <div class="listing-wrap product">--}}
{{--                    @if(isset($products))--}}
{{--                        @foreach($products as $product)--}}
{{--                            <a href="{{ route('frontend.product-details', ['id' => $product->id, 'slug' => str_replace(' ', '-', $product->title)]) }}" class="list">--}}
{{--                                <figure>--}}
{{--                                    <img src="{{ asset(!empty($product->main_image) ? $product->main_image : 'frontend/assets/contents/Xog8ScInqf.png') }}" alt="" />--}}
{{--                                </figure>--}}
{{--                                <span class="name-sparepart">{{ $product->partsBrandCategory->name }}</span>--}}
{{--                                <h5>{{ $product->title ?? '' }}</h5>--}}
{{--                            </a>--}}
{{--                        @endforeach--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    @endif--}}
@endsection

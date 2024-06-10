@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="content-landing detail">
        <div class="wrapper">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('frontend.home') }}">Home</a> </li>
                    <li><a href="{{ route('frontend.product', ['brand_id' => $product->partsBrandCategory->partsParentBrand->id, 'name' => str_replace(' ', '-', $product->partsBrandCategory->partsParentBrand->name)]) }}">{{ $product->partsBrandCategory->partsParentBrand->name ?? '' }}</a> </li>
                    @if(!empty($product->partsBrandCategory->partsBrandCategory))
                        <li><a href="{{ route('frontend.sub-cat', ['parts_parent_brand_category_id' => $product->partsBrandCategory->partsBrandCategory->id, 'name' => str_replace(' ', '-', $product->partsBrandCategory->partsBrandCategory->name) ]) }}">{{ $product->partsBrandCategory->partsBrandCategory->name }}</a></li>
                    @endif
                    <li><a href="{{ route('frontend.sub-cat', ['parts_parent_brand_category_id' => $product->partsBrandCategory->id, 'name' => str_replace(' ', '-', $product->partsBrandCategory->name) ]) }}">{{ $product->partsBrandCategory->name ?? '' }}</a></li>
                    <li>{{ $product->title ?? '' }}</li>
                </ul>
            </div>
            <div class="detail-product">
                <div class="left-box">
                    <div class="slider-big">
                        @if(!empty($product->sub_images))
                            @foreach(json_decode($product->sub_images) as $subImage)
                                <div class="list">
                                    <figure><img src="{{ asset(isset($subImage) ? $subImage : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="" style="height: 451.34px; width: 515px"></figure>
                                </div>
                            @endforeach
                        @else
                            <div class="list">
                                <figure><img src="{{ asset(!empty($product->main_image) ? $product->main_image : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="" style="height: 451.34px; width: 515px></figure>
                            </div>
                        @endif
                    </div>
                    <div class="slider-thumbnail">
                        @if(!empty($product->sub_images))
                            @foreach(json_decode($product->sub_images) as $subImage)
                                <div class="list">
                                    <figure><img src="{{ asset(!empty($subImage) ? $subImage : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="" style="height: 95px"></figure>
                                </div>
                            @endforeach
                        @else
                            <div class="list">
                                <figure><img src="{{ asset(!empty($product->main_image) ? $product->main_image : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="" ></figure>
                            </div>`
                        @endif
                    </div>
                </div>
                <div class="right-box">
                    <div class="title-product">
                        <span class="line-text"></span>
                        <small>{{ $product->sub_title ?? '' }}</small>
                        <h1>{{ $product->title ?? '' }}</h1>
                        {{--                        <p><strong><span lang="EN-US" ><em><span lang="EN-US" style="line-height: 107%; font-family: Calibri, sans-serif;">INCREASE YOUR MOTORCYCLE PERFORMANCE WITH FAITO LITE-TECH BEARING</span></em></span></strong></p>--}}
                        <p style="font-size: 14pt; line-height: 107%; font-family: arial, helvetica, sans-serif; text-align: justify">{!! $product->short_description !!}</p>
                        <div class="sharethis-inline-share-buttons"></div>
                    </div>
                    <!-- <hr>
                    <div class="box-information text-content">
                      <h5>Information</h5>

                    </div> -->
                    <hr>
                    <div class="marketplace">
                        <h5>Buy at Market Place</h5>
                        @if(!empty($product->marketVerdors))
                            @foreach($product->marketVerdors as $marketVerdor)
                                <a href="{{ $marketVerdor->pivot->link }}" target="_blank" rel="nofollow"><img src="{{ asset(!empty($marketVerdor->logo) ? $marketVerdor->logo : 'frontend/assets/images/content/ecom-1.png') }}" alt="" style="height: 46px" /></a>
                            @endforeach
                        @endif
                        {{--                        <a href="https://shopee.co.id/search?keyword=bearing%20set%20lite-tech&amp;shop=349510887" rel="nofollow"><img src="{{ asset('/') }}frontend/assets/images/content/ecom-2.png" alt=""></a>--}}
                        {{--                        <a href="https://www.bukalapak.com/faito-official?keywords=bearing%20set%20lite-tech" rel="nofollow"><img src="{{ asset('/') }}frontend/assets/images/content/ecom-3.png" alt=""></a>--}}
                        {{--                        <a href="https://www.blibli.com/merchant/faito-official-store/FAR-60030?excludeProductList=false&amp;promoTab=false&amp;merchantSearchTerm=lite-tech&amp;sort=&amp;sc=LAHER%20SET%20LITE-TECH" rel="nofollow"><img src="{{ asset('/') }}frontend/assets/images/content/ecom-4.png" alt=""></a>--}}
                    </div>
                </div>
            </div>
            <div class="wrap-tab">
                <span class="sub">More Information</span>
                <div class="wrap-overflow">
                    <div class="box-tabing information">
                        <div class="head-tab">
                            <ul>
                                <li><a href="#desc">Description</a></li>
                                @if($product->features)
                                    <li><a href="#feat">Features</a></li>
                                @endif
                            </ul>
                        </div>
                        <div class="content-tab text-content" id="desc">
                            <p><span class="HwtZe" lang="en"><span class="jCAhz ChMk0b"><span class="ryNqvb">{!! $product->long_description !!}</span></span></span></p>
                            <p>&nbsp;</p>
                        </div>
                        @if($product->features)
                            <div class="content-tab text-content" id="feat">
                                {!! $product->features !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
            <div class="wrap-tab">
                <span class="sub">Available For</span>
                <div class="wrap-overflow">
                    <div class="box-tabing merk blue overflow">
                        <div class="head-tab">
                            <ul>
                                @foreach($bikeBrandGroups as $key => $bikeBrandGroup)
                                    <li><a href="#tabId{{ $key }}">{{ $bikeBrandGroup[0]->custom_brand_name }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                        @foreach($bikeBrandGroups as $index => $bikeBrandGroupContent)
                            <div class="content-tab text-content" id="tabId{{ $index }}">
                                <div class="table">
                                    <table>
                                        <thead>
                                        <tr>
                                            <th>Motor Type</th>
                                            <th>Year</th>
                                            <th>Engine</th>
                                            <th>Size</th>
                                            <th>Variant</th>
                                            <th>SKU</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @if(!empty($bikeBrandGroupContent))
                                            @foreach($bikeBrandGroupContent as $bd => $value)
                                                <tr>
                                                    <td>{{ $value->model_name ?? '' }}</td>
                                                    <td>{{ $value->bikeYearVersion->name ?? '' }}</td>
                                                    <td>{{ $value->bikeEngineSize->name ?? '' }}</td>
                                                    <td>{{ $value->size ?? '' }}</td>
                                                    <td>{{ $value->variant ?? '' }}</td>
                                                    <td>{{ $value->sku ?? '' }}</td>
                                                    <td>
                                                        <a href="#">View Detail</a>
                                                        <div class="data-popup">
                                                            <div class="img">
                                                                {{--                                                                https://faito.co.id/contents/tQeyhijnzb.png--}}
                                                                {{ asset($value->image) }}
                                                            </div>
                                                            <div class="text">
                                                                <h4>{{ $product->title }}</h4>
                                                                <span class="spek">{{ $bikeBrandGroupContent[0]->custom_brand_name ?? '' }} {{ $value->model_name ?? '' }} - Size : {{ $value->size ?? '' }}  - Variant : {{ $value->variant ?? '' }} -  SKU : {{ $value->sku ?? '' }}</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            @if($relatedProducts->isNotEmpty())
                <div class="related-product">
                    <span class="sub">Related Product</span>
                    <div class="listing-wrap product no-margin">
                        @foreach($relatedProducts as $relatedProduct)
                            <a href="{{ route('frontend.product-details', ['id' => $relatedProduct->id, 'slug' => str_replace(' ','-', $relatedProduct->title)]) }}" class="list">
                                <figure>
                                    <img src="{{ asset(!empty($relatedProduct->main_image) ? $relatedProduct->main_image : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="">
                                </figure>
                                <span class="name-sparepart">{{ $relatedProduct->partsBrandCategory->name ?? '' }}</span>
                                <h5>{{ $relatedProduct->title }}</h5>
                            </a>
                        @endforeach
                    </div>
                </div>
            @endif
        </div>
    </section>

    <div class="wrap-pop" id="product">
        <div class="pop-inner">
            <div class="overlay-pop"></div>
            <div class="box-pop">
                <div class="content-pop">
                    <a href="javascript: closePopup('product')" class="close"></a>
                    <div class="img">
                        <img src="#" alt="">
                    </div>
                    <div class="text">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=65c6298ad77abd0019f02da1&product=inline-share-buttons&source=platform" async="async"></script>
@endpush

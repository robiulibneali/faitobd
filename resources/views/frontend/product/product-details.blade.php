@extends('frontend.master')

@section('title', 'Home')

@section('body')
    <section class="content-landing detail">
        <div class="wrapper">
            <div class="breadcrumb">
                <ul>
                    <li><a href="{{ route('frontend.home') }}">Home</a> </li>
                    <li><a href="{{ route('frontend.product') }}">{{ $product->partsBrandCategory->partsParentBrand->name ?? '' }}</a> </li>
                    @if(!empty($product->partsBrandCategory->partsBrandCategory))
                        <li><a href="{{ route('frontend.sub-cat') }}">{{ $product->partsBrandCategory->partsBrandCategory->name }}</a></li>
                    @endif
                    <li><a href="{{ route('frontend.sub-sub-cat') }}">{{ $product->partsBrandCategory->name ?? '' }}</a></li>
                    <li>{{ $product->title ?? '' }}</li>
                </ul>
            </div>
            <div class="detail-product">
                <div class="left-box">
                    <div class="slider-big">
                        @if(!empty($product->sub_images))
                            @foreach(json_decode($product->sub_images) as $subImage)
                                <div class="list">
                                    <figure><img src="{{ asset(!empty($subImage) ? $subImage : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="" style=""></figure>
                                </div>
                            @endforeach
                        @else
                            <div class="list">
                                <figure><img src="{{ asset(!empty($product->main_image) ? $product->main_image : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt=""></figure>
                            </div>
                        @endif
                    </div>
                    <div class="slider-thumbnail">
                        @if(!empty($product->sub_images))
                            @foreach(json_decode($product->sub_images) as $subImage)
                                <div class="list">
                                    <figure><img src="{{ asset(!empty($subImage) ? $subImage : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="" style="width: 120px; height: 105px"></figure>
                                </div>
                            @endforeach
                        @else
                            <div class="list">
                                <figure><img src="{{ asset(!empty($product->main_image) ? $product->main_image : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="" style="width: 120px; height: 105px"></figure>
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
                                <a href="{{ $marketVerdor->pivot->link }}" rel="nofollow"><img src="{{ asset(!empty($marketVerdor->logo) ? $marketVerdor->logo : 'frontend/assets/images/content/ecom-1.png') }}" alt="" style="height: 32px" /></a>
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
                                <li><a href="#feat">Features</a></li>
                            </ul>
                        </div>
                        <div class="content-tab text-content" id="desc">
                            <p><span class="HwtZe" lang="en"><span class="jCAhz ChMk0b"><span class="ryNqvb">{!! $product->long_description !!}</span></span></span></p>
                            <p>&nbsp;</p>
                        </div>
                        <div class="content-tab text-content" id="feat">
                            {!! $product->features !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="wrap-tab">
                <span class="sub">Available For</span>
                <div class="wrap-overflow">
                    <div class="box-tabing merk blue overflow">
                        <div class="head-tab">
                            <ul>
                                <li><a href="#Honda">Honda</a></li>
                                <li><a href="#Kawasaki">Kawasaki</a></li>
                                <li><a href="#Megelli">Megelli</a></li>
                                <li><a href="#Suzuki">Suzuki</a></li>
                                <li><a href="#Yamaha">Yamaha</a></li>
                            </ul>
                        </div>
                        <div class="content-tab text-content" id="Honda">
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
                                    <tr>
                                        <td>Revo</td>
                                        <td>2009</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-H19-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/tQeyhijnzb.png
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Revo 110 cc - Size :   - Variant :  -  SKU : EBS/LT-H19-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Blade 110 Karburator</td>
                                        <td>2008</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-H19-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/fH6j3Vnr5o.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Blade 110 Karburator 110 cc - Size :   - Variant :  -  SKU : EBS/LT-H19-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Supra X 125</td>
                                        <td>2005</td>
                                        <td>125 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-H19-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/3jsAcyS8G7.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Supra X 125 125 cc - Size :   - Variant :  -  SKU : EBS/LT-H19-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Supra X125 FI</td>
                                        <td>2014</td>
                                        <td>125 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-H19-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/YPg2kuKdZL.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Supra X125 FI 125 cc - Size :   - Variant :  -  SKU : EBS/LT-H19-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Blade 125 FI</td>
                                        <td>2014</td>
                                        <td>125 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-H19-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/364JSzzFLj.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Blade 125 FI 125 cc - Size : -  - Variant : - -  SKU : EBS/LT-H19-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Supra X</td>
                                        <td>2001</td>
                                        <td>100 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-H12-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/gMtZA8KJCE.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Supra X 100 cc - Size :   - Variant :  -  SKU : EBS/LT-H12-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Scoopy</td>
                                        <td>2010</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-H26-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/29AcCdKRPb.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Scoopy 110 cc - Size :   - Variant :  -  SKU : EBS/LT-H26-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nova Dash</td>
                                        <td>1996</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-H10-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/wA84feiwMO.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Nova Dash 110 cc - Size :   - Variant :  -  SKU : EBS/LT-H10-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nova Sonic</td>
                                        <td>2001</td>
                                        <td>125 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-H11-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/WjT4tgmHTm.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Nova Sonic 125 cc - Size :   - Variant :  -  SKU : EBS/LT-H11-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Beat Karburator</td>
                                        <td>2008</td>
                                        <td>110 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-H26-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/vgw1zeWhy9.png
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Honda Beat Karburator 110 cc - Size : -  - Variant : - -  SKU : EBS/LT-H26-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="content-tab text-content" id="Kawasaki">
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
                                    <tr>
                                        <td>ZX130</td>
                                        <td>2005</td>
                                        <td>130 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-K04-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/pvLPhQKFOn.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Kawasaki ZX130 130 cc - Size :   - Variant :  -  SKU : EBS/LT-K04-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KLX 150S</td>
                                        <td>2009</td>
                                        <td>150 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-K09-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/O2Buty1tvT.png
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Kawasaki KLX 150S 150 cc - Size : -  - Variant : - -  SKU : EBS/LT-K09-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ninja 150</td>
                                        <td>1996</td>
                                        <td>150 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-K05-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/Fxwkk6n8E4.png
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Kawasaki Ninja 150 150 cc - Size :   - Variant :  -  SKU : EBS/LT-K05-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kaze</td>
                                        <td>1995</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-K01-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/wziFFJQpkG.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Kawasaki Kaze 110 cc - Size :   - Variant :  -  SKU : EBS/LT-K01-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KSR 110</td>
                                        <td>2003</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-K03-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/vDWkurVYFC.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Kawasaki KSR 110 110 cc - Size :   - Variant :  -  SKU : EBS/LT-K03-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KLX 150</td>
                                        <td>2009</td>
                                        <td>150 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-K09-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/lvIY6EE4k5.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Kawasaki KLX 150 150 cc - Size : -  - Variant : - -  SKU : EBS/LT-K09-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>KSR 110</td>
                                        <td>2013</td>
                                        <td>110 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-K03-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/s8F88DFfVE.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Kawasaki KSR 110 110 cc - Size : -  - Variant : - -  SKU : EBS/LT-K03-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="content-tab text-content" id="Megelli">
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
                                    <tr>
                                        <td>Megelli 250SR</td>
                                        <td>2009</td>
                                        <td>250 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-M01-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/hRy4kgN0G6.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Megelli Megelli 250SR 250 cc - Size :   - Variant :  -  SKU : EBS/LT-M01-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="content-tab text-content" id="Suzuki">
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
                                    <tr>
                                        <td>Satria F150</td>
                                        <td>2004</td>
                                        <td>150 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-S09-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/BGpQrlVxqV.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Suzuki Satria F150 150 cc - Size :   - Variant :  -  SKU : EBS/LT-S09-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>New Smash 110</td>
                                        <td>2003</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-S12-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/9zC3qJcDHh.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Suzuki New Smash 110 110 cc - Size :   - Variant :  -  SKU : EBS/LT-S12-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Axelo 125</td>
                                        <td>2013</td>
                                        <td>125 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-S15-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/OFyQz3JUm3.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Suzuki Axelo 125 125 cc - Size :   - Variant :  -  SKU : EBS/LT-S15-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>RGR</td>
                                        <td>1989</td>
                                        <td>150 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-S02-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/KWv4remMBv.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Suzuki RGR 150 cc - Size :   - Variant :  -  SKU : EBS/LT-S02-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Satria RU</td>
                                        <td>1998</td>
                                        <td>120 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-S05-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/MZ2RyQrVfB.png
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Suzuki Satria RU 120 cc - Size : -  - Variant : - -  SKU : EBS/LT-S05-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="content-tab text-content" id="Yamaha">
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
                                    <tr>
                                        <td>Mio</td>
                                        <td>2003</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y14-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/Juz9OFCUpu.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Mio 110 cc - Size :   - Variant :  -  SKU : EBS/LT-Y14-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nouvo</td>
                                        <td>2002</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y14-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/5f3dCR81pU.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Nouvo 110 cc - Size :   - Variant :  -  SKU : EBS/LT-Y14-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Xeon</td>
                                        <td>2010</td>
                                        <td>125 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y27-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/8e3KQ4fcq8.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Xeon 125 cc - Size :   - Variant :  -  SKU : EBS/LT-Y27-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Mio J FI</td>
                                        <td>2012</td>
                                        <td>125 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y30-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/56Ik64OWOV.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Mio J FI 125 cc - Size :   - Variant :  -  SKU : EBS/LT-Y30-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Soul GT FI</td>
                                        <td>2015</td>
                                        <td>125 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y30-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/FLtiPgcDN3.png
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Soul GT FI 125 cc - Size :   - Variant :  -  SKU : EBS/LT-Y30-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>X-Ride FI</td>
                                        <td>2013</td>
                                        <td>110 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y30-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/bc22LpJ5Nx.png
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha X-Ride FI 110 cc - Size :   - Variant :  -  SKU : EBS/LT-Y30-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vixion</td>
                                        <td>2007</td>
                                        <td>150 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y23-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/qA2OkzUj3U.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Vixion 150 cc - Size :   - Variant :  -  SKU : EBS/LT-Y23-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>R15</td>
                                        <td>2008</td>
                                        <td>150 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y23-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/AKOni2pMw1.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha R15 150 cc - Size :   - Variant :  -  SKU : EBS/LT-Y23-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jupiter MX King 150</td>
                                        <td>2015</td>
                                        <td>150 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y23-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/7CzUUql3io.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Jupiter MX King 150 150 cc - Size :   - Variant :  -  SKU : EBS/LT-Y23-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>RX King</td>
                                        <td>1983</td>
                                        <td>135 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y01-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/kIfw6Plry4.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha RX King 135 cc - Size :   - Variant :  -  SKU : EBS/LT-Y01-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>RXZ</td>
                                        <td>1985</td>
                                        <td>135 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y02-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/pCXzKyfS0a.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha RXZ 135 cc - Size :   - Variant :  -  SKU : EBS/LT-Y02-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jupiter 115 Z New</td>
                                        <td>2010</td>
                                        <td>115 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y24-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/vfTV29dQ8b.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Jupiter 115 Z New 115 cc - Size :   - Variant :  -  SKU : EBS/LT-Y24-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>F1Z</td>
                                        <td>2012</td>
                                        <td>113 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y24-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/2kIiPCpXCs.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha F1Z 113 cc - Size :   - Variant :  -  SKU : EBS/LT-Y24-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jupiter MX</td>
                                        <td>2005</td>
                                        <td>135 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y24-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/8cJw7VdBx4.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Jupiter MX 135 cc - Size :   - Variant :  -  SKU : EBS/LT-Y24-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>TZM</td>
                                        <td>1996</td>
                                        <td>150 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y56-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/1E5bOV9vBm.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha TZM 150 cc - Size :   - Variant :  -  SKU : EBS/LT-Y56-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Force 1</td>
                                        <td>1992</td>
                                        <td>110 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-Y03-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/j2DicKpKm0.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Force 1 110 cc - Size : -  - Variant : - -  SKU : EBS/LT-Y03-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Y125Z</td>
                                        <td>2000</td>
                                        <td>125 cc</td>
                                        <td></td>
                                        <td></td>
                                        <td>EBS/LT-Y07-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/KqfdE4tfh0.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Y125Z 125 cc - Size :   - Variant :  -  SKU : EBS/LT-Y07-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jupiter MX 5 Speed</td>
                                        <td>2010</td>
                                        <td>135 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-Y29-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/5QUagNpz9R.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Jupiter MX 5 Speed 135 cc - Size : -  - Variant : - -  SKU : EBS/LT-Y29-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jupiter Z1 F.I</td>
                                        <td>2000</td>
                                        <td>115 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-Y24-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/9rUZO54103.jpg
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Jupiter Z1 F.I 115 cc - Size : -  - Variant : - -  SKU : EBS/LT-Y24-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jupiter Z</td>
                                        <td>2003</td>
                                        <td>113 cc</td>
                                        <td>-</td>
                                        <td>-</td>
                                        <td>EBS/LT-Y13-FT25</td>
                                        <td>
                                            <a href="#">View Detail</a>
                                            <div class="data-popup">
                                                <div class="img">
                                                    https://faito.co.id/contents/lc5jTflNkW.png
                                                </div>
                                                <div class="text">
                                                    <h4>FAITO LITE-TECH BEARING SET</h4>
                                                    <span class="spek">Yamaha Jupiter Z 113 cc - Size : -  - Variant : - -  SKU : EBS/LT-Y13-FT25</span>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="related-product">
                <span class="sub">Related Product</span>
                <div class="listing-wrap product no-margin">
                    @foreach($relatedProducts as $relatedProduct)
                        <a href="{{ route('frontend.product-details', ['id' => $relatedProduct->id, 'slug' => str_replace(' ','-', $relatedProduct->title)]) }}" class="list">
                            <figure>
                                <img src="{{ asset(!empty($relatedProduct->main_image) ? $relatedProduct->main_image : 'frontend/assets/contents/ouPkud6jhV.png') }}" alt="">
                            </figure>
                            <span class="name-sparepart">{{ $relatedProduct->partsBrandCategory->name ?? '' }}</span>
                            <h5>{{ $relatedProduct->titla }}</h5>
                        </a>
                    @endforeach
                </div>
            </div>
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

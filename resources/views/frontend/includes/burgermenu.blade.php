<div class="popup-search" id="burgermenu">
    <div class="close-popup-search">
        <span></span><span></span>
    </div>

    <div class="box-inner-search burgermenuinner normal-search active">
        <div class="navigasi">
            <div class="box head-burger">
                <h5><a href="{{ route('frontend.home') }}">{{ trans('frontend.menu.home') }}</a></h5>
                <div class="box-lang">
                    {{-- <span onclick="changeLang('en','1')" class="active">EN</span>
                    <span onclick="changeLang('bn','1')" class="">BN</span> --}}
                    <span onclick="changeLang('en')" class="{{ !Session::has('locale') || Session::get('locale') == 'en' ? 'active' : ''}}">EN</span>
                    <span onclick="changeLang('bn')" class="{{ Session::has('locale') && Session::get('locale') == 'bn' ? 'active' : ''}}">BN</span>
                </div>
            </div>
            <div class="box wrap-drop">
                <ul>
                    <li class="have-child">
                        <a href="javascript:void(0)">{{ trans('frontend.menu.story') }}</a>
                        <ul>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.faitology') }}">
                                    {{ trans('frontend.story_dropdown.faitology') }}
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.faitotech') }}">
                                    {{ trans('frontend.story_dropdown.faitotech') }}
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.brembology') }}">
                                    {{ trans('frontend.story_dropdown.brembology') }}
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.testimonial') }}">
                                    {{ trans('frontend.story_dropdown.testimonial') }}
                                </a>
                            </li>
                            <li>
                                <a class=""
                                   href="{{ route('frontend.blog') }}">
                                    {{ trans('frontend.story_dropdown.news') }}
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="have-child">
                        <a href="#">{{ trans('frontend.menu.product') }}</a>
                        <ul>
                            @foreach($partsParentBrands as $partsParentBrand)
                                <li>
                                    <a class=""
                                       href="{{ route('frontend.product', ['brand_id' => $partsParentBrand->id, 'name' => $partsParentBrand->name]) }}">
                                        {{ $partsParentBrand->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="box wrap-flex">
                <ul>
                    <li>
                        <a class="" href="{{ route('frontend.contact') }}">
                            {{ trans('frontend.menu.contact') }}
                        </a>
                    </li>
                    <li>
                        <a class="" href="{{ route('frontend.faq') }}">
                            {{ trans('frontend.menu.faq') }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="search">
                <form action="{{ route('frontend.product-search') }}">
                    <input type="text" name="title" placeholder="Search Our Product">
                    <a class="link-yellow btn-adv-search">Advance Search</a>
                </form>
            </div>
        </div>
    </div>
    @include('frontend.includes.advance-search')
</div>

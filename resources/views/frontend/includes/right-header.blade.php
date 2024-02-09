<div class="right-header">
    <nav>
        <ul>
            <li>
                <a class="" href="{{ route('frontend.home') }}">
                    {{ trans('frontend.menu.home') }}
                </a>
            </li>
            <li class="have-child">
                <a class="" href="#" class="">{{ trans('frontend.menu.story') }}</a>
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
                <a class="" href="#" class="">{{ trans('frontend.menu.product') }}</a>
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
            <li>
                <a class="" href="{{ route('frontend.contact') }}">
                    {{ trans('frontend.menu.contact') }}
                </a>
            </li>
        </ul>
    </nav>
    <div class="box-lang">
        <span onclick="changeLang('en')" class="{{ Session::has('locale') && Session::get('locale') == 'en' ? 'active' : ''}}">EN</span>
        <span onclick="changeLang('bn')" class="{{Session::has('locale') && Session::get('locale') == 'bn' ? 'active' : ''}}">BN</span>
    </div>
    <div class="box-search">
        <span class="icon-search"><img src="{{ asset('/') }}frontend/assets/images/material/ic-search.png" alt=""></span>
        <span class="icon-search black"><img src="{{ asset('/') }}frontend/assets/images/material/ic-search-bl.png" alt=""></span>
        <div class="search-box">

        </div>
    </div>
</div>

<header class="{{ isset($is_nobanner) ? 'nobanner' : '' }}">
    <div class="wrapper">
        <div class="logo white">
            <a
                target="_self"
                href="{{ route('frontend.home') }}">
                <img src="{{ asset('/') }}frontend/assets/contents/4dVXEf6gSg.png" alt="" />
            </a>
            @foreach($partsParentBrands as $partsParentBrand)
                <a
                target="_self"
                href="{{ route('frontend.product-search', ['brand_id' => $partsParentBrand->id]) }}">
                    <img src="{{ asset(!empty($partsParentBrand->logo) ? $partsParentBrand->logo : 'frontend/assets/contents/Xuczl0Gp6S.svg') }}" alt="" style="height: 35px;" />
                </a>
            @endforeach
        </div>
        <div class="logo black">
            <a
                target="_self"
                href="{{ route('frontend.home') }}">
                <img src="{{ asset('/') }}frontend/assets/contents/mwCf0qfJ80.svg"
                     alt=""></a>
            @foreach($partsParentBrands as $partsParentBrand)
                <a
                target="_self"
                href="{{ route('frontend.product-search', ['brand_id' => $partsParentBrand->id]) }}">
                        <img src="{{ asset(!empty($partsParentBrand->logo) ? $partsParentBrand->logo : 'frontend/assets/contents/Xuczl0Gp6S.svg') }}" alt="" style="height: 35px;" />
                </a>
            @endforeach
        </div>
        @include('frontend.includes.right-header')
        <div class="togglemenu" {{--data-bs-toggle=""--}}>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

@include('frontend.includes.popupsearch')
@include('frontend.includes.burgermenu')

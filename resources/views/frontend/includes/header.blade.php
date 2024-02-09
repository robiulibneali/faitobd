<header class="{{ isset($is_nobanner) ? 'nobanner' : '' }}">
    <div class="wrapper">
        <div class="logo white">
            <a
                target="_self"
                href="{{ route('frontend.home') }}">
                <img src="{{ asset('/') }}frontend/assets/contents/4dVXEf6gSg.png"
                     alt=""></a>
            <a
                target="_self"
                href="{{ route('frontend.product-search') }}">
                <img src="{{ asset('/') }}frontend/assets/contents/Xuczl0Gp6S.svg"
                     alt=""></a>
            <a
                target="_self"
                href="{{ route('frontend.product-search') }}">
                <img src="{{ asset('/') }}frontend/assets/contents/pyvI3XbF6c.svg"
                     alt=""></a>
        </div>
        <div class="logo black">
            <a
                target="_self"
                href="{{ route('frontend.home') }}">
                <img src="{{ asset('/') }}frontend/assets/contents/mwCf0qfJ80.svg"
                     alt=""></a>
            <a
                target="_self"
                href="{{ route('frontend.product-search') }}">
                <img src="{{ asset('/') }}frontend/assets/contents/QQLuesY68Q.svg"
                     alt=""></a>
            <a
                target="_self"
                href="{{ route('frontend.product-search') }}">
                <img src="{{ asset('/') }}frontend/assets/contents/x1ea8i9Hqc.svg"
                     alt=""></a>
        </div>
        @include('frontend.includes.right-header')
        <div class="togglemenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

@include('frontend.includes.popupsearch')
@include('frontend.includes.burgermenu')

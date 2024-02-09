<footer>
    <a target="_blank" href="https://api.whatsapp.com/send?phone=+628111616466" class="live-wa">
        <figure><img src="{{ asset('/') }}frontend/assets/images/material/ic-wa.png" alt=""></figure>
        <div class="text">
            <h5>Whatsapp</h5>
            <h3>Live Chat</h3>
        </div>
    </a>
    <div class="wrapper">
        <div class="left-foot">
            <div class="box">
                <a href="#" class="logo-foot"><img src="{{ asset('/') }}frontend/assets/contents/vVGqW50UMC.svg" alt=""></a>
            </div>
            <div class="box">
                <h6>PT FAITO RACING DEVELOPMENT INDONESIA</h6>
                <p><b>Head Office :</b>The Boulevard No. 53
                    Jakarta Garden City
                    Jakarta Timur 13910</p>
            </div>
            <div class="box">
                @foreach($siteSettings as $siteSetting)
                <span>T. <a href="tel:{{ $siteSetting->helpline_number }}">{{ $siteSetting->helpline_number }}</a></span>
                @endforeach
                <span>E. <a href="mailto:customercare@faito.co.id">customercare@faito.co.id</a></span>
            </div>
        </div>
        <div class="right-foot">
            <small>Faito Careline</small>
            @foreach($siteSettings as $siteSetting)
            <a href="tel:{{ $siteSetting->helpline_number }}" class="telp">{{ $siteSetting->helpline_number }}</a>
            @endforeach
            <div class="quicklink">
                <ul>
                    <li>
                        <a class="" href="{{ route('frontend.home') }}">
                            {{ trans('frontend.menu.home') }}
                        </a>

                    </li>
                    <li>
                        <a class="" href="{{ route('frontend.faitology') }}">
                            {{ trans('frontend.menu.story') }}
                        </a>

                    </li>
                    <li>
                        <a class="" href="#">
                            {{ trans('frontend.menu.product') }}
                        </a>

                    </li>
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
            <div class="medsos-foot">
                @foreach($siteSettings as $siteSetting)
                <a href="{{ $siteSetting->fb_link ?? '' }}" rel="nofollow" target="_blank"><img src="{{ asset('/') }}frontend/assets/contents/DL94PSMnkG.png" alt=""></a>
                <a href="{{ $siteSetting->tiktok_link ?? '' }}" rel="nofollow" target="_blank"><img src="{{ asset('/') }}frontend/assets/contents/G6cXnP7XQs.png" alt=""></a>
                <a href="{{ $siteSetting->insta_link ?? '' }}" rel="nofollow" target="_blank"><img src="{{ asset('/') }}frontend/assets/contents/8kSM0H9toL.png" alt=""></a>
                <a href="{{ $siteSetting->youtube_link ?? '' }}" rel="nofollow" target="_blank"><img src="{{ asset('/') }}frontend/assets/contents/lLW3VdDELH.png" alt=""></a>
                @endforeach
            </div>
        </div>
    </div>
    <div class="bottom-foot">
        <p>Copyrights {{ date('Y') }} © PT Faito Racing Development Indonesia.  All Rights Reserved</p>
    </div>
</footer>

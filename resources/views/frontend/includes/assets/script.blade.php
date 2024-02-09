<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/TweenMax.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/select2.full.min.js"></script>
<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/slick.min.js"></script>

<script type="text/javascript" src="{{ asset('/') }}frontend/assets/fe/js/main.min.js"></script>
<script type="text/javascript">

    function changeLang(lang){
        // window.location = "https://faito.co.id/changelang/" + lang ;
        window.location = BASEURL + 'change-language/' + lang;
    }
</script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-P8DTNYZ7MJ"></script>
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-P8DTNYZ7MJ');</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>

{{--Toastr JS--}}
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if(session('success'))
    <script>
        toastr.success("{{ session('success') }}")
    </script>
@endif
@if(session('error'))
    <script>
        toastr.error("{{ session('error') }}")
    </script>
@endif

@stack('script')
@yield('script')

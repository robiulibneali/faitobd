<!doctype html>
<html lang="en" dir="ltr">
<head>

    <!-- META DATA -->
    @include('backend.includes.assets.meta')
    <!-- TITLE -->
    <title>Faito - @yield('title')</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}backend/assets/images/brand/favicon.ico" />

    @include('backend.includes.assets.style')

</head>

<body class="ltr app sidebar-mini">

<!-- Switcher-->
<!-- Switcher -->
@include('backend.includes.switcher')
<!-- End Switcher -->
<!-- Switcher-->

<!-- GLOBAL-LOADER -->
<div id="global-loader">
    <img src="{{ asset('/') }}backend/assets/images/loader.svg" class="loader-img" alt="Loader">
</div>
<!-- /GLOBAL-LOADER -->

<!-- PAGE -->
<div class="page">
    <div class="page-main">

        <!-- app-Header -->
        @include('backend.includes.header')
        <!-- /app-Header -->

        <!--APP-SIDEBAR-->
        @include('backend.includes.sidebar')
        <!--/APP-SIDEBAR-->

        <!--app-content open-->
        <div class="app-content main-content mt-0">
            <div class="side-app">

                <!-- CONTAINER -->
                <div class="main-container container-fluid">

                    @yield('body')

                </div>
            </div>
        </div>
        <!-- CONTAINER CLOSED -->
    </div>

{{--    @include('backend.includes.modal')--}}


    @include('backend.includes.footer')

</div>
<!-- page -->

<!-- BACK-TO-TOP -->
<a href="#top" id="back-to-top"><i class="fa fa-long-arrow-up"></i></a>

@include('backend.includes.assets.script')

</body>

</html>

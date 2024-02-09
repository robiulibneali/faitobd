<!DOCTYPE html>
<html>

<head>
    @include('frontend.includes.assets.meta')
    <title>Faito</title>

    <link rel="icon" href="{{ asset('/') }}frontend/assets/contents/Y1nunJilpj.png">

    <!--Style-->
    <!--build:css css/styles.min.css-->

    @include('frontend.includes.assets.css')
    <!--endbuild-->

    <!--js-->
    <!--build:js js/main.min.js -->

    <script>
        const BASEURL = "{!! url('/') !!}" + '/';

    </script>
    @include('frontend.includes.assets.script')
    <!--endbuild-->
</head>
<body>

<!-- header -->
@include('frontend.includes.header')
<!-- end of header --><!-- middle -->
<!-- middle -->

@yield('body')

<!-- end of middle -->
<!-- end of middle -->
<!--Footer -->
@include('frontend.includes.footer')
<!--end of Footer -->
</body>

</html>

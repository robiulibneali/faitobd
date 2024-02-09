<!-- BOOTSTRAP CSS -->
<link id="style" href="{{ asset('/') }}backend/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

<!-- STYLE CSS -->
<link href="{{ asset('/') }}backend/assets/css/style.css" rel="stylesheet" />
<link href="{{ asset('/') }}backend/assets/css/skin-modes.css" rel="stylesheet" />

<!--- FONT-ICONS CSS -->
<link href="{{ asset('/') }}backend/assets/plugins/icons/icons.css" rel="stylesheet" />

<!-- INTERNAL Switcher css -->
<link href="{{ asset('/') }}backend/assets/switcher/css/switcher.css" rel="stylesheet">
<link href="{{ asset('/') }}backend/assets/switcher/demo.css" rel="stylesheet">

{{--Toastr CSS--}}
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@stack('style')
@yield('style')

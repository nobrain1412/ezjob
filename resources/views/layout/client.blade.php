<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.webstrot.com/html/jobpro/job_dark/company_listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Dec 2023 10:04:25 GMT -->

<head>
    <meta charset="utf-8" />
    <title>Company Listing</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Job Pro" />
    <meta name="keywords" content="Job Pro" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--srart theme style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/animate.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/font-awesome.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/fonts.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/owl.theme.default.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/flaticon.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_II.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive2.css') }}" />
    <!-- favicon links -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('images/header/favicon.ico') }}" />
</head>

<body>
    {{-- header --}}
    @include('layout.client.header')
    @yield('content')
    {{-- footer --}}
    @include('layout.client.footer')
    <!--main js file start-->
    <script src="{{ asset('js/jquery_min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="{{ asset('js/jquery.menu-aim.js') }}"></script>
    <script src="{{ asset('js/jquery.countTo.js') }}"></script>
    <script src="{{ asset('js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('js/custom_II.js') }}"></script>
    @stack('scripts')
    <!-- Load Facebook SDK for JavaScript -->
</body>


<!-- Mirrored from www.webstrot.com/html/jobpro/job_dark/company_listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Dec 2023 10:04:25 GMT -->

</html>

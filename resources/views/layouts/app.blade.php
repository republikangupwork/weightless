<!DOCTYPE html>
<html lang="en">
    <head>
        <title>@yield('title', config('app.name'))</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('') }}css/open-iconic-bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('') }}css/animate.css">

        <link rel="stylesheet" href="{{ asset('') }}css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('') }}css/owl.theme.default.min.css">
        <link rel="stylesheet" href="{{ asset('') }}css/magnific-popup.css">

        <link rel="stylesheet" href="{{ asset('') }}css/aos.css">

        <link rel="stylesheet" href="{{ asset('') }}css/ionicons.min.css">

        <link rel="stylesheet" href="{{ asset('') }}css/flaticon.css">
        <link rel="stylesheet" href="{{ asset('') }}css/icomoon.css">
        <link rel="stylesheet" href="{{ asset('') }}css/style.css">

        <link rel="stylesheet" href="https://cdn.plyr.io/3.5.6/plyr.css" />

        <style type="text/css">
            body::-webkit-scrollbar {
                display: none;
            }
            .scroll::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
                border-radius: 10px;
                background-color: #F5F5F5;
            }

            .scroll::-webkit-scrollbar {
                width: 8px;
                background-color: #F5F5F5;
            }

            .scroll::-webkit-scrollbar-thumb {
                border-radius: 10px;
                -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
                background-color: #fe9191;
            }
        </style>

        @yield('style')
    </head>

    <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
        @include('layouts.header')
        @yield('content')
        @include('layouts.footer')
    </body>

    <script src="{{ asset('') }}js/jquery.min.js"></script>
    <script src="{{ asset('') }}js/jquery-migrate-3.0.1.min.js"></script>
    <script src="{{ asset('') }}js/popper.min.js"></script>
    <script src="{{ asset('') }}js/bootstrap.min.js"></script>
    <script src="{{ asset('') }}js/jquery.easing.1.3.js"></script>
    <script src="{{ asset('') }}js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('') }}js/jquery.stellar.min.js"></script>
    <script src="{{ asset('') }}js/owl.carousel.min.js"></script>
    <script src="{{ asset('') }}js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('') }}js/aos.js"></script>
    <script src="{{ asset('') }}js/jquery.animateNumber.min.js"></script>
    <script src="{{ asset('') }}js/scrollax.min.js"></script>
    <script src="{{ asset('') }}js/main.js"></script>

    <script src="https://cdn.plyr.io/3.5.6/plyr.polyfilled.js"></script>

    @yield('script')
</html>
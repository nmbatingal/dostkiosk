<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/material-kit.css?v=2.0.5') }}" rel="stylesheet">
    <link href="{{ asset('assets/demo/demo.css') }}" rel="stylesheet">

    <!-- OverlayScrollbars -->
    <link href="{{ asset('node_modules/overlayscrollbars/css/OverlayScrollbars.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('node_modules/mediaelement/mediaelementplayer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/mediaelement/plugins/dist/playlist/playlist.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/lightgallery/dist/css/lightgallery.css') }}">
    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">

    <style type="text/css">

        .navbar-expand-lg:not(.navbar-transparent) .container-fluid {
            z-index: 2;
            position: relative;
            color: #555;
        }

        .page-header > .container-fluid {
            z-index: 2;
            position: relative;
            color: #ffffff;
        }

        .nav-pills .nav-link:not(.active) {
            border: 1px solid rgba(255, 255, 255, .25);
        }

        .footer {
            bottom: 0;
            color: #212529;
            left: 0px;
            
            right: 0;
            border-top: 1px solid #e9ecef;
            background: #000000;
            color: #ffffff;
        }

        .page-header .carousel .carousel-indicators {
            bottom: 0;
        }

        .os-scrollbar-vertical > .os-scrollbar-track > .os-scrollbar-handle {
            min-width: 100px;
            max-width: 300px;
        }

        .card .card-image {
            color: #ffffff;
        }

        .rgba-black-strong, .rgba-black-strong:after {
            background-color: rgba(0,0,0,.7);
        }

        @font-face {
            font-family: DigitalClockFont;
            src: url('{{ asset('fonts/digital/digital-7.ttf') }}');
        }

        .timer-clock {
            font-family: 'DigitalClockFont', sans-serif;
            font-size: 30pt;
        }
    </style>

    @yield('styles')
</head>
<body class="index-page sidebar-collapse">
    <div id="app">
        @include('layouts.navbar')

        @yield('content')

        @include('layouts.footer')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-kit.js?v=2.0.5') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/mediaelement/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('node_modules/mediaelement/plugins/dist/playlist/playlist.js') }}"></script>
    <!-- <script src="{{ asset('node_modules/mediaelement/plugins/dist/preview/preview.js') }}"></script> -->

    <!-- Sticky Kit -->
    <script src="{{ asset('node_modules/sticky-kit-master/dist/sticky-kit.min.js') }}" type="text/javascript"></script>

    <!-- Lightgallery JS -->
    <script src="{{ asset('node_modules/lightgallery/dist/js/lightgallery.min.js') }}" type="text/javascript"></script>
    <!-- Lightgallery JS Plugins -->
    <script src="{{ asset('node_modules/lightgallery/modules/lg-thumbnail.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/lightgallery/modules/lg-fullscreen.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/lightgallery/modules/lg-video.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/lightgallery/modules/lg-zoom.min.js') }}" type="text/javascript"></script>
    <script src="http://vjs.zencdn.net/4.12/video.js"></script>

    @stack('scripts')

    <script>
        $('#video-player').mediaelementplayer();
    </script>
</body>
</html>
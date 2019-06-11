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

    <link rel="stylesheet" href="{{ asset('node_modules/mediaelement/mediaelementplayer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/mediaelement/plugins/dist/playlist/playlist.css') }}">
    <link rel="stylesheet" href="{{ asset('node_modules/lightgallery/dist/css/lightgallery.css') }}">

    <script>
        function updateClock()
        {
            var currentTimeString = moment().format('LTS');

            $(".timer").html(currentTimeString);
        }

        function updateDate()
        {
            var currentTimeString = moment().format('dddd, MMM D, YYYY');

            $(".timer-date").html(currentTimeString);
        }
    </script>

    <style type="text/css">

        body {
            /*** DISABLE TEXT SELECT ***/
            -webkit-user-select: none;
            -moz-user-select: -moz-none;
            -ms-user-select: none;
            user-select: none;
        }

        .swiper-container {
            max-height: 570px; 
        }

        .swiper-slide {
            opacity: .25;
            transition: opacity .25s ease-in-out;
           -moz-transition: opacity .25s ease-in-out;
           -webkit-transition: opacity .25s ease-in-out;
        }

        .swiper-slide-active {
            opacity: 1;
            transition: opacity .25s ease-in-out;
           -moz-transition: opacity .25s ease-in-out;
           -webkit-transition: opacity .25s ease-in-out;
            pointer-events: auto !important;
        }

        /*.header-swipers .header-swiper-back-1 .swiper-slide {
            height:180px;
            width:480px;
            margin-top:auto;
            margin-bottom:auto;
            border: 4px solid rgba(255,255,255,.4);
            overflow: hidden;
        }

        .header-swipers .header-swiper-front .swiper-slide {
            height:220px;
            width:520px;
            margin-top:auto;
            margin-bottom:auto;
            overflow: hidden;
        }

        .header-swipers .header-swiper-front .swiper-slide img {
            height: 100%;
            width: 100%;
        }*/

        .footer {
            bottom: 0;
            color: #212529;
            left: 0px;
            
            right: 0;
            border-top: 1px solid #e9ecef;
            background: #000000;
            color: #ffffff;
        }

        .particles-js-canvas-el {
            position: absolute;
            top: -1;
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
</head>
<body class="index-page sidebar-collapse">
    <div id="app">

        <div class="row m-0 p-2">
            <div class="col mr-auto">
                <span id="lightgallery3">
                    <a href="#" class="btn btn-danger btn-lg">
                        <i class="fa fa-list"></i>&nbsp;&nbsp;&nbsp; Citizen's Charter
                    </a>
                    <span style="display:none;">
                        @forelse ( $photos as $photo )
                            <img src="{{ asset($photo ) }}">
                        @empty
                        @endforelse
                    </span>
                </span>
            </div>
            <div class="col text-right ml-auto">
                <span id="lightgallery1">
                    <a href="{{ asset('images/directory/org_chart.jpg') }}" class="btn btn-success btn-lg">
                        <i class="fa fa-sitemap"></i>&nbsp;&nbsp;&nbsp; Regional Directory
                    </a>
                </span>
                <span id="lightgallery2">
                    <a href="{{ asset('images/directory/adn.jpg') }}" class="btn btn-info btn-lg">
                        <i class="fa fa-users"></i>&nbsp;&nbsp;&nbsp; ADN Provincial Center
                    </a>
                </span>
                <!-- <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Customer Survey</button> -->

            </div>
        </div>

        <div class="row m-0 pt-3">
            <div class="col-md-8 mr-auto">
                <video 
                    id="player2"
                    controls 
                    autoplay 
                    preload="auto"
                    data-cast-title="DOST-ASTI"
                    poster="{{ asset('storage/videos/dost-intro-2018.png') }}"
                    loop
                    style="width:100%;height:100%;" width="100%" height="100%">

                    <source 
                        src="{{ asset('storage/videos/dost-intro-2018.mp4') }}" 
                        data-playlist-thumbnail="{{ asset('storage/videos/dost-intro-2018.png') }}"
                        title="DOST-ASTI"
                        data-playlist-description="" 
                        type="video/mp4">

                    <source 
                        src="{{ asset('storage/videos/dost-intro-2018.mp4') }}" 
                        data-playlist-thumbnail="{{ asset('storage/videos/dost-intro-2018.png') }}"
                        title="DOST-ASTI"
                        data-playlist-description="" 
                        type="video/mp4">
                </video>
            </div>
            <div class="col-md-4 ml-auto mr-auto pl-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="swiper-slide">
                            <div class="swiper-container swiper-container-v">
                              <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <img src="{{ asset('images/cards/drrm/drrm-01.jpg') }}" alt="Raised Image" class=" img-raised img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <img src="{{ asset('images/cards/msme/msme-02.jpg') }}" alt="Raised Image" class=" img-raised img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <img src="{{ asset('images/cards/health/health-01.jpg') }}" alt="Raised Image" class=" img-raised img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <img src="{{ asset('images/cards/academe/academe-01.jpg') }}" alt="Raised Image" class=" img-raised img-fluid">
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <div class="swiper-pagination swiper-pagination-v"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: -573px;">
                        <div class="swiper-container text-center swiper-container-front">
                            <!-- Additional required wrapper -->
                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="{{ route('drrm.index') }}">
                                                <img src="{{ asset('images/cards/drrm/card-border.png') }}" alt="Raised Image" class="img-fluid rounded">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="{{ route('msme.index') }}">
                                                <img src="{{ asset('images/cards/msme/card-border.png') }}" alt="Raised Image" class="img-fluid rounded">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="{{ route('health.index') }}">
                                                <img src="{{ asset('images/cards/health/card-border.png') }}" alt="Raised Image" class="img-fluid rounded">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Slides -->
                                <div class="swiper-slide">
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <a href="{{ route('academe.index') }}">
                                                <img src="{{ asset('images/cards/academe/card-border.png') }}" alt="Raised Image" class="img-fluid rounded">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Add Pagination -->
                            <!-- <div class="swiper-pagination"></div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer fixed-bottom">
            <particles-js></particles-js>
            <div class="container-fluid">
                <div class="float-left">
                    <div class="align-items-center">
                        <h1 class="timer-clock timer"></h1>
                    </div>
                    <div class="align-items-center">
                        <h4 class="timer-date"></h4>
                    </div>
                </div>
                <div class="float-right text-right">
                    <a href="javascript:void(0)">
                        <img height="70px" src="{{ asset('images/logo/sftp_qrcode.png') }}">
                    </a>
                    <br>&copy; 2019.Design & Developed by DOST Caraga.
                    <br>All Rights Reserved. 
                </div>
            </div>
        </footer>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/material-kit.js?v=2.0.5') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/mediaelement/mediaelement-and-player.min.js') }}"></script>
    <script src="{{ asset('node_modules/mediaelement/plugins/dist/playlist/playlist.js') }}"></script>

    <!-- Lightgallery JS -->
    <script src="{{ asset('node_modules/lightgallery/dist/js/lightgallery.min.js') }}" type="text/javascript"></script>
    <!-- Lightgallery JS Plugins -->
    <script src="{{ asset('node_modules/lightgallery/modules/lg-thumbnail.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/lightgallery/modules/lg-fullscreen.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/lightgallery/modules/lg-video.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('node_modules/lightgallery/modules/lg-zoom.min.js') }}" type="text/javascript"></script>

    <!-- Initialize Swiper -->
    <script>
        $(document).ready(function()
        {
            setInterval('updateClock()', 1000);
            setInterval('updateDate()', 1000);

            $(document).bind("contextmenu",function(e){
                // return false;
            }); 
        });
    </script>
        
    <script>
        var mediaElements = $('video');

        for (var i = 0, total = mediaElements.length; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                features: ['prevtrack', 'playpause', 'nexttrack', 'current', 'progress', 'duration', 'volume', 'playlist', 'loop', 'fullscreen']
            });
        }

        var swiperBack = new Swiper('.swiper-container-v', {
            direction: 'vertical',
            spaceBetween: 50,
            loop: true,
            slidesPerView: 'auto',
            centeredSlides: true,
            effect: 'coverflow',
        });

        var swiperFront = new Swiper('.swiper-container-front', {
            direction: 'vertical',
            spaceBetween: 50,
            loop: true,
            slidesPerView: 'auto',
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            centeredSlides: true,
            effect: 'coverflow',
            coverflowEffect: {
                slideShadows: false,
            },
            controller: {
                control: [swiperBack],
                by: 'container',
            },
            keyboard: true,
            a11y: true,
            grabCursor: true
        });

        // lightgallery
        $("#lightgallery1").lightGallery({
            fullScreen: false,
            download: false,
        });
        $("#lightgallery2").lightGallery({
            fullScreen: false,
            download: false,
        });
        $("#lightgallery3").lightGallery({
            fullScreen: false,
            download: false,
        });
    </script>
</body>
</html>
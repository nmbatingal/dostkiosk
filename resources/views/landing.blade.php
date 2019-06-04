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

        .header-swipers {
            width:100%;
            height:100%;
        }

        .header-swipers .swiper-slide {
            opacity: .25;
            transition: opacity .25s ease-in-out;
           -moz-transition: opacity .25s ease-in-out;
           -webkit-transition: opacity .25s ease-in-out;
        }

        .header-swipers .swiper-slide-active {
            opacity: 1;
            transition: opacity .25s ease-in-out;
           -moz-transition: opacity .25s ease-in-out;
           -webkit-transition: opacity .25s ease-in-out;
            pointer-events: auto !important;
        }

        .header-swipers .header-swiper-back-1 .swiper-slide {
            height:580px;
            width:880px;
            margin-top:auto;
            margin-bottom:auto;
            border: 4px solid rgba(255,255,255,.4);
            overflow: hidden;
        }

        .header-swipers .header-swiper-front .swiper-slide {
            height:620px;
            width:920px;
            margin-top:auto;
            margin-bottom:auto;
            overflow: hidden;
        }

        .header-swipers .header-swiper-front .swiper-slide img {
            height: 100%;
            width: 100%;
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

        .modal-xl {
            max-width: 1330px;
        }
    </style>
</head>
<body class="index-page sidebar-collapse">
    <div id="app">

        <div class="section p-2">
            <div class="col text-right ml-auto">
                <button class="btn btn-danger btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-play"></i> Watch Video</button>
                <!-- <button class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><i class="fa fa-pencil"></i> Customer Survey</button> -->
            </div>
        </div>

        <!-- Classic Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="wrapper">
                                    <video 
                                        id="player2"
                                        controls 
                                        preload="auto"
                                        data-cast-title="DOST-ASTI"
                                        poster="{{ asset('storage/videos/dost-intro-2018.png') }}"
                                        style="width: 100%;">

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  End Modal -->

        <div class="section pt-2">
            <div class="header-swipers">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="swiper-container header-swiper-back-1">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img data-src="{{ asset('images/cards/drrm/drrm-01.jpg') }}" alt="Raised Image" class="swiper-lazy img-raised img-fluid">
                                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img data-src="{{ asset('images/cards/msme/msme-02.jpg') }}" alt="Raised Image" class="swiper-lazy img-raised img-fluid">
                                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img data-src="{{ asset('images/cards/health/health-01.jpg') }}" alt="Raised Image" class="swiper-lazy img-raised img-fluid">
                                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img data-src="{{ asset('images/cards/academe/academe-01.jpg') }}" alt="Raised Image" class="swiper-lazy img-raised img-fluid">
                                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 p-0" style="margin-top: -600px;">
                            <div class="swiper-container text-center header-swiper-front">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <a href="{{ route('drrm.index') }}">
                                                    <img data-src="{{ asset('images/cards/drrm/card-border.png') }}" alt="Raised Image" class="swiper-lazy img-fluid rounded">
                                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <a href="{{ route('msme.index') }}">
                                                    <img data-src="{{ asset('images/cards/msme/card-border.png') }}" alt="Raised Image" class="swiper-lazy img-fluid rounded">
                                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <a href="{{ route('health.index') }}">
                                                    <img data-src="{{ asset('images/cards/health/card-border.png') }}" alt="Raised Image" class="swiper-lazy img-fluid rounded">
                                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <a href="{{ route('academe.index') }}">
                                                    <img data-src="{{ asset('images/cards/academe/card-border.png') }}" alt="Raised Image" class="swiper-lazy img-fluid rounded">
                                                    <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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

    <!-- Initialize Swiper -->
    <script>
        $(document).ready(function()
        {
            // $('#element').toast('show');

            setInterval('updateClock()', 1000);
            setInterval('updateDate()', 1000);

            $(document).bind("contextmenu",function(e){
                return false;
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

        // MODAL PLAYER EVENT
        var modalPlayer = document.getElementById("player2"); 

        // play video on modal open event
        $('#myModal').on('shown.bs.modal', function (e) {
            modalPlayer.currentTime = 0;
            modalPlayer.play();
        });

        // pause video on modal close event
        $('#myModal').on('hidden.bs.modal', function (e) {
            modalPlayer.pause();
        });


        var swiperBack1 = new Swiper('.header-swiper-back-1', {
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 200,
            effect: 'coverflow',
            speed: 600,
            loop: true,
            coverflowEffect: {
                slideShadows: false,
            },
            watchSlidesVisibility: true,
            lazy: true
        });

        var swiperFront = new Swiper('.header-swiper-front', {
            slidesPerView: 'auto',
            centeredSlides: true,
            spaceBetween: 100,
            effect: 'coverflow',
            speed: 600,
            loop: true,
            coverflowEffect: {
                slideShadows: false,
            },
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            controller: {
                control: [swiperBack1],
                by: 'container',
            },
            keyboard: true,
            a11y: true,
            grabCursor: true,
            watchSlidesVisibility: true,
            lazy: true
        });

        $(".header-swiper-front")
            .mouseenter(function() { swiperFront.autoplay.stop(); })
            .mouseleave(function() { swiperFront.autoplay.start(); });
    </script>
</body>
</html>
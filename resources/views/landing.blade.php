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

    <style type="text/css">

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
    </style>
</head>
<body class="index-page sidebar-collapse">
    <div id="app">

        <div class="section">
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
                                                <a href="{{ url('/drrm') }}">
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
                                                <img data-src="{{ asset('images/cards/msme/card-border.png') }}" alt="Raised Image" class="swiper-lazy img-fluid rounded">
                                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img data-src="{{ asset('images/cards/health/card-border.png') }}" alt="Raised Image" class="swiper-lazy img-fluid rounded">
                                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Slides -->
                                    <div class="swiper-slide">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <img data-src="{{ asset('images/cards/academe/card-border.png') }}" alt="Raised Image" class="swiper-lazy img-fluid rounded">
                                                <div class="swiper-lazy-preloader swiper-lazy-preloader-white"></div>
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

    <!-- Initialize Swiper -->
    <script>
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
            // Enable lazy loading
            lazy: true
            // coverflowEffect: {
            //     slideShadows: false
            // }
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
            // coverflowEffect: {
            //    slideShadows: false,
            // },
            // pagination: {
            //     el: '.header-swiper-front .swiper-pagination',
            //     clickable: true,
            // },
            // navigation: {
            //     nextEl: '.header-swiper-front .swiper-button-next',
            //     prevEl: '.header-swiper-front .swiper-button-prev',
            // },
            controller: {
                control: [swiperBack1],
                by: 'container',
            },
            keyboard: true,
            a11y: true,
            grabCursor: true,
            watchSlidesVisibility: true,
            // Enable lazy loading
            lazy: true
        });

        $(".header-swiper-front")
            .mouseenter(function() { swiperFront.autoplay.stop(); })
            .mouseleave(function() { swiperFront.autoplay.start(); });
    </script>
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

        $(document).ready(function()
        {
            setInterval('updateClock()', 1000);
            setInterval('updateDate()', 1000);
        });
    </script>

</body>
</html>
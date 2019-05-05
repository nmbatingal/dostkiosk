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

        /*.main {
            background: none;
        }*/
    </style>
</head>
<body class="index-page sidebar-collapse">
    <div id="app">
        <nav class="navbar navbar-transparent fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
            <div class="container-fluid">
                <div class="navbar-translate">
                    <a href="{{ url()->previous() }}" class="btn btn-info btn-raised btn-lg">
                        <i class="fa fa-chevron-left"></i> Back
                    </a>
                    <a href="{{ url('/') }}" class="btn btn-success btn-raised btn-lg">
                        <i class="fa fa-home"></i> Home
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="navbar-toggler-icon"></span>
                      <span class="navbar-toggler-icon"></span>
                      <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" class="btn btn-danger btn-raised btn-lg">
                                <i class="fa fa-play"></i> Watch video
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="page-header header-filter" data-parallax="true" 
             style="background-image: url('{{ asset('assets/img/profile_city.jpg') }}')">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="page-header-title title">{!! $card_info->title !!}</h1>
                        <h3 class="page-header-title title">{!! $card_info->alt_name !!}</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="main">

            <div class="section section-basic">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1">
                            <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" href="#dashboard-2" role="tab" data-toggle="tab" aria-selected="true">
                                        <i class="material-icons">dashboard</i> Info
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#schedule-2" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">photo_library</i> Photos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#schedule-2" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">picture_as_pdf</i> Pdf
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#schedule-2" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">video_library</i> Videos
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10 pl-5">
                            <div class="tab-content">
                                <div class="tab-pane active show" id="dashboard-2">
                                    <!-- Carousel Card -->
                                    <div class="card card-raised card-carousel">
                                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                            <ol class="carousel-indicators">
                                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img class="d-block w-100" src="{{ asset('assets/img/bg2.jpg') }}" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                      <h4>
                                                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                                                      </h4>
                                                    </div>
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{ asset('assets/img/bg3.jpg') }}" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                      <h4>
                                                        <i class="material-icons">location_on</i> Somewhere Beyond, United States
                                                      </h4>
                                                    </div>
                                                  </div>
                                                  <div class="carousel-item">
                                                    <img class="d-block w-100" src="{{ asset('assets/img/bg.jpg') }}" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                      <h4>
                                                        <i class="material-icons">location_on</i> Yellowstone National Park, United States
                                                      </h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                              <i class="material-icons">keyboard_arrow_left</i>
                                              <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                              <i class="material-icons">keyboard_arrow_right</i>
                                              <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- End Carousel Card -->
                                    <h2 class="title">{!! $card_info->title !!}</h2>
                                    <h4>The Advanced Science and Technology Institute (DOST-ASTI) leads the government’s research and development initiatives in information, communications and technology (ICT), and microelectronics. They are tasked to lead the PHL-MICROSAT Program: Development of Philippine Scientific Earth Observation Microsatellite. Heard of the launch of the first PH cube satellite, MAYA-1? How about the DIWATA-2 Microsatellite? Browse ASTI materials here or visit their booth for the replicas of the satellites. Yet. ASTI brought with them the replicas of MAYA-1 and DIWATA-2! Isn’t that amazing?</h4>
                                </div>
                                <div class="tab-pane" id="schedule-2">
                                    Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas.
                                    <br>
                                    <br>Dramatically maintain clicks-and-mortar solutions without functional solutions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section section-tabs text-center p-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 ml-auto mr-auto">
                            <h2 class="title">More on {!! $infos[0]->mainTitleCard->alt_name !!}</h2>
                        </div>
                    </div>
                    <div class="swiper-container mt-5">
                        <div class="swiper-wrapper">

                            @forelse ( $infos as $infocard )
                                <div class="swiper-slide">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <div class="card card-blog">
                                            <a href="{{ route('child', ['id' => $infos[0]->mainTitleCard->id, 'card_id' => $infocard->id ]) }}">
                                            <div class="card-header card-header-image">
                                                <img class="img" src="{{ asset('assets/img/profile_city.jpg') }}">
                                            </div>
                                            <div class="card-body ">
                                                <h4 class="card-title">
                                                    {!! $infocard->title !!}
                                                </h4>
                                            </div>
                                            <div class="card-footer">
                                                <p class="card-description">{!! $infocard->card_description !!}</p>
                                            </div>
                                        </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                empty
                            @endforelse
                        </div>
                        <!-- Add Pagination -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="footer">
            <div class="container-fluid">
                <div class="float-left">
                    aa
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

    <!-- OverlayScrollbars JS -->
    <script src="{{ asset('node_modules/overlayscrollbars/js/OverlayScrollbars.js') }}" type="text/javascript"></script>

    <script>
        $(function() {
            //The passed argument has to be at least a empty object or a object with your desired options
            $('body').overlayScrollbars({
                resize: "v",
                sizeAutoCapable: false,
                scrollbars : {
                    visibility       : "auto",
                    autoHide         : "never",
                    autoHideDelay    : 800,
                    dragScrolling    : true,
                    clickScrolling   : true,
                    touchSupport     : true,
                    snapHandle       : false
                },
            });
        });

        var swiperFront = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            effect: 'slides',
            speed: 5000,
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 5000, 
                disableOnInteraction: false,
            },
            freeMode: true,
        });
    </script>
</body>
</html>
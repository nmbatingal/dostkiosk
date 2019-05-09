@extends('layouts.child')

@section('styles')
@endsection

@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('assets/img/profile_city.jpg') }}')">
        <div class="container-fluid pt-2">
            <div class="row">
                <div class="col-md-3">
                    <h1 class="page-header-title title">Department of Science and Technology-Advance Science and Technology Institute</h1>
                    <h3 class="page-header-title title">DOST-ASTI</h3>
                    <img
                        class="pl-3"
                        src="{{ asset('storage/gallery/drrm/asti/DOST ASTI Website QR Code.png') }}" 
                        width="150" >
                    <img
                        class="pl-3"
                        src="{{ asset('storage/gallery/drrm/asti/PHL Microsat Program Website QR Code.png') }}" 
                        width="150" >
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="wrapper">
                                <video id="player1" 
                                       autoplay 
                                       controls 
                                       preload="auto"
                                       data-cast-title="#DOST"
                                       poster="{{ asset('storage/videos/dost-intro-2018.png') }}"
                                       style="width: 100%;">

                                    <source src="{{ asset('storage/videos/dost-intro-2018.mp4') }}" data-playlist-thumbnail="{{ asset('storage/videos/dost-intro-2018.png') }}"
                                            title="#DOST" data-playlist-description="" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="section section-basic">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 text-center p-0" style="margin-top: -50px;">
                        <div class="alert alert-primary">
                            <div class="container">
                                <h2 class="title text-white">Department of Science and Technology-Advance Science and Technology Institute</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">
                        <div class="stickyside">
                            <ul class="nav nav-pills nav-pills-icons flex-column" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active show" href="#info-2" role="tab" data-toggle="tab" aria-selected="true">
                                        <i class="material-icons">dashboard</i> Info
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#photos-2" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">photo_library</i> Photos
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pdfs-2" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">picture_as_pdf</i> Pdf
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#videos-2" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">video_library</i> Videos
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-11 pl-5">
                        <div class="tab-content tab-space">
                            <div class="tab-pane active show" id="info-2">
                                <div class="row">
                                    <div class="col-md-9 ml-auto mr-auto">
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
                                        
                                        <h3>The Advanced Science and Technology Institute (DOST-ASTI) leads the government’s research and development initiatives in information, communications and technology (ICT), and microelectronics. They are tasked to lead the PHL-MICROSAT Program: Development of Philippine Scientific Earth Observation Microsatellite. Heard of the launch of the first PH cube satellite, MAYA-1? How about the DIWATA-2 Microsatellite? Browse ASTI materials here or visit their booth for the replicas of the satellites. Yet. ASTI brought with them the replicas of MAYA-1 and DIWATA-2! Isn’t that amazing?</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-center gallery" id="photos-2">
                                <div class="row">
                                    <div class="col-md-12">
                                        <img src="{{ asset('assets/img/examples/olu-eletu.jpg') }}" class="p-2 img-fluid rounded">
                                        <img src="{{ asset('assets/img/examples/clem-onojeghuo.jpg') }}" class="p-2 img-fluid rounded">
                                        <img src="{{ asset('assets/img/examples/cynthia-del-rio.jpg') }}" class="p-2 img-fluid rounded">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-center gallery" id="videos-2">
                                <div class="row">
                                    <div class="col-md-8 mr-auto ml-auto">
                                        <div class="wrapper">
                                            <video 
                                                id="player2"
                                                controls 
                                                preload="auto"
                                                data-cast-title="DOST-ASTI"
                                                poster="{{ asset('storage/gallery/drrm/asti/video/DOST-ASTI.png') }}"
                                                style="width: 100%;">

                                                <source 
                                                    src="{{ asset('storage/gallery/drrm/asti/video/DOST-ASTI.mp4') }}" 
                                                    data-playlist-thumbnail="{{ asset('storage/gallery/drrm/asti/video/DOST-ASTI.png') }}"
                                                    title="DOST-ASTI"
                                                    data-playlist-description="" 
                                                    type="video/mp4" >

                                                <source 
                                                    src="{{ asset('storage/gallery/drrm/asti/video/3rd Philippine Showcase of Space Technology.mp4') }}" 
                                                    data-playlist-thumbnail="{{ asset('storage/gallery/drrm/asti/video/3rd Philippine Showcase of Space Technology.png') }}"
                                                    title="3rd Philippine Showcase of Space Technology"
                                                    data-playlist-description="" 
                                                    type="video/mp4" >
                                            </video>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('drrm.drrm-cards')
    </div>
@endsection

@push('scripts')
    <script type="text/javascript">

        var mediaElements = $('video#player2');

        for (var i = 0, total = mediaElements.length; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                features: ['prevtrack', 'playpause', 'nexttrack', 'current', 'progress', 'duration', 'volume', 'playlist', 'loop', 'fullscreen']
            });
        }

        $('div.mejs__playlist-selector').removeClass('mejs__playlist-hidden');

        $('video').each(
            function() {
                this.player.pause()
        });

        // $('a').on('click', function() {

        //     $('video').each(
        //         function() {
        //             this.player.pause();
        //     });
            
        // });
    </script>
    <script>
        // This is for the sticky sidebar    
        $(".stickyside").stick_in_parent({
            offset_top: 100
        });
    </script>
@endpush
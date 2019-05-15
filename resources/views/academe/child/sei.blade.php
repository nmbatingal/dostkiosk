@extends('layouts.child')

@section('styles')
<style type="text/css">
    .main-raised {
        margin: -40px 30px 0px;
    }

    #photos, #photos2 {
      /* Prevent vertical gaps */
      line-height: 0;
       
      -webkit-column-count: 3;
      -webkit-column-gap:   0px;
      -moz-column-count:    3;
      -moz-column-gap:      0px;
      column-count:         3;
      column-gap:           0px;  
    }

    #photos, #photos2 img {
      /* Just in case there are inline attributes */
      width: 100% !important;
      height: auto !important;
    }

    @media (max-width: 800px) {
    #photos, #photos2 {
      -moz-column-count:    2;
      -webkit-column-count: 2;
      column-count:         2;
      }
    }

    @media (max-width: 400px) {
    #photos, #photos2 {
      -moz-column-count:    1;
      -webkit-column-count: 1;
      column-count:         1;
      }
    }
</style>
@endsection

@section('content')
    <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('assets/img/profile_city.jpg') }}')">
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-md-3 ml-auto">
                    <h1 class="page-header-title title">Department of Science and Technology-Science Education Institute</h1>
                    <h3 class="page-header-title title">DOST-SEI</h3>
                    <img
                        class="pl-3"
                        src="{{ asset('storage/gallery/academe/sei/DOST Science Education Institute QR code.png') }}" 
                        width="120" >
                    <img
                        class="pl-3"
                        src="{{ asset('storage/gallery/academe/sei/DOST SEI QR Code.png') }}" 
                        width="120" >
                </div>
                <div class="col-md-8 mr-auto ">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="wrapper">
                                <video id="video-player" 
                                       autoplay 
                                       controls 
                                       preload="auto"
                                       data-cast-title="#DOST"
                                       poster="{{ asset('storage/gallery/academe/sei/video/DOSTv Episode 454 - Sinesiyensya, Buhay Scholar.png') }}"
                                       style="height: 100%;">

                                    <source src="{{ asset('storage/gallery/academe/sei/video/DOSTv Episode 454 - Sinesiyensya, Buhay Scholar.mp4') }}" data-playlist-thumbnail="{{ asset('storage/gallery/academe/sei/video/DOSTv Episode 454 - Sinesiyensya, Buhay Scholar.png') }}"
                                            title="#DOST" data-playlist-description="" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main">
        <div class="section section-basic">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-md-12 text-center p-0" style="margin-top: -50px;">
                        <div class="alert alert-info">
                            <div class="container">
                                <h2 class="title text-white">Department of Science and Technology-Science Education Institute</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-1">
                        <div class="stickyside">
                            <ul class="nav nav-pills nav-pills-icons nav-pills-warning flex-column" role="tablist">
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
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="#pdfs-2" role="tab" data-toggle="tab" aria-selected="false">
                                        <i class="material-icons">picture_as_pdf</i> Pdf
                                    </a>
                                </li> -->
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
                                        <h3 class="title">About DOST-SEI</h3>

                                        <img class="pl-3" src="{{ asset('storage/gallery/academe/sei/sei logo.png') }}" width="250" >

                                        <h3>The <b>S&T Undergraduate Scholarships Program</b> aims to stimulate and entice talented Filipino youths to pursue lifetime productive careers in science and technology and ensure a steady, adequate supply of qualified S&T human resources which can steer the country towards national progress. Check here the priority S&T programs and study placements, qualifications, requirements, and benefits.</h3>


                                        <div class="row">
                                            <div class="col-md-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="pl-3" src="{{ asset('storage/gallery/academe/sei/qrcodes/2018 Junior Level Science Scholarship Application Form QR.png') }}" width="100%" >
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        2018 Junior Level Science Scholarship Application Form QR
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="pl-3" src="{{ asset('storage/gallery/academe/sei/qrcodes/JLSS Primer-Reviewer.png') }}" width="100%" >
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        JLSS Primer-Reviewer
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="pl-3" src="{{ asset('storage/gallery/academe/sei/qrcodes/2019 Undergrad Scholarship Application Form QR.png') }}" width="100%" >
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        2019 Undergrad Scholarship Application Form QR
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="pl-3" src="{{ asset('storage/gallery/academe/sei/qrcodes/Undergrad Primer.png') }}" width="100%" >
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        Undergrad Primer
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="pl-3" src="{{ asset('storage/gallery/academe/sei/qrcodes/2018 CBPSME Application Form QR.png') }}" width="100%" >
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        2018 CBPSME Application Form QR
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <img class="pl-3" src="{{ asset('storage/gallery/academe/sei/qrcodes/Foreign Graduate Scholarship QR Code.png') }}" width="100%" >
                                                    </div>
                                                    <div class="card-footer text-center">
                                                        Foreign Graduate Scholarship QR Code
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <h3>The <b>Junior Level Science Scholarship (JLSS)</b> Program aims to: provide scholarships that will finance the education of talented and deserving students in their third year of college and who are pursuing degree programs in the areas of science and technology; and ensure a steady, adequate supply of qualified S&T human resources who can steer the country towards national progress. Learn here the priority S&T programs and study placements, qualifications, requirements, and benefits.</h3>

                                        <h3>The <b>Accelerated Science and Technology Human Resource Development Program (ASTHRDP)</b> of the National Science Consortium and the <b>Capability Building Program in Science and Mathematics Education (CBPSME)</b> provide scholarships for Master’s and Doctorate degrees in priority S&T areas. This aims to help improve the country’s global competitiveness and capability to innovate through Science and Technology, and accelerate the production of high-level human resources needed for Research and Development in S&T. Check out here the requirements, criteria of eligibility and the privileges. You might be our next National Scientist!</h3>

                                        <br>

                                        <h3 class="title">More on SEI</h3>
                                        <iframe src="http://www.sei.dost.gov.ph/" id="target-div" frameborder="0" width="100%" height="680px"></iframe>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-center gallery" id="photos-2">
                                <div class="row">
                                    <div class="col-md-9 ml-auto mr-auto">
                                        <section id="photos">
                                            <div id="lightgallery">
                                                @forelse ( $photos as $photo )
                                                    <a href="{{ asset('storage/'.$photo ) }}">
                                                        <img src="{{ asset('storage/'.$photo ) }}" class="p-1 img-fluid rounded">
                                                    </a>
                                                @empty
                                                @endforelse
                                            </div>
                                        </section>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-center gallery" id="videos-2">
                                <div class="row">
                                    <div class="col-md-8 mr-auto ml-auto">
                                        <section id="photos2">
                                            @foreach ( $videos_unique as $key => $video )
                                                <div style="display:none;" id="video{{$key}}">
                                                    <video class="lg-video-object lg-html5" controls preload="none">
                                                        <source src="{{ asset('storage/'.$video.'.mp4' ) }}" type="video/mp4">
                                                    </video>
                                                </div>
                                            @endforeach

                                            <div id="video-gallery">
                                                @foreach ( $videos_unique as $key => $video )
                                                    <a data-poster="{{ asset('storage/'.$video.'.png' ) }}" data-sub-html="" data-html="#video{{$key}}">
                                                        <img src="{{ asset('storage/'.$video.'.png' ) }}" class="p-1 img-fluid rounded">
                                                    </a>
                                                @endforeach
                                            </div>
                                        </section>

                                        <!-- <div class="wrapper">
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
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('academe.academe-cards')
    </div>
@endsection

@push('scripts')
    <script>
        // $('#target-div').load('https://asti.dost.gov.ph #pg-22-2');
        // $('#target-2').load('http://phl-microsat.upd.edu.ph/about .tab-content');

        var mediaElements = $('video#player2');

        for (var i = 0, total = mediaElements.length; i < total; i++) {
            new MediaElementPlayer(mediaElements[i], {
                features: ['prevtrack', 'playpause', 'nexttrack', 'current', 'progress', 'duration', 'volume', 'playlist', 'loop', 'fullscreen']
            });
        }

        $('div.mejs__playlist-selector').removeClass('mejs__playlist-hidden');

        // This is for the sticky sidebar    
        $(".stickyside").stick_in_parent({
            offset_top: 200
        });

        // lightgallery
        $("#lightgallery").lightGallery({
            fullScreen: false,
            download: false,
        });

        // lightgallery
        $("#video-gallery").lightGallery({
            zoom: false,
            fullScreen: false,
            download: false,
        });
    </script>
@endpush
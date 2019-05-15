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
                    <h1 class="page-header-title title">Caraga Health Research and Development Consortium</h1>
                    <h3 class="page-header-title title">CHRDC</h3>
                    <img
                        class="pl-3"
                        src="{{ asset('storage/gallery/health/chrdc/CHRDC QR Code.png') }}" 
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
                                       poster="{{ asset('storage/gallery/health/chrdc/video/Knowledge vs. Schistosomiasis CSU Dr. Jumawan research output.png') }}"
                                       style="height: 100%;">

                                    <source src="{{ asset('storage/gallery/health/chrdc/video/Knowledge vs. Schistosomiasis CSU Dr. Jumawan research output.mp4') }}" data-playlist-thumbnail="{{ asset('storage/gallery/health/chrdc/video/Knowledge vs. Schistosomiasis CSU Dr. Jumawan research output.png') }}"
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
                        <div class="alert alert-success">
                            <div class="container">
                                <h2 class="title text-white">Caraga Health Research and Development Consortium</h2>
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
                                        <h3 class="title">About CHRDC</h3>

                                        <img class="pl-3" src="{{ asset('storage/gallery/health/chrdc/CHRDC Logo.png') }}" width="250" >

                                        <h3>The promotion and utilization of research outputs became the mantra of Caraga Health Research and Development Consortium (CHRDC)—the regional research consortium dedicated to improve the health conditions of Caraganons through health research and development—after conducting series of activities aimed at disseminating research outputs to communities in 2017.</h3>

                                        <h3>On its 9th year, CHRDC’s journey on achieving a dynamic health research community in Caraga has taken greater strides through its closer collaboration with stakeholders, strengthened mentorship for researchers, and heightened dissemination of research outputs through educational campaigns.</h3>

                                        <h3>The year has paved way for the expansion of health research areas, following the National Unified Health Research Agenda and the Regional Unified Health Research Agenda. Recognizing selected scientifically-proven health practices of ethnic tribes and minority groups, CHRDC opened its research on Traditional Knowledge (TK) on Health of Indigenous Peoples.</h3>

                                        <h3>In 2017, a total of six TK health researches from various state universities and colleges were approved for funding. The researches will cover the documentation on the TK on health practices of tribes and cultural groups in Caraga like the Higaonon, Kamayo, Manobo, Surigaonon and Butuanon. Prior to the approval, CHRDC, together with the Philippine Council for Health Research and Development, organized a research proposal development workshop where the researchers were guided by Dr. Isidro Sia—professor from the University of the Philippines—on framing research questions and drafting research proposals.</h3>

                                        <h3>The consortium conducted its first Health Education Awareness Forum on disseminating the important research findings on Schistosomiasis. The activity aimed at raising awareness on Schistosomiasis among target participants residing near the Lake Mainit.</h3>

                                        <h3>During the activity, Dr. Joycelyn Jumawan presented her study entitled, “A Gastropod Survey Geographic Distribution of Snail Vectors of Schistosomiasis in Lake Mainit, Philippines” where she disclosed that snail vectors of Schistosomiasis—Ampullaria luzonica, Radix Rubiginosa, Thiara Scabra—are not carriers of Schistosomiasis and are mostly found in rice fields, creeks and canals, with higher infection rate observed in the rice fields. She added that the three snail species to be the only vectors of Schistosomiasis in Lake Mainit are the Apple Snail (Ampullaria luzonica), Ear snails (Radix rubiginosa), and Pagoda Tiara (Thiara scabra).</h3>
                                        
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

        @include('health.health-cards')
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
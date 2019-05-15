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
                    <h1 class="page-header-title title">Philippine Atmospheric, Geophysical and Astronomical Services Administration</h1>
                    <h3 class="page-header-title title">PAGASA</h3> 
                    <img
                        class="pl-3"
                        src="{{ asset('storage/gallery/drrm/pagasa/PAGASA New Website QR Code.png') }}" 
                        width="120" >
                    <img
                        class="pl-3"
                        src="{{ asset('storage/gallery/drrm/pagasa/PAGASA QR Code.png') }}" 
                        width="120" >
                    <img
                        class="pl-3"
                        src="{{ asset('storage/gallery/drrm/pagasa/RED Book QR Code.png') }}" 
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
                                       poster="{{ asset('storage/gallery/drrm/pagasa/video/PAGASA Institutional Video (2018).png') }}"
                                       style="width: 100%; height: 100%">

                                    <source src="{{ asset('storage/gallery/drrm/pagasa/video/PAGASA Institutional Video (2018).mp4') }}" data-playlist-thumbnail="{{ asset('storage/gallery/drrm/pagasa/video/PAGASA Institutional Video (2018).png') }}"
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
                        <div class="alert alert-warning">
                            <div class="container">
                                <h2 class="title text-white">Philippine Atmospheric, Geophysical and Astronomical Services Administration</h2>
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
                                        <h3 class="title">About PAGASA</h3>
                                        
                                        <img class="pl-3" src="{{ asset('storage/gallery/drrm/dews/PAGASA-Philippine_Atmospheric_Geophysical_and_Astronomical_Services_Administration logo.png') }}" width="150" >

                                        <br>

                                        <h3>The Philippine Atmospheric, Geophysical and Astronomical Services Administration or PAGASA, which also is a tagalog word that means “Hope”, is a DOST agency mandated to weather forecasts and tropical cyclone warnings, flood bulletins and advisories, hydrological, climatological and farm weather forecasts. Beyond that, PAGASA provides information for the protection against natural calamities, ensures the safety, well-being and economic security of all the people.</h3>

                                        <h3>Browse here some PAGASA information, communication and education materials on things you need to know about typhoon, El Niño, flood, and La Niña. Make sure you and your family are safe always.</h3>

                                        <br>
                                        <h3 class="title">More on DOST-PAGASA</h3>
                                        <iframe src="http://bagong.pagasa.dost.gov.ph/" id="target-div" frameborder="0" width="100%" height="980px"></iframe>

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
    <script>
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
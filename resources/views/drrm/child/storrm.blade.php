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
                    <h1 class="page-header-title title">Science and Technology Operations for Risk Reduction and Management</h1>
                    <h3 class="page-header-title title">STORRM</h3>
                </div>
                <div class="col-md-8 mr-auto ">
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
                                <h2 class="title text-white">Science and Technology Operations for Risk Reduction and Management</h2>
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
                                        <h3 class="title">About STORRM</h3>
                                        
                                        <img class="pl-3" src="{{ asset('storage/gallery/drrm/storrm/STORRM Logo.jpg') }}" width="150" >

                                        <br>

                                        <h3>The birth of project STORRM was mainly due to the need to bridge between the science community and the climate-affected communities, communicating R&D outputs on disaster research to local DRRMOs and the vulnerable population.</h3>

                                        <h3><b class="font-bold">Science and Technology Operations for Risk Reduction and Management</b>, or Project STORRM, aims to mitigate and reduce the adverse impacts of disasters and develop disaster resilient communities in the most vulnerable cities and municipalities in Caraga Region.</h3>

                                        <h3>The first phase of the project—the establishment of Science and Technology Operationalized Risk Reduction and Management (STORRM) Centers—was initiated in 2017 where STORRM Centers were put up in the Provincial, Municipal and City Disaster Risk Reduction and Management Offices.</h3>

                                        <h3>The STORRM Centers are equipped with servers used for localized weather forecasting and early warning information dissemination. It contains the IT systems for DRRM, developed by DOST—the LGUIDS and Flood EVIDens. The STORRM Centers are also provided with IEC materials on Disaster Preparedness such as brochures, flyers and the DOST RED Book or Reference for Emergencies and Disasters developed by STII, PAGASA and PhiVOLCS.</h3>

                                        <h3>In a span of months, the STORRM centers became very beneficial to the MDRRMOs during their preparations for Low Pressure Areas and Typhoons hitting the region in 2017 such as Typhoon Vinta and Typhoon Agaton. The Early Warning has become more efficient to reach vulnerable communities and Weather forecasting to be area-specific, thereby enhancing the DRRMO’s prevention and mitigation measures, and preparedness.</h3>

                                        <h3>
                                            STORRM Centers are established in 11 Local Government Units:
                                            <ul>
                                                <li>Agusan del Norte</li>
                                                <li>Agusan del Sur</li>
                                                <li>Surigao del Norte</li>
                                                <li>Surigao del Sur</li>
                                                <li>Province of Dinagat Islands</li>
                                                <li>Butuan City</li>
                                                <li>Cabadbaran City</li>
                                                <li>Bayugan City</li>
                                                <li>Bislig City</li>
                                                <li>Surigao City</li>
                                                <li>Municipality of Jabonga</li>
                                            </ul>
                                        </h3>
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
                                                @forelse ( $videos_unique as $key => $video )
                                                    <a data-poster="{{ asset('storage/'.$video.'.png' ) }}" data-sub-html="" data-html="#video{{$key}}">
                                                        <img src="{{ asset('storage/'.$video.'.png' ) }}" class="p-1 img-fluid rounded">
                                                    </a>
                                                @empty
                                                    No videos to show.
                                                @endforelse
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
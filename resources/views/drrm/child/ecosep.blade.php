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
                    <h1 class="page-header-title title">Eco-friendly Septic Tank System</h1>
                    <h3 class="page-header-title title">ECOSEP</h3> 
                </div>
                <div class="col-md-8 mr-auto ">
                    <div class="row">
                        <div class="col-md-12 text-center">
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
                                <h2 class="title text-white">Eco-friendly Septic Tank System</h2>
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
                                    <a class="nav-link" href="#brochure-2" role="tab" data-toggle="tab" aria-selected="false">
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
                                        <h3 class="title">About ECOSEP</h3>

                                        <h3>How will Science and Technology contribute to the rising issue on water contamination in the popular beach destinations in the Philippines? The answer is through the <b class="font-bold">Eco-friendly Septic Tank System (ECOSEP)</b>, a technology on reducing wastewater contamination, invented by <b class="font-bold">Dr. Merlinda Palencia</b> of Adamson University, funded by DOST.</h3>

                                        <h3>Through the partnership with the <b class="font-bold">PCIEERD</b> and Dr. Merlinda Palencia, DOST Caraga was able to push through its project on the Eco-sep application—Field Testing of the Eco-friendly Septic Tank System (ECOSEP) for the Tourism Sector (Project FRESH)—with Siargao Island as its first site in the entire country.</h3>

                                        <h3>The <b class="font-bold">Project FRESH</b> aims to find out the effectiveness of using a septic system comprised of a septic tank, use of organominerals and drain field in order tor educe the bacterial load of the effluent and thus prevent contamination of polluiton of the pristine waters of the island. The Eco-friendly Septic Tank System works by reducing the bacterial load, Biological Oxygen Demand turbidity of liquid waste discharged into the sea. The project has three main pilot sites: General Luna National High School, General Luna Public Market and Traveler’s Beach Resort.</h3>

                                        <h3>Following the installation of the septic system in the three pilot sites, Project FRESH was then officially launched on September 23, 2017 in General Luna, Siargao Island where key stakeholders from the local government units, resort owners, environmental volunteer groups, project partners and other national government agencies expressed their full support of the project. Representatives from other regional DOST offices were also present to observe the pilot project.</h3>

                                        <h3>On December 2017, the research results of the project were completed and presented to resort owners, government stakeholders and volunteer groups to encourage the promotion and adoption in the technology in their respective establishments. As seen from the results presented by Dr. Merlinda Palencia, there was a significant decrease of bacterial load in the wastewater inside the eco-sep tank system. The activity gained a positive response when resort owners, tourist associations and LGUs expressed interest in the adoption of technology to protect the environment of Siargao.</h3>

                                        <h3>On its next phase, project FRESH will focus on the promotion of the technology to establishments in Siargao. A communication campaign assessment was also conducted to gather initial information from participants on how to effectively strategize the Information, Education and Communication Campaign of the technology. Together with the support of the key stakeholders in Siargao, the Department has high hopes in the effective adoption of the technology from the majority of Siargao’s establishments.</h3>

                                        <h3>The project will also focus its first adoption in one of the prime tourist spot in Siargao—the Sugba Lagoon—located in Del Carmen, Siargao island, Surigao del Norte through the partnership with LGU del Carmen.</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane text-center gallery" id="brochure-2">
                                <div class="row">
                                    <div class="col-md-9 ml-auto mr-auto">
                                        <section id="photos">
                                            <div id="lightgallery">
                                                @forelse ( $brochures as $brochure )
                                                    <a href="{{ asset('storage/'.$brochure ) }}">
                                                        <img src="{{ asset('storage/'.$brochure ) }}" class="p-1 img-fluid rounded">
                                                    </a>
                                                @empty
                                                    no photos to show.
                                                @endforelse
                                            </div>
                                        </section>
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
                                                    no photos to show.
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
                                                    no videos to show.
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
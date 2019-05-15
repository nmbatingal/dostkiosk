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
                    <h1 class="page-header-title title">Consultancy Program</h1>
                    <h3 class="page-header-title title">Consultancy</h3>
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
                                       poster="{{ asset('storage/gallery/msme/consultancy/video/One Expert-Filipino S&T Experts for you.png') }}"
                                       style="width: 100%;">

                                    <source src="{{ asset('storage/gallery/msme/consultancy/video/One Expert-Filipino S&T Experts for you.mp4') }}" data-playlist-thumbnail="{{ asset('storage/gallery/msme/consultancy/video/One Expert-Filipino S&T Experts for you.png') }}"
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
                                <h2 class="title text-white">Consultancy Program</h2>
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
                                        <h3 class="title">About Consultancy Program</h3>

                                        <h3>The consultancy program comes in five different components—the Manufacturing Productivity Extension (MPEX), Consultancy for Agriculture Productivity Enhancement (CAPE), Cleaner Production Technology (CPT), Energy Audit (EA) and Food Safety (FS).</h3>

                                        <h3>Micro, Small and Medium Enterprises in the manufacturing sector are the beneficiaries of the <b class="font-bold">Manufacturing and Productivity Extension Program (MPEX)</b>. The MSMEs undergoing through the consultancy are given with recommendations by industry experts and productivity specialists on improvement of the overall productivity of the operations. The MSMEs go through extensive and hands-on assessment of every aspect of its operations and are expected to apply the recommendations provided by the experts. In a span of three months, notable improvements can be observed through its application—improved products and services, reduced operational expenses, more productive and safer workplaces and developed appropriately-skilled manpower in its operations.</h3>

                                        <h3>The Consultancy on Agricultural Productivity Enhancement (CAPE) program is designed for our MSMEs in the Agriculture and Aquatic sectors to improve their farm management strategies in achieving high productivity. Aside from providing recommendations, consultants from this sector introduce the viable agri or aqua technologies appropriate for their operations. Through this program, farmers and fisherfolks in Caraga do not only enhance their farming and fishing skills, they can also be successful entrepreneurs. In 2017, DOST Caraga had a total of 15 clients for the Consultancy on Agricultural Productivity Enhancement Program.</h3>

                                        <h3>The <b class="font-bold">Cleaner Production Technology (CPT)</b> introduces strategies that increase efficiency and productivity while reducing waste in the production processes of MSMEs. This covers improved product life, reduction on operating costs, improved worker health and safety, improved corporate image and competitiveness. There were 12 clients of CPT from Caraga last 2017.</h3>

                                        <h3><b class="font-bold">Energy audit (EA)</b> assesses the MSME’s energy utilization to reduce energy costs and provide alternative measures to improve energy efficiency. Energy Audit interlocks with Cleaner Production Technology as it assesses waste sources and causes prior to providing the appropriate Cleaner Production options for the enterprise. DOST Caraga served EA consultancy to 12 firms in 2017.</h3>


                                        <h3>As an advocate of <b class="font-bold">food safety</b>, the department commits itself to assuring safe and quality food products, responsible enterprise image and consumer protection from food-borne illnesses of the products of MSMEs from the food industry. Through our pool of experts from the Caraga Food Safety Team, the department provides consultancies and trainings on Food Safety Awareness, Good Manufacturing Practices, Hazard Analysis of Critical Control Points (HACCP), ISO 22000 Food Safety Management System, and conservation of high value products.</h3>

                                        <h3>Following the partnership with Winrock International-Philippine Cold Chain Project for Food Safety Campaign in 2016, the department has been continuously conducting Food Safety Awareness Trainings and Training of Trainers to different sectors in the region. In 2017, the department has conducted initial Training of Trainers to the first batch of LGUs from the different provinces of Caraga. The partnership with Winrock International also made Food Safety Awareness for Meat Vendors and Processors possible.  The series of training from the first batch of municipalities gained a positive feedback from the meat vendors and processors, saying that the training enlightened them to change their bad practices in food handling.</h3>

                                        <h3><b class="font-bold">Food Safety</b> does not only concern people engaged in the food industry. Understanding it as a shared responsibility among citizens, the Caraga Food Safety Team and Winrock International also provided Food Safety Awareness Trainings to the general public. The training encouraged teachers and parents to teach children the basics of food safety in their respective homes and schools.</h3>

                                        <h3><b class="font-bold">Technology Trainings</b> are at the core of DOST’s technology transfer and commercialization, assisting hundreds of MSMEs, LGUs, Marginalized Sectors and other beneficiaries on advancing their practical skills and knowledge in the food industry, metals and engineering, agriculture and aquaculture, health and nutrition and furniture. A total of 94 technology trainings to improve MSMEs, LGUs and other stakeholders were conducted in 2017.</h3>
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

        @include('msme.msme-cards')
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
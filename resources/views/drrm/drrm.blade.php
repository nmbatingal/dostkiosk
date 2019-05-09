@extends('layouts.submain')

@section('content')

        <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('assets/img/profile_city.jpg') }}')">
            <div class="container-fluid" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="page-header-title title">Science and Technology Innovation for DRRM and Environment</h1>
                        <h4>The Department of Science and Technology’s commitment to Disaster Risk Reduction and Management (DRRM) is unswerving. We utilize science and technology for disaster risk reduction and protect</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="container">
                <div class="features">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="title">What's on STI for DRRM and Environment?</h2>
                            <div class="row">
                                <div class="col-md-5 mr-auto">
                                    <h5 class="description">We feature here the <b class="font-bold">Eco-friendly Septic Tank (Eco-Sep) Technology</b> which DOST Caraga piloted in Siargao Island to help address the treatment of sewerage and/or wastewater from households, resorts, hotels, and public establishments.</h5>

                                    <h5 class="description">Check out here the <b class="font-bold">Science and Technology Operationalized Risk Reduction and Management (Project STORRM)</b> and the establishment of STORRM Centers in the Provincial, Municipal and City Disaster Risk Reduction and Management Offices in Caraga Region.</h5>

                                    <h5 class="description">Learn here about <b class="font-bold">Advanced Science and Technology Institute (DOST-ASTI)’s</b> project on the Deployment of <b class="font-bold">Early Warning System (DEWS)</b>. The exhibit features the <b class="font-bold">Automated Rain Gauges (ARG)</b> and the <b class="font-bold">Automated Water Level Monitoring System (AWLMS)</b>. Do you know about the Philippine’s microsatellite and cube satellite developed by DOST-ASTI? Visit their booth and learn about our satellites in the space and prepare to be amazed!</h5>

                                    <h5 class="description">Check out here if your house is located near an active fault using the <b class="font-bold">Faultfinder</b> developed by <b class="font-bold">Philippine Institute of Volcanology and Seismology (PHIVOLCS)</b>. Get some tips here on things to do before, during and after disasters.</h5>
                                </div>
                                <div class="col-md-7">
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('drrm.drrm-cards')
        </div>

@endsection
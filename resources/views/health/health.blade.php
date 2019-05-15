@extends('layouts.submain')

@section('content')

        <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('assets/img/profile_city.jpg') }}')">
            <div class="container-fluid" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="page-header-title title">Science and Technology Innovations for Health</h1>
                        <h4>Are you sure your food is safe? Do you make your health a priority? Our health should always be a priority. In DOST, we use research, science and technology to develop programs and products that can be utilized by common people and help in the policy-making for health programs in the communities.</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="main">
            <div class="container">
                <div class="features">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-12 text-center p-0" style="margin-top: -50px;">
                                    <div class="alert alert-danger">
                                        <div class="container">
                                            <h2 class="title text-white">What's on STI for Health?</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-8 mr-auto ml-auto">
                                            <!-- Carousel Card -->
                                            <div class="card card-raised card-carousel">
                                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                                                    
                                                    <ol class="carousel-indicators">
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                                    </ol>

                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/health/FEIGS Cover Photo.JPG') }}" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/health/Food Safety Cover Photo.JPG') }}" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/health/health.jpg') }}" alt="Third slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/health/NICE 2018 2.JPG') }}" alt="Fourth slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/health/PCHRD Cover Photo.jpg') }}" alt="Fifth slide">
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

                                    <h3>Are you sure your food is safe? Do you make your health a priority? Our health should always be a priority. In DOST, we use research, science and technology to develop programs and products that can be utilized by common people and help in the policy-making for health programs in the communities.</h3>

                                    <h3>You can browse here some reading materials on the important and basic points of Food Safety. Learn about food contamination, hand washing, personal hygiene, good manufacturing practices, and others brought by the Caraga Food Safety Team.</h3>

                                    <h3>Check out the research outputs of the Philippine Council for Health Research and Development (PCHRD) and Caraga Health Research and Development Consortium (CHRDC). Also, learn here how to apply for health research grants.</h3>

                                    <h3>Check out the health inventions of the 2017 Regional Invention Contest and Exhibits (RICE) winners and 2018 National Invention Contest and Exhibits (NICE) finalists - Aurora A. El-Estwani and Mary Grace A. El-Estwani from Cabadbaran City, Agusan del Norte.</h3>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('health.health-cards')
        </div>

@endsection
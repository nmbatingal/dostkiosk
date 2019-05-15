@extends('layouts.submain')

@section('content')

        <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('assets/img/profile_city.jpg') }}')">
            <div class="container-fluid" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="page-header-title title">Science and Technology Innovations for Youth and Academe</h1>
                        <h4>Since 1994, the DOST Scholarship continues to assist hundreds of talented and deserving students in pursuing careers on Science, Technology and Engineering and eventually increase the number of S&T human resources in the region.</h4>
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
                                    <div class="alert alert-info">
                                        <div class="container">
                                            <h2 class="title text-white">What's on STI for Youth and Academe?</h2>
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
                                                    </ol>

                                                    <div class="carousel-inner">
                                                        <div class="carousel-item active">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/academe/academe-01.jpg') }}" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/academe/scholars.jpg') }}" alt="Second slide">
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

                                    <h3>Since 1994, the DOST Scholarship continues to assist hundreds of talented and deserving students in pursuing careers on Science, Technology and Engineering and eventually increase the number of S&T human resources in the region.</h3>

                                    <h3>In 2017, there were a total of 178 students from colleges and universities who are currently under the Junior Level Science Scholarship (JLSS) Program. These students come from the different provinces in the region with scholars from Caraga State University, Father Saturnino Urios University, Philippine Normal University – Mindanao, Surigao del Sur State University, Surigao State College of Technology, Saint Paul University – Surigao, and Agusan del Sur State College of Agriculture and Technology.</h3>

                                    <h3>Check out here the DOST scholarship programs for high school, undergraduate and graduate studies. Learn how to apply or start your application here!</h3>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('academe.academe-cards')
        </div>

@endsection
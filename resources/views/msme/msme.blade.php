@extends('layouts.submain')

@section('content')

        <div class="page-header header-filter" data-parallax="true" style="background-image: url('{{ asset('assets/img/profile_city.jpg') }}')">
            <div class="container-fluid" style="margin-top: 100px;">
                <div class="row">
                    <div class="col-md-5">
                        <h1 class="page-header-title title">Science and Technology Innovations for Community and MSMEs</h1>
                        <h4>The Department of Science and Technology features the technology interventions for MSMEs under the <b class="font-bold">Small Enterprise Technology Upgrading Program or SETUP</b>. Watch the success stories of our best SETUP Adoptors in Caraga. Check out also the best technologies adopted by MSMEs nationwide. Know how to avail of SETUP here.</h4>
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
                                    <div class="alert alert-success">
                                        <div class="container">
                                            <h2 class="title text-white">What's on STI for Community and MSMEs?</h2>
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
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/msme/msme-01.JPG') }}" alt="First slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/msme/msme-02.JPG') }}" alt="Second slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/msme/msme-03.JPG') }}" alt="Third slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/msme/msme-04.JPG') }}" alt="Fourth slide">
                                                        </div>
                                                        <div class="carousel-item">
                                                            <img class="d-block w-100" src="{{ asset('storage/gallery/msme/msme-05.JPG') }}" alt="Fifth slide">
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

                                    <h3>Check out the following DOST technologies and services that can be helpful to you, the communities, and the micro, small and medium enterprises (MSMEs).</h3>

	                                <h3>The Department of Science and Technology features the technology interventions for MSMEs under the <b class="font-bold">Small Enterprise Technology Upgrading Program or SETUP</b>. Watch the success stories of our best SETUP Adoptors in Caraga. Check out also the best technologies adopted by MSMEs nationwide. Know how to avail of SETUP here.</h3>

	                                <h3>The <b class="font-bold">Community Empowerment thru Science and Technology or CEST</b> gives opportunities to poverty stricken communities to uplift their way of life in terms of disaster risk reduction and management, climate change adaptation, education, health and nutrition, water and sanitation, and livelihood. Hear the stories of our assisted communities and watch how water hyacinth slippers and handicrafts are done by the Jabonga Women’s Association.</h3>


	                                <h3>Need technical advice from experts? DOST features experts and consultants from <b class="font-bold">One Expert and Consultancy program</b> that help individuals and industries step up their research and business operations. Avail of DOST trainings and fora for metals and engineering, furniture and handicrafts, agriculture and aquatic resources, and food safety.</h3>

	                                <h3>We are also joined by DOST <b class="font-bold">research and development institutes (RDIs)</b> from Manila and Los Baños-the Industrial Technology Development Institute (DOST-ITDI), Food and Nutrition Research Institute (DOST-FNRI), Metals Industry Research Development Council (DOST-MIRDC), Forest Products Research and Development Institute (DOST-FPRDI), and the Philippine Council for Agriculture, Aquatic and Natural Resources Research and Development (DOST-PCAARRD). Watch and read about the featured technologies here.</h3>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('msme.msme-cards')
        </div>

@endsection
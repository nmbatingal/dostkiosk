<div class="section section-tabs text-center p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="title text-info">More on STI for Youth and Academe</h2>
            </div>
        </div>
        <div class="swiper-container mt-5">
            <div class="swiper-wrapper">

                <!-- PISAY -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-blog">
                                <a href="{{ route('academe.pshs') }}">
                                    <div class="card-header card-header-image">
                                        <img class="img" height="300px" src="{{ asset('storage/gallery/academe/pshs/video/DOSTv Episode 492 - Sinesiyensya, Pisay.png') }}">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Department of Science and Technology-Philippine Science High School
                                        </h4>
                                        <h5 class="text-success pb-2"><strong>DOST-PSHS</strong></h5>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEI -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-blog">
                                <a href="{{ route('academe.sei') }}">
                                    <div class="card-header card-header-image">
                                        <img class="img" height="300px" src="{{ asset('storage/gallery/academe/sei/dost.png') }}">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Department of Science and Technology-Science Education Institute
                                        </h4>
                                        <h5 class="text-success pb-2"><strong>DOST-SEI</strong></h5>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SEI -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-blog">
                                <a href="{{ route('academe.starbooks') }}">
                                    <div class="card-header card-header-image">
                                        <img class="img" height="300px" src="{{ asset('storage/gallery/academe/starbooks/starbooks logo.png') }}">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">
                                            Science and Technology Academic Research-Based Openly-Operated Kiosks
                                        </h4>
                                        <h5 class="text-success pb-2"><strong>STARBOOKS</strong></h5>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var swiperFront = new Swiper('.swiper-container', {
            slidesPerView: 4,
            spaceBetween: 30,
            effect: 'slides',
            speed: 5000,
            loop: true,
            grabCursor: true,
            autoplay: {
                delay: 5000, 
                disableOnInteraction: false,
            },
            freeMode: true,
        });
    </script>
@endpush
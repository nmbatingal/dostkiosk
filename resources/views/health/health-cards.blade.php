<div id="more-sti" class="section section-tabs text-center p-0">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
                <h2 class="title text-danger">More on STI for Health</h2>
            </div>
        </div>
        <div class="swiper-container mt-5">
            <div class="swiper-wrapper">

                <!-- CHRDC -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-blog">
                                <a href="{{ route('health.chrdc') }}">
                                    <div class="card-header card-header-image">
                                        <img class="img" height="300px" src="{{ asset('storage/gallery/health/chrdc/CHRDC Cover Photo.JPG') }}">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Caraga Health Research and Development Consortium</h4>
                                        <h5 class="text-danger pb-2"><strong>CHRDC</strong></h5>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FEIGS -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-blog">
                                <a href="{{ route('health.feigs') }}">
                                    <div class="card-header card-header-image">
                                        <img class="img" height="300px" src="{{ asset('storage/gallery/health/feigs/FEIGS Cover Photo.JPG') }}">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Food Establishment Inspection and Grading System</h4>
                                        <h5 class="text-danger pb-2"><strong>FEIGS</strong></h5>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Food Safety Campaign -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-blog">
                                <a href="{{ route('health.foodsafety') }}">
                                    <div class="card-header card-header-image">
                                        <img class="img" height="300px" src="{{ asset('storage/gallery/health/foodsafety/Food Safety Cover Photo.JPG') }}">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Food Safety Campaign</h4>
                                        <h5 class="text-danger pb-2"><strong>Food Safety Campaign</strong></h5>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- PCHRD -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-blog">
                                <a href="{{ route('health.pchrd') }}">
                                    <div class="card-header card-header-image">
                                        <img class="img" height="300px" src="{{ asset('storage/gallery/health/pchrd/PCHRD Cover Photo.jpg') }}">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Department of Science and Technology-Philippine Council for Health Research and Development</h4>
                                        <h5 class="text-danger pb-2"><strong>DOST-PCHRD</strong></h5>
                                    </div>
                                    <div class="card-footer">
                                        <br>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- RICE -->
                <div class="swiper-slide">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <div class="card card-blog">
                                <a href="{{ route('health.rice') }}">
                                    <div class="card-header card-header-image">
                                        <img class="img" height="300px" src="{{ asset('storage/gallery/health/rice/NICE 2018 2.JPG') }}">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Regional Invention Contest and Exhibits</h4>
                                        <h5 class="text-danger pb-2"><strong>RICE</strong></h5>
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
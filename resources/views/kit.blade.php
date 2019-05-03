<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <!-- <link href="{{ asset('node_modules/swiper/css/swiper.min.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .swiper-container {
            width: 100%;
            height: 100%;
        }

    .swiper-slide {
      text-align: center;
      /*font-size: 18px;*/
      background: #fff;
      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
      width: 60%;
    }
    </style>
</head>
<body>

    <div class="row">
        <div class="col-md-12">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!--Grid column-->

                        <div class="card card-cascade narrower">

                            <!-- Card image -->
                            <div class="view view-cascade">
                                <img class="card-img-top" src="https://mdbootstrap.com/img/Photos/Lightbox/Thumbnail/img%20(147).jpg"
                                    alt="Card image cap">
                                <a>
                                    <div class="mask img-gradient"></div>
                                </a>
                            </div>

                            <!-- Card content -->
                            <div class="card-body card-body-cascade">

                                <!-- Label -->
                                <h5 class="pink-text pb-2 pt-1"><i class="fa fa-cutlery"></i> Culinary</h5>
                                <!-- Title -->
                                <h4 class="font-weight-bold card-title">Cheat day inspirations</h4>
                                <!-- Text -->
                                <p class="card-text">Ut enim ad minima veniam, quis nostrum exercitationem ullam
                                    corporis suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>
                                <!-- Button -->
                                <a class="btn btn-unique">Button</a>

                            </div>
                        </div>

                        <!--Grid column-->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('node_modules/swiper/js/swiper.min.js') }}"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
              slidesPerView: 4,
              centeredSlides: true,
              spaceBetween: 10,
              pagination: {
                el: '.swiper-pagination',
                clickable: true,
              },
            });
    </script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('sass/custom.scss') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"></script>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner carousel-background">
        <div class="wrapper">
            <div class="carousel-content">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active carousel-indicators-item"
                            aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            class="carousel-indicators-item"
                            aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            class="carousel-indicators-item"
                            aria-label="Slide 3"></button>
                </div>
                <div class="carousel-item active">
                    <div class="item-info row">
                        <div class="info-text-block col-7">
                            <div class="info-text-item">
                                <h1 class="font-size-64 animated fadeInUp" data-scs-animation-in="fadeInUp" style="opacity: 1;">
                                    THE NEW
                                    <span class="font-size-55">STANDARD</span>
                                </h1>
                                <h6 class="font-size-15 animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200" style="animation-delay: 200ms; opacity: 1;">
                                    UNDER FAVORABLE SMARTWATCHES
                                </h6>
                                <div class="carousel-price animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300" style="animation-delay: 300ms; opacity: 1;">
                                    <span class="font-size-13">FROM</span>
                                    <div class="font-size-50"><sup>$</sup>749<sup>99</sup></div>
                                </div>
                                <button class="buying-btn animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400" tabindex="0" style="animation-delay: 400ms; opacity: 1;">
                                    Start Buying
                                </button>
                            </div>
                        </div>
                        <div class="col-5 animated zoomIn" data-scs-animation-in="zoomIn" data-scs-animation-delay="500" style="animation-delay: 500ms; opacity: 1">
                            <img src={{asset('../../../images/img1.png')}} class="block" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="item-info row">
                        <div class="info-text-block col-7">
                            <div class="info-text-item">
                                <h1 class="font-size-64 animated fadeInUp" data-scs-animation-in="fadeInUp" style="opacity: 1;">
                                    THE NEW
                                    <span class="font-size-55">STANDARD</span>
                                </h1>
                                <h6 class="font-size-15 animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200" style="animation-delay: 200ms; opacity: 1;">
                                    UNDER FAVORABLE SMARTWATCHES
                                </h6>
                                <div class="carousel-price animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300" style="animation-delay: 300ms; opacity: 1;">
                                    <span class="font-size-13">FROM</span>
                                    <div class="font-size-50"><sup>$</sup>749<sup>99</sup></div>
                                </div>
                                <button class="buying-btn animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400" tabindex="0" style="animation-delay: 400ms; opacity: 1;">
                                    Start Buying
                                </button>
                            </div>
                        </div>
                        <div class="col-5 animated zoomIn" data-scs-animation-in="zoomIn" data-scs-animation-delay="500" style="animation-delay: 500ms; opacity: 1">
                            <img src={{asset('../../../images/img2.png')}} class="block" alt="...">
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="item-info row">
                        <div class="info-text-block col-7">
                            <div class="info-text-item">
                                <h1 class="font-size-64 animated fadeInUp" data-scs-animation-in="fadeInUp" style="opacity: 1;">
                                    THE NEW
                                    <span class="font-size-55">STANDARD</span>
                                </h1>
                                <h6 class="font-size-15 animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="200" style="animation-delay: 200ms; opacity: 1;">
                                    UNDER FAVORABLE SMARTWATCHES
                                </h6>
                                <div class="carousel-price animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="300" style="animation-delay: 300ms; opacity: 1;">
                                    <span class="font-size-13">FROM</span>
                                    <div class="font-size-50"><sup>$</sup>749<sup>99</sup></div>
                                </div>
                                <button class="buying-btn animated fadeInUp" data-scs-animation-in="fadeInUp" data-scs-animation-delay="400" tabindex="0" style="animation-delay: 400ms; opacity: 1;">
                                    Start Buying
                                </button>
                            </div>
                        </div>
                        <div class="col-5 animated zoomIn" data-scs-animation-in="zoomIn" data-scs-animation-delay="500" style="animation-delay: 500ms; opacity: 1">
                            <img src={{asset('../../../images/img3.png')}} class="block" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>



@extends('frontend.master')
@section('content')
<div class="slider-area mb-30">
    <!--=======  slider-wrapper  =======-->

    <div class="lezada-slick-slider lezada-slick-slider--fullscreen" data-slick-setting='{
        "slidesToShow": 1,
        "slidesToScroll": 1,
        "arrows": true,
        "dots": true,
        "autoplay": false,
        "autoplaySpeed": 5000,
        "speed": 1000,
        "prevArrow": {"buttonClass": "slick-prev", "iconClass": "ti-angle-left" },
        "nextArrow": {"buttonClass": "slick-next", "iconClass": "ti-angle-right" }
    }'>


        <!--=======  single slider  =======-->
        <div class="lezada-single-slider bg-img" data-bg="assets/images/decor-two/slider-1.jpg">
            <div class="container h-100">
                <div class="row text-center justify-content-center align-items-center h-100">
                    <div class="lezada-single-slider__content">
                        <h5 class="subtitle">INDOOR</h5>
                        <h2 class="main-title">UP TO <br> 30% OFF </h2>
                        <a href="shop-left-sidebar.html" class="lezada-button lezada-button--medium">shop now</a>
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of single slider  =======-->

        <!--=======  single slider  =======-->
        <div class="lezada-single-slider bg-img" data-bg="assets/images/decor-two/slider-2.jpg">
            <div class="container h-100">
                <div class="row text-center justify-content-center align-items-center h-100">
                    <div class="lezada-single-slider__content">
                        <h5 class="subtitle subtitle--black">INDOOR</h5>
                        <h2 class="main-title main-title--black">UP TO <br> 30% OFF </h2>
                        <a href="shop-left-sidebar.html" class="lezada-button lezada-button--dark lezada-button--medium">shop
                            now</a>
                    </div>
                </div>
            </div>
        </div>

        <!--=======  End of single slider  =======-->


    </div>

    <!--=======  End of slider-wrapper  =======-->
</div>
	<!--=====  End of slider area  ======-->
@endsection

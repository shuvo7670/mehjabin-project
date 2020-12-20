@extends('frontend.master')
@section('content')
<div class="shop-page-wrapper">

    <!--=======  shop page header  =======-->

    <div class="shop-page-header">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-12 col-lg-7 col-md-10 d-none d-md-block">
                    <h1>Category One</h1>
                </div>

                <div class="col-12 col-lg-5 col-md-2">
                    <!--=======  filter icons  =======-->

                    <div class="filter-icons">
                        <!--=======  grid icons  =======-->

                        <div class="single-icon grid-icons">
                            <a data-target="five-column" href="javascript:void(0)"><i class="ti-layout-grid4-alt"></i></a>
                            <a data-target="four-column" class="active" href="javascript:void(0)"><i
                                    class="ti-layout-grid3-alt"></i></a>
                            <a data-target="three-column" href="javascript:void(0)"><i class="ti-layout-grid2-alt"></i></a>
                            <a data-target="list" href="javascript:void(0)"><i class="ti-view-list"></i></a>
                        </div>

                        <!--=======  End of grid icons  =======-->

                        <!--=======  advance filter icon  =======-->
                        <!--=======  End of advance filter icon  =======-->
                    </div>

                    <!--=======  End of filter icons  =======-->
                </div>

            </div>
        </div>
    </div>

    <!--=======  End of shop page header  =======-->

    <!--=============================================
    =            shop page content         =
    =============================================-->

    <div class="shop-page-content mt-100 mb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2 mb-md-80 mb-sm-80">

                    <div class="row product-isotope shop-product-wrap four-column">
                        <!--=======  single product  =======-->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45 sale">
                            <div class="single-product">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/watch-1-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/watch-1-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">
                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Light Brown Watch</a></h3>
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="price">
                                        <span class="main-price">$130.00</span>
                                    </div>
                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                            <div class="single-product--list">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/watch-1-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/watch-1-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-product__floating-icons">
                                        <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="bottom"><i class="ion-ios-search-strong"></i></a></span>
                                    </div>



                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">

                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Light Brown Watch</a></h3>
                                    </div>
                                    <div class="price">
                                        <span class="main-price">$130.00</span>
                                    </div>
                                    <p class="short-desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                                        consequuntur voluptatem ad molestiae. Expedita nesciunt quam totam, sapiente eveniet consectetur
                                        voluptas quas harum impedit quia quibusdam tempora ab facilis. Non assumenda veritatis,
                                    </p>

                                    <a href="#" class="lezada-button lezada-button--medium">ADD TO CART</a>

                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                        </div>
                        <!--=======  End of single product  =======-->

                        <!--=======  single product  =======-->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45 hot">
                            <div class="single-product">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/watch-2-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/watch-2-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">
                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Dark Gray Watch</a></h3>
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$260.00</span>
                                        <span class="discounted-price">$230.00</span>
                                    </div>
                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                            <div class="single-product--list">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/watch-2-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/watch-2-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>

                                    <div class="single-product__floating-icons">
                                        <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="bottom"><i class="ion-ios-search-strong"></i></a></span>
                                    </div>



                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">

                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Dark Gray Watch</a></h3>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$260.00</span>
                                        <span class="discounted-price">$230.00</span>
                                    </div>
                                    <p class="short-desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                                        consequuntur voluptatem ad molestiae. Expedita nesciunt quam totam, sapiente eveniet consectetur
                                        voluptas quas harum impedit quia quibusdam tempora ab facilis. Non assumenda veritatis,
                                    </p>

                                    <a href="#" class="lezada-button lezada-button--medium">ADD TO CART</a>

                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                        </div>
                        <!--=======  End of single product  =======-->

                        <!--=======  single product  =======-->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45 new">
                            <div class="single-product">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/watch-3-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/watch-3-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">
                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html"> Dark Brown Watch</a></h3>
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$120.00</span>
                                        <span class="discounted-price">$100.00</span>
                                    </div>
                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                            <div class="single-product--list">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/watch-3-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/watch-3-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-product__floating-icons">
                                        <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="bottom"><i class="ion-ios-search-strong"></i></a></span>
                                    </div>



                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">

                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Dark Brown Watch</a></h3>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$120.00</span>
                                        <span class="discounted-price">$100.00</span>
                                    </div>
                                    <p class="short-desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                                        consequuntur voluptatem ad molestiae. Expedita nesciunt quam totam, sapiente eveniet consectetur
                                        voluptas quas harum impedit quia quibusdam tempora ab facilis. Non assumenda veritatis,
                                    </p>

                                    <a href="#" class="lezada-button lezada-button--medium">ADD TO CART</a>

                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                        </div>
                        <!--=======  End of single product  =======-->

                        <!--=======  single product  =======-->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45 sale">
                            <div class="single-product">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/cosmetics-1-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/cosmetics-1-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">
                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Pink Clay Mask</a></h3>
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$100.00</span>
                                        <span class="discounted-price">$80.00</span>
                                    </div>
                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                            <div class="single-product--list">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/cosmetics-1-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/cosmetics-1-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-product__floating-icons">
                                        <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="bottom"><i class="ion-ios-search-strong"></i></a></span>
                                    </div>



                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">

                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Pink Clay Mask</a></h3>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$100.00</span>
                                        <span class="discounted-price">$80.00</span>
                                    </div>
                                    <p class="short-desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                                        consequuntur voluptatem ad molestiae. Expedita nesciunt quam totam, sapiente eveniet consectetur
                                        voluptas quas harum impedit quia quibusdam tempora ab facilis. Non assumenda veritatis,
                                    </p>

                                    <a href="#" class="lezada-button lezada-button--medium">ADD TO CART</a>

                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                        </div>
                        <!--=======  End of single product  =======-->

                        <!--=======  single product  =======-->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45 sale">
                            <div class="single-product">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/furniture-1-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/furniture-1-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">
                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Wooden Round Table</a></h3>
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$400.00</span>
                                        <span class="discounted-price">$380.00</span>
                                    </div>
                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                            <div class="single-product--list">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/furniture-1-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/furniture-1-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-product__floating-icons">
                                        <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="bottom"><i class="ion-ios-search-strong"></i></a></span>
                                    </div>



                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">

                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Wooden Round Table</a></h3>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$400.00</span>
                                        <span class="discounted-price">$380.00</span>
                                    </div>
                                    <p class="short-desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                                        consequuntur voluptatem ad molestiae. Expedita nesciunt quam totam, sapiente eveniet consectetur
                                        voluptas quas harum impedit quia quibusdam tempora ab facilis. Non assumenda veritatis,
                                    </p>

                                    <a href="#" class="lezada-button lezada-button--medium">ADD TO CART</a>

                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                        </div>
                        <!--=======  End of single product  =======-->

                        <!--=======  single product  =======-->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45 new">
                            <div class="single-product">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/furniture-2-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/furniture-2-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">
                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Sofa with Cushion</a></h3>
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="price">
                                        <span class="main-price">$85.00</span>
                                    </div>
                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                            <div class="single-product--list">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/furniture-2-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/furniture-2-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>

                                    <div class="single-product__floating-icons">
                                        <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="bottom"><i class="ion-ios-search-strong"></i></a></span>
                                    </div>



                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">

                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Sofa with Cushion</a></h3>
                                    </div>
                                    <div class="price">
                                        <span class="main-price">$85.00</span>
                                    </div>
                                    <p class="short-desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                                        consequuntur voluptatem ad molestiae. Expedita nesciunt quam totam, sapiente eveniet consectetur
                                        voluptas quas harum impedit quia quibusdam tempora ab facilis. Non assumenda veritatis,
                                    </p>

                                    <a href="#" class="lezada-button lezada-button--medium">ADD TO CART</a>

                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                        </div>
                        <!--=======  End of single product  =======-->

                        <!--=======  single product  =======-->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45 sale">
                            <div class="single-product">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/furniture-3-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/furniture-3-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">
                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Green Coutch</a></h3>
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$360.00</span>
                                        <span class="discounted-price">$300.00</span>
                                    </div>
                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                            <div class="single-product--list">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/furniture-3-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/furniture-3-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                    <div class="single-product__floating-icons">
                                        <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="bottom"><i class="ion-ios-search-strong"></i></a></span>
                                    </div>



                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">

                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Green Coutch</a></h3>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$360.00</span>
                                        <span class="discounted-price">$300.00</span>
                                    </div>
                                    <p class="short-desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                                        consequuntur voluptatem ad molestiae. Expedita nesciunt quam totam, sapiente eveniet consectetur
                                        voluptas quas harum impedit quia quibusdam tempora ab facilis. Non assumenda veritatis,
                                    </p>

                                    <a href="#" class="lezada-button lezada-button--medium">ADD TO CART</a>

                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                        </div>
                        <!--=======  End of single product  =======-->
                        <!--=======  single product  =======-->
                        <div class="col-12 col-lg-3 col-md-6 col-sm-6 mb-45 sale">
                            <div class="single-product">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/cosmetics-1-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/cosmetics-1-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>
                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">
                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Pink Clay Mask</a></h3>
                                        <a href="#">Add to cart</a>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$100.00</span>
                                        <span class="discounted-price">$80.00</span>
                                    </div>
                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                            <div class="single-product--list">
                                <!--=======  single product image  =======-->

                                <div class="single-product__image">
                                    <a class="image-wrap" href="shop-product-basic.html">
                                        <img src="{{asset('frontend/assets/images/products/cosmetics-1-1-600x800.jpg')}}" class="img-fluid" alt="">
                                        <img src="{{asset('frontend/assets/images/products/cosmetics-1-2-600x800.jpg')}}" class="img-fluid" alt="">
                                    </a>

                                    <div class="single-product__floating-icons">
                                        <span class="quickview"><a class="cd-trigger" href="#qv-1" data-tippy="Quick View" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder" data-tippy-placement="bottom"><i class="ion-ios-search-strong"></i></a></span>
                                    </div>



                                </div>

                                <!--=======  End of single product image  =======-->

                                <!--=======  single product content  =======-->

                                <div class="single-product__content">

                                    <div class="title">
                                        <h3> <a href="shop-product-basic.html">Pink Clay Mask</a></h3>
                                    </div>
                                    <div class="price">
                                        <span class="main-price discounted">$100.00</span>
                                        <span class="discounted-price">$80.00</span>
                                    </div>
                                    <p class="short-desc"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laudantium
                                        consequuntur voluptatem ad molestiae. Expedita nesciunt quam totam, sapiente eveniet consectetur
                                        voluptas quas harum impedit quia quibusdam tempora ab facilis. Non assumenda veritatis,
                                    </p>

                                    <a href="#" class="lezada-button lezada-button--medium">ADD TO CART</a>

                                </div>

                                <!--=======  End of single product content  =======-->
                            </div>
                        </div>
                        <!--=======  End of single product  =======-->
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--=====  End of shop page content  ======-->
</div>
@endsection

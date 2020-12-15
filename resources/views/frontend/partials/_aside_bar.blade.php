<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="main-menu">
                <div class="menu-left">
                    <div class="navbar">
                        <a href="javascript:void(0)" onclick="openNav()">
                            <div class="bar-style"><i class="fa fa-bars sidebar-bar" aria-hidden="true"></i>
                            </div>
                        </a>
                        <div id="mySidenav" class="sidenav">
                            <a href="javascript:void(0)" class="sidebar-overlay" onclick="closeNav()"></a>
                            <nav>
                                <div onclick="closeNav()">
                                    <div class="sidebar-back text-left"><i class="fa fa-angle-left pr-2"
                                            aria-hidden="true"></i> Back</div>
                                </div>
                                <ul id="sub-menu" class="sm pixelstrap sm-vertical">
                                    <li><a href="#">watches</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="brand-logo">
                        <a href="index.html"><img src="{{('frontend/')}}/assets/images/icon/logo.png"
                                class="img-fluid blur-up lazyload" alt=""></a>
                    </div>
                </div>
                {{-- Page Start --}}
                <div class="menu-right pull-right">
                    @include('frontend.inc.main-menu')
                    <div>
                        <div class="icon-nav">
                            <ul>
                                <li class="onhover-div mobile-search">
                                    <div><img src="{{('frontend/')}}/assets/images/icon/search.png" onclick="openSearch()"
                                            class="img-fluid blur-up lazyload" alt=""> <i class="ti-search"
                                            onclick="openSearch()"></i></div>
                                    <div id="search-overlay" class="search-overlay">
                                        <div> <span class="closebtn" onclick="closeSearch()"
                                                title="Close Overlay">×</span>
                                            <div class="overlay-content">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-xl-12">
                                                            <form>
                                                                <div class="form-group">
                                                                    <input type="text" class="form-control"
                                                                        id="exampleInputPassword1"
                                                                        placeholder="Search a Product">
                                                                </div>
                                                                <button type="submit" class="btn btn-primary"><i
                                                                        class="fa fa-search"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="onhover-div mobile-cart">
                                    <div><img src="{{('frontend/')}}/assets/images/icon/cart.png"
                                            class="img-fluid blur-up lazyload" alt=""> <i
                                            class="ti-shopping-cart"></i></div>
                                    <ul class="show-div shopping-cart">
                                        <li>
                                            <div class="media">
                                                <a href="#"><img alt="" class="mr-3"
                                                        src="{{('frontend/')}}/assets/images/fashion/product/1.jpg"></a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h4>item nam e cart</h4>
                                                    </a>
                                                    <h4><span>1 x $ 299.00</span></h4>
                                                </div>
                                            </div>
                                            <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                        aria-hidden="true"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <a href="#"><img alt="" class="mr-3"
                                                        src="{{('frontend/')}}/assets/images/fashion/product/2.jpg"></a>
                                                <div class="media-body">
                                                    <a href="#">
                                                        <h4>item name</h4>
                                                    </a>
                                                    <h4><span>1 x $ 299.00</span></h4>
                                                </div>
                                            </div>
                                            <div class="close-circle"><a href="#"><i class="fa fa-times"
                                                        aria-hidden="true"></i></a></div>
                                        </li>
                                        <li>
                                            <div class="total">
                                                <h5>subtotal : <span>$299.00</span></h5>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="buttons"><a href="cart.html" class="view-cart">view
                                                    cart</a> <a href="#" class="checkout">checkout</a></div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

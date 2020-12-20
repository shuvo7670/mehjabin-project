
	<header class="header header-wide-topbar header-sticky">


		<!--=======  header bottom  =======-->

		<div class="header-bottom pt-md-40 pb-md-40 pt-sm-40 pb-sm-40">
			<div class="container wide">


				<!--=======  header bottom container  =======-->

				<div class="header-bottom-container">

					<!--=======  logo with off canvas  =======-->

					<div class="logo-with-offcanvas d-flex">
						<!--=======  logo   =======-->

						<div class="logo">
							<a href="index.html">
								<img src="{{asset('frontend/assets/images/logo.png')}}" class="img-fluid" alt="">
							</a>
						</div>

						<!--=======  End of logo   =======-->
					</div>

					<!--=======  End of logo with off canvas  =======-->

					<!--=======  header bottom navigation  =======-->

					<div class="header-bottom-navigation">
						<div class="site-main-nav d-none d-lg-block">
							<nav class="site-nav center-menu">
								<ul>
									<li><a href="">Home</a>
									</li>
									<li class="menu-item-has-children"><a href="javascript:void(0)">Category</a>
										<ul class="sub-menu single-column-menu">
											<li><a href="{{url('category/product')}}">Category One</a></li>
											<li><a href="about-us-2.html">Category Two</a></li>
											<li><a href="about-us-2.html">Category Three</a></li>
										</ul>
									</li>
									<li><a href="">About Us</a>
									</li>
									<li><a href="/">Contact Us</a>
									</li>
								</ul>
							</nav>
						</div>
					</div>

					<!--=======  End of header bottom navigation  =======-->

					<!--=======  headeer right container  =======-->

					<div class="header-right-container">

						<!--=======  header right icons  =======-->

						<div class="header-right-icons d-flex justify-content-end align-items-center h-100">
							<!--=======  single-icon  =======-->

							<div class="single-icon search">
								<a href="javascript:void(0)" id="search-icon">
									<i class="ion-ios-search-strong"></i>
								</a>
							</div>

							<!--=======  End of single-icon  =======-->
							<!--=======  single-icon  =======-->

							<div class="single-icon cart">
								<a href="javascript:void(0)" id="offcanvas-cart-icon">
									<i class="ion-ios-cart"></i>
									<span class="count">3</span>
								</a>
							</div>
							<!--=======  End of single-icon  =======-->
						</div>
						<!--=======  End of header right icons  =======-->

					</div>

					<!--=======  End of headeer right container  =======-->


				</div>

				<!--=======  End of header bottom container  =======-->

				<!-- Mobile Navigation Start Here -->

				<div class="site-mobile-navigation d-block d-lg-none">
					<div id="dl-menu" class="dl-menuwrapper site-mobile-nav">
						<!--Site Mobile Menu Toggle Start-->
						<button class="dl-trigger hamburger hamburger--spin">
							<span class="hamburger-box">
								<span class="hamburger-inner"></span>
							</span>
						</button>
						<!--Site Mobile Menu Toggle End-->
						<ul class="dl-menu dl-menu-toggle">
							<li><a href="#">Pages</a>
								<ul class="dl-submenu">
									<li><a href="about-us.html">About Us</a></li>
									<li><a href="about-us-2.html">About Us 2</a></li>
									<li><a href="contact-us.html">Contact Us</a></li>
									<li><a href="faq.html">F.A.Q</a></li>
									<li><a href="coming-soon.html">Coming Soon</a></li>
									<li><a href="404.html">404</a></li>
									<li><a href="my-account.html">My account</a></li>
									<li><a href="compare.html">Compare</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>

				<!-- Mobile Navigation End Here -->
			</div>
		</div>

		<!--=======  End of header bottom  =======-->
	</header>

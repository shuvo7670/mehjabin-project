<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>

    @include('frontend.partials._head')
</head>

<body>
    @include('frontend.partials._header')

    @yield('content')

    @include('frontend.partials._footer')

	<!--=============================================
	=            overlay items         =
	=============================================-->

	<!--=======  about overlay  =======-->

    @include('frontend.inc.about-overlay')

	<!--=======  End of about overlay  =======-->

    @include('frontend.inc.cart-overlay')

	<!--=======  search overlay  =======-->

    @include('frontend.inc.search-overlay')

	<!--=======  End of search overlay  =======-->

	<!--=====  End of overlay items  ======-->

    @include('frontend.inc.quick-view')

	<!-- scroll to top  -->
	<a href="#" class="scroll-top"></a>
    <!-- end of scroll to top -->
    @include('frontend.partials._scripts')
</body>
</html>

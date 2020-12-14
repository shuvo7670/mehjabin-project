<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/multikart/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 13 Dec 2020 05:11:26 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="multikart">
    <meta name="keywords" content="multikart">
    <meta name="author" content="multikart">
    <link rel="icon" href="{{('frontend/')}}/assets/images/favicon/1.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{('frontend/')}}/assets/images/favicon/1.png" type="image/x-icon">
    <title>Multikart - Multi-purpopse E-commerce Html Template</title>

    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" type="text/css" href="{{('frontend/')}}/assets/css/fontawesome.css">

    <!--Slick slider css-->
    <link rel="stylesheet" type="text/css" href="{{('frontend/')}}/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="{{('frontend/')}}/assets/css/slick-theme.css">

    <!-- Animate icon -->
    <link rel="stylesheet" type="text/css" href="{{('frontend/')}}/assets/css/animate.css">

    <!-- Themify icon -->
    <link rel="stylesheet" type="text/css" href="{{('frontend/')}}/assets/css/themify-icons.css">

    <!-- Bootstrap css -->
    <link rel="stylesheet" type="text/css" href="{{('frontend/')}}/assets/css/bootstrap.css">

    <!-- Theme css -->
    <link rel="stylesheet" type="text/css" href="{{('frontend/')}}/assets/css/color1.css" media="screen" id="color">


</head>

<body>

    @include('frontend.partials._header')
    @yield('content')

    @include('frontend.partials._footer')
    @include('frontend.inc.theme-settings')

    <!-- tap to top -->
    <div class="tap-top top-cls">
        <div>
            <i class="fa fa-angle-double-up"></i>
        </div>
    </div>
    <!-- tap to top end -->

    @include('frontend.partials._scripts')

</body>
</html>

<!doctype html>
<html lang="zxx">
   <head>
   		 @include('frontend.partials._head')
   </head>
   <body>
      @include('frontend.partials._preloader')
      @include('frontend.partials._header')
      @yield('content')
      @include('frontend.partials._footer')
      @include('frontend.partials._scripts')
   </body>
</html>
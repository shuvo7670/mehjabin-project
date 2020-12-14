<!DOCTYPE html>
<html lang="en">
  <head>
    @include('backend.partials._head')
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    @include('backend.partials._header')
    <!-- Sidebar menu-->
    @include('backend.partials._aside_bar')
    <main class="app-content">
        @yield('content')
        @yield('modals')
    </main>
    @include('backend.partials._scripts')
  </body>
</html>
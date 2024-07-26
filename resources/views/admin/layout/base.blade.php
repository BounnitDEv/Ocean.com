<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>@yield('title','Dashboard - Natural Morocco - Admin')</title>

    <link href="{{ asset('dashboard/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/Ionicons/css/ionicons.css') }}" rel="stylesheet">
    <link href="{{ asset('dashboard/lib/perfect-scrollbar/css/perfect-scrollbar.min.css') }}" rel="stylesheet">
    @stack('styles')
    <!-- Slim CSS -->
    <link rel="stylesheet" href="{{ asset('dashboard/css/slim.css') }}">

  </head>
  <body>

    @include('admin.layout.topbar')

    <div class="slim-body">

        @include('admin.layout.sidebar')

        @yield('content')

        @yield('modal')

    </div><!-- slim-body -->

    <script src="{{ asset('dashboard/lib/jquery/js/jquery.js') }}"></script>
    <script src="{{ asset('dashboard/lib/popper.js/js/popper.js') }}"></script>
    <script src="{{ asset('dashboard/lib/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('dashboard/lib/jquery.cookie/js/jquery.cookie.js') }}"></script>
    <script src="{{ asset('dashboard/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard/lib/moment/js/moment.js') }}"></script>

    @stack('scripts')

    <script src="{{ asset('dashboard/js/slim.js') }}"></script>

    @stack('postscripts')

  </body>
</html>

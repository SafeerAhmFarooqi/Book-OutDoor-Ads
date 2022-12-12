<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('head')
        @include('metronic-theme.head')
    @show
</head>
<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled toolbar-fixed aside-enabled aside-fixed" style="--kt-toolbar-height:55px;--kt-toolbar-height-tablet-and-mobile:55px">
    @yield('topbar')
    @yield('content')
    @yield('footer')
    @yield('modals')                       
    @section('scripts')
         @include('metronic-theme.scripts')
    @show
    @include('google.google-translate')
</body>
</html>

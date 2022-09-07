<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('head')
    @include('led-theme.head')
    @show
    @livewireStyles
</head>


   <body id="myPage">

    @section('topbar')
    @include('led-theme.topbar')
    @show


    @yield('content')

    @section('footer')
        @include('led-theme.footer')
    @show


       @include('led-theme.scripts')
     @show
     @livewireScripts
    </body>
</html>
    
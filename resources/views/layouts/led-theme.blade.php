<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('head')
        @include('led-theme.head')
    @show
    @livewireStyles
</head>
<body>
    
<div class="site-wrap">
  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>
    @section('topbar')
    @include('led-theme.topbar')
@show

@yield('content')
                           
@section('footer')
    @include('led-theme.footer')
@show

</div>
    

                
@yield('modals')
                

                           
           

    

     @section('scripts')
     <script src="{{asset('assets/Led-Theme/js/jquery-3.3.1.min.js')}}"></script>
  


<script src="{{asset('assets/Led-Theme/js/owl.carousel.min.js')}}"></script>


<script src="{{asset('assets/Led-Theme/js/jquery.magnific-popup.min.js')}}"></script>
 <script src="{{asset('assets/Led-Theme/js/aos.js')}}"></script>

<script src="{{asset('assets/Led-Theme/js/main.js')}}"></script>

<script src="{{asset('assets/Bootstrap-4-1/popper.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/bootstrap.min.js')}}"></script>
         @include('led-theme.scripts')
     @show
     @livewireScripts
</body>
</html>

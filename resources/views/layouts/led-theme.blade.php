<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @section('head')
        @include('led-theme.head')
    @show
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
         @include('led-theme.scripts')
     @show
</body>
</html>

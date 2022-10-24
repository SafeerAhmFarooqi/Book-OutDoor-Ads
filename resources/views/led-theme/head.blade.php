
<meta charset="utf-8">
      <title>{{ config('app.title') }} - {{ $headTitle ?? '' }}</title>
      <meta charset="utf-8">
<meta content="width=device-width, initial-scale=1" name="viewport" />
      @section('Styles')
      <link rel="stylesheet" href="{{asset('assets/newtheme2023/assets/bootstrap.min.css')}} ">
      <link rel=icon href="{{asset('assets/newtheme2023/images/assets/fav.svg')}} " sizes="16x16" type="image/jpef">
      <link rel="stylesheet" href="{{asset('assets/newtheme2023/assets/style2.css')}}">
      <link rel="stylesheet" href="{{asset('assets/newtheme2023/assets/w3.css')}}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <link rel="stylesheet" type="text/css" href="{{asset('assets/daterangepicker/daterangepicker.css')}}" />


      <script src="{{asset('assets/newtheme2023/assets/jquery-3.6.min.js')}}"></script>
      <script src="{{asset('assets/newtheme2023/assets/bootstrap.min.js')}}"></script>
        <style type="text/css">
          .disabled
          {
            color: #ccc !important;
          }
        </style>
       
      @show
      @yield('pageStyles')
 
 
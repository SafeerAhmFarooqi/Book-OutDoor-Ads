<meta charset="utf-8">
<!-- Primary Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="title" content="{{ config('app.name') }}">
<meta name="author" content="Safeer Ahmed Farooqi">


<title>{{ config('app.title') }} - {{ $headTitle ?? '' }}</title>

<link href="https://fonts.googleapis.com/css?family=Nanum+Gothic:400,700,800" rel="stylesheet">

{{-- <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/bootstrap.min.css')}}"> --}}

    
  

@section('Styles')
<link rel="stylesheet" href="{{asset('assets/Led-Theme/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/Led-Theme/fonts/flaticon/font/flaticon.css')}}">
<link rel="stylesheet" href="{{asset('assets/Led-Theme/css/style.css')}}">
<link rel="stylesheet" href="{{asset('assets/Bootstrap-4-1/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/Led-Theme/fonts/icomoon/style.css')}}">
    @show
@extends('layouts.get-theme')
@section('content')
<div class="site-wrap">
    <div class="site-section">
        <livewire:led-search-results :find="$find" :location="$location" />
    </div>
  </div>
@endsection

@section('Styles')

<link rel="stylesheet" href="{{asset('assets/Bootstrap-4-1/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/Led-Theme/fonts/icomoon/style.css')}}">

    
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('assets/Led-Theme/fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/rangeslider.css')}}">

    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/ion.rangeSlider.min.css')}}"/>
<!------ Include the above in your HEAD tag ---------->
@livewireStyles
@endsection

@section('pageScripts')
<script src="{{asset('assets/Bootstrap-4-1/jquery-3.3.1.slim.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/popper.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/Led-Theme/js/ion.rangeSlider.min.js')}}"></script>
@livewireScripts
@endsection
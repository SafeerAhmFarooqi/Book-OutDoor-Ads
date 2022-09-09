@extends('layouts.led-theme')

@section('content')
  
    <div class="container-fluid bg-center" style="min-height:60vh">
        <div class="flex-sb btn-margin-lr">
           
        </div>
        
             @csrf 
              @include('common.validation')
            <div class="middle w3-container">
                <div class="circle-bg"><img class="w3-image" src="{{asset('assets/newtheme2023/images/enableicon.png')}}"></div>
                <h2 class="ra-h-24 font-20-sm p-t-10">Success ! </h2>
                <p class="file-sm-label p-t-10">Thank You !. we recieve your LED Order After Verifing we Will Inform You.. </p>
                <p class="file-sm-label p-t-10">Order Id : {{$id}}</p>   <a href="{{route('dashboard')}}">
                <p class="log-forgot-text">Back to Home ?</p></a>
            </div>
         
    </div> 

  
  
    
@endsection
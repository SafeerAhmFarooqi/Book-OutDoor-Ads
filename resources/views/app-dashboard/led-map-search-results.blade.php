
@extends('layouts.led-theme')

@section('content')
<livewire:map-led-search-results />
 
    
  
<!-- end listing -->
@endsection

@section('Styles')
@parent
<style>
    /*
    # Welcome
    --------------------------------*/
    #mymap {
      		border:1px solid red;
      		width: 100%;
              height: 500px;
    	}
    </style>
@endsection



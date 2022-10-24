
@extends('layouts.led-theme')

@section('content')
<livewire:led-search-results :find="$find" :location="$location" />
    
<!-- end listing -->
@endsection

 

	<style>
    /*
    # Welcome
    --------------------------------*/
    #mymap { 
              height: 500px;
                 width: 115% !important;
    margin-left: -50px !important;
    margin-top: -55px !important;
    border: none !important !important;
     } 
footer{
    display: none !important;
}
.filterbtn{
    display: none;
   
}
@media (min-width: 430px) and (max-width: 600px) {
.filterbtn{
  display: inline-block;
}
}
 </style>

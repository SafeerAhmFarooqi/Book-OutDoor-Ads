
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

@section('pageScripts')
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
<script src="{{asset('assets/Bootstrap-4-1/popper.min.js')}}"></script>
<script src="{{asset('assets/Bootstrap-4-1/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'googleLocation';
    
        $(document).ready(function () {
            var autocomplete;
            autocomplete = new google.maps.places.Autocomplete((document.getElementById(searchInput)), {
                types: ['geocode']
               
            });
        
            google.maps.event.addListener(autocomplete, 'place_changed', function () {
                var near_place = autocomplete.getPlace();
            });
        });
</script>

@endsection

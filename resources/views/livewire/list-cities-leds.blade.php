<div>
    {{-- The whole world belongs to you. --}}
    <div class="container">
        <div class="row">
         
          <div class="col-lg-12">
            <h5 style="font-size: 22px;font-weight: bold;"><i class="fa fa-map-marker" style="font-size: 25px;">
              
            </i> {{$selectedCityName?$selectedCityName->city : ''}}</h5><br>
            <div class="row">
                
                @foreach ($leds as $led)
                <div class="col-lg-4">  
                    <div class="d-block d-md-flex listing vertical">
                      <img src="{{asset('storage/'.($led->images->first())->path)}}" style="width: 100%;min-height: 250px;max-height: 250px;">
                      <a href="{{route('app.led.detail',$led->id)}}" class="img d-block" style="background-image: url('{{asset('storage/'.($led->images->first())->path)}}')"></a>
                      <div class="lh-content">
                        <span class="category">{{($cities->where('id',$led->city_id)->first())->city}}</span>
                        <span class="category">Price : €{{$led->price}}/day</span>
                        {{-- <a href="#" class="bookmark"><span class="icon-heart"></span></a> --}}
                        <h3><a href="{{route('app.led.detail',$led->id)}}" style="font-weight: bold;
    font-size: 22px;">{{$led->title}}</a> </h3>   <br>
                        <address>{{$led->location}}</address>
                         
                         <a href="{{route('app.led.detail',$led->id)}}" class="btn-submit papularledbtn btn">Book Now</a>
                      </div>
                    </div>
                  </div>      
                @endforeach
              
              
              
            </div>
          </div>
        </div>
      </div>
</div>

@section('scripts')
@parent
<script>
 
  </script>
    
@endsection

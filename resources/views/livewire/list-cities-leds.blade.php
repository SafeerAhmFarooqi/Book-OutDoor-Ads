<div>
    {{-- The whole world belongs to you. --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-3  ">
            <div class="mb-5">
              <ul>
                @foreach ($cities as $city)
                  <li>
                    <a href="javascript:;" wire:click="$set('selectedId', {{$city->id}})">{{$city->city}}</a>
                  </li>
                  @endforeach
              </ul>
                  
              
            </div>   
          </div>
          <div class="col-lg-8">
            <h5 style="margin-bottom: 5%;">{{$selectedCityName?$selectedCityName->city : ''}}</h5>
            <div class="row">
                
                @foreach ($leds as $led)
                <div class="col-lg-6">  
                    <div class="d-block d-md-flex listing vertical">
                      <a href="{{route('app.led.detail',$led->id)}}" class="img d-block" style="background-image: url('{{asset('storage/'.($led->images->first())->path)}}')"></a>
                      <div class="lh-content">
                        <span class="category">{{($cities->where('id',$led->city_id)->first())->city}}</span>
                        {{-- <a href="#" class="bookmark"><span class="icon-heart"></span></a> --}}
                        <h3><a href="{{route('app.led.detail',$led->id)}}">{{$led->title}}</a></h3>   
                        <address>{{$led->location}}</address>
                        {{-- <p class="mb-0">
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-warning"></span>
                          <span class="icon-star text-secondary"></span>
                          <span class="review">(3 Reviews)</span>
                        </p> --}}
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

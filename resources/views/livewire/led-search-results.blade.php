<div>
    {{-- The whole world belongs to you. --}}
    <div class="container">
        <div class="row">
            <div class="col-lg-3  ">
            <div class="mb-5">
               <form action="#" method="post">
                <div class="form-group">
                  <input type="text" placeholder="What are you looking for?" class="form-control" wire:model='find'>
                </div>
                <div class="form-group">
                  <div class="select-wrap">
                      <span class="icon"><span class="icon-keyboard_arrow_down"></span></span>
                      <select class="form-control" wire:model='selectedCity'>
                        {{-- <option value="">Select a City...</option> --}}
                        <option value="">All Cities</option>
                        @foreach ($cities as $city)
                        <option value="{{$city->id}}" selected="">{{$city->city}}</option>
                        @endforeach
                        
                        
                      </select>
                    </div>
                </div>
                <div class="form-group">
                  <!-- select-wrap, .wrap-icon -->
                  <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" placeholder="Location" class="form-control" wire:model='location'>
                  </div>
                </div>
              </form>
            </div>   
          </div>
          <div class="col-lg-8">
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

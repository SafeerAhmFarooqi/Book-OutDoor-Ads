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

                <div class="form-group">
                  <!-- select-wrap, .wrap-icon -->
                  <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" name="book_dates" class="form-control"/>
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

@section('scripts')
@parent
<script>
  $(function() {
    $('input[name="book_dates"]').daterangepicker({
      opens: 'left',
    }, function(start, end, label) {
      var date1 = new Date(start);
var date2 = new Date(end);
      @this.set('selectedStartDate', date1.getFullYear()+'/'+(date1.getMonth()+1)+'/'+date1.getDate());
      @this.set('selectedEndDate', date2.getFullYear()+'/'+(date2.getMonth()+1)+'/'+date2.getDate());
      @this.set('selectedDateRange', (date1.getMonth()+1)+'/'+date1.getDate()+'/'+date1.getFullYear()+' - '+(date2.getMonth()+1)+'/'+date2.getDate()+'/'+date2.getFullYear());
      // alert(start.format('YYYY-MM-DD'));
    });

    $('input[name="book_dates"]').on('cancel.daterangepicker', function(ev, picker) {
  //do something, like clearing an input
  @this.set('selectedDateRange', '');
  $('input[name="book_dates"]').val('Select Date Range');
});
  });
  </script>
    
@endsection

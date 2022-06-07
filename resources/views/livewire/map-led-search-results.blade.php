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
                <div id="mymap"></div>
              
              
              
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
     <script type="text/javascript">


         var locations = @json($coordinates);
    
        // var increment=0;
        // var increment_2=0;

        var mymap = new GMaps({
          el: '#mymap',
          lat: 50.3569,
      lng: 7.5890,
      zoom:6
        });
    
    
        $.each( locations, function( index, value ){
            // increment_2++;
            mymap.addMarker({
            //   lat: value.lat,
            //   lng: value.lng,
            lat: value.lat,
          lng: value.long,
              title: value.title,
            //   click: function(e) {
            //     alert('This is '+value.status+' : '+increment_2+', gujarat from India.');
            //   }
            });
       });
    
    
      </script>

      <script>
        

      


     window.addEventListener('getLocation', event => {
        //  alert(JSON.stringify(event.detail.name));
        //   alert("Hello! I am an alert box!");
        
          var locations = event.detail.name;
    // alert('check 1');
    // var increment=0;
    // var increment_2=0;

    // var mymap = new GMaps({
    //   el: '#mymap',
    //   lat: 21.170240,
    //   lng: 72.831061,
    //   zoom:6
    // });

        var mymap = new GMaps({
      el: '#mymap',
      lat: 50.3569,
      lng: 7.5890,
      zoom:6
    });
    
    



    $.each( locations, function( index, value ){
        // alert((value.status));
        // increment_2++;
        mymap.addMarker({
        //   lat: value.lat,
        //   lng: value.lng,
        
          lat: value.lat,
          lng: value.long,
          title: value.title,
        //   click: function(e) {
        //     alert('This is '+value.status+' : '+increment_2+', gujarat from India.');
        //   }
        });
   });
})
</script>  
@endsection

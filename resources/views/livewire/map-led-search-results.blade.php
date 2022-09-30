<div>
  {{-- The whole world belongs to you. --}}
<div>
<div class="container-fluid DN-800" id="search-page">
      
  <div class="sp-backdrop-bg sp-border">
      <div class="flex-stretch">
          <div class="f-g-4 col-sm-4" >
              <div class="flex-st">
                  <p class="margin-right">  <i class="fa fa-map-marker" style="font-size: 25px;"></i></p><input class="cp-input-form"   placeholder="EStandort suchen" style="border:none; outline:none; font-size:16px;"  wire:model='location'>
              </div>
          </div>
          <div class="f-g-1 margin-right">
              <div class="vr-line"></div>
          </div>
          <div class="f-g-2">
              <p class="font-lufga-18 dis-none">Stadt</p>
              <div class="flex-st">
                  <div class="dropdown margin-right">
                      <select aria-labelledby="menu1" wire:model='selectedCity' style="padding: 8px 32px 8px 0px;border: none;outline: none;text-align: center;color: #8F90A6!important;">
                        <option value="">alle Städte</option>
                        @foreach ($cities as $city)
                        <option value="{{$city->id}}" selected="">{{$city->city}}</option>
                        @endforeach
                      </select>
                  </div>
              </div>
          </div>
          <div class="f-g-1 margin-right">
              <div class="vr-line"></div>
          </div>
          <div class="f-g-2">
              <p class="font-lufga-18 dis-none">Datum </p>
              <div class="flex-st">
                  <div class="dropdown margin-right">
                      <select id="property_type" name="property_type" style="padding: 8px 32px 8px 0px;border: none;outline: none;text-align: center;color: #8F90A6!important;">
                          <option value="">
                             1-10-2022 - 10-10-2023
                          </option> 
                      </select>
                  </div>
              </div>
          </div>
          <div class="f-g-1 margin-right">
              <div class="vr-line"></div>
          </div>
   
          <div class="f-g-2">
              <p class="font-lufga-18 dis-none">Preisspanne</p>
              <div class="flex-st">
                  <div class="dropdown margin-right">
                      <select  wire:model='priceRange' style="padding: 8px 32px 8px 0px;border: none;outline: none;text-align: center;color: #8F90A6!important;">
                        <option value="">
                           Preisspanne auswählen
                       </option>  
                        <option value="1-10">
                             € 1 - € 10 
                          </option>
                            <option value="11-30"> 
                             € 11 - € 30 
                          </option> 
                            <option value="31-50"> 
                             € 31 - € 50 
                          </option> 
                            <option value="51-100"> 
                             € 51 - € 100 
                          </option> 
                            <option value="100-150"> 
                             € 100 - € 150 
                          </option> 
                            <option value="150-300"> 
                             € 150 - € 300 
                          </option> 
                            <option value="300-500"> 
                             € 300 - € 500 
                          </option> 
                            <option value="500-999999999999999999"> 
                             € 500 +
                          </option> 
                      </select>
                  </div>
              </div>
          </div>
          <div class="f-g-1 margin-right">
              <div class="vr-line"></div>
          </div>

          <div class="f-g-2">
              <a href="{{route('find.map.led')}}"> <img src="https://1000logos.net/wp-content/uploads/2021/05/Google-Maps-logo.png" class="img-responsive cursor-on"  style="width:90px">
              </a>
         </div>



          
    
          
          
      </div>
  </div>
</div> 

<div class="container-fluid ">
<div class="row w3-padding-56-top">
 {{-- @foreach ($leds as $led)
 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w3-margin-bottom-30">
  <div class="card h-100">


 <a href="{{route('app.led.detail',$led->id)}}"><img class="card-img-top" src="{{asset('storage/'.($led->images->first())->path)}}" alt="" style="width:100%;min-height: 200px;;max-height: 200px;"></a>  



 <div class="card-body viewledlistmainpage" >
     <h2 class="card-title alignleft"  >
         <a href="#" class="viewledlistmainpageheading">Price : €{{$led->price}}/day</a>
     </h2>
     <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text viewledlistmainpageheading1"  > {{$led->title}}</h2>

     <h2 class="card-title viewledlistmainpageheading2"> {{($cities->where('id',$led->city_id)->first())->city}} </h4>

      
     <h2 class="card-title alignright"  >
         <a href="#"  class="viewledlistmainpageheading3"  > Price : €{{$led->price}} / <b  class="viewledlistmainpageheading4"  > day</b> </a>
     </h2>
     
     <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text" style="text-align:right"> 
         <a href="#" >
           <img src="http://127.0.0.1:8000/assets/newtheme2023/images/arrowblue.png"   class="viewledlistmainpageheading6"  > 
         </a>
     </h2>
 </div>
</div>
</div>
 @endforeach --}}

 <div >
                      
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
        
              //alert(value.title+' : '+value.price);
             
            $.each( locations, function( index, value ){
              var markerLabel = 'GO!';
              alert(value.image);
              var infowindow = new google.maps.InfoWindow({
               content: "<div style='max-width:220px'><div style='float:left;width:100%'><img src='"+value.image+"' style='max-width:220px;max-height:180px' ></div><div style='float:left; padding: 10px;'><b>"+value.title+"</b><br/> <h2>"+value.price +"€</h2> </div> <div style='float:right'><img src='https://www.freeiconspng.com/uploads/calendar-icon-png-4.png' style='width:50px;padding:10px;'> </div></div>"
            });
              //alert(value.title+' : '+value.price);
                // increment_2++;
                var marker = mymap.addMarker({
                //   lat: value.lat,
                //   lng: value.lng,
                
                lat: value.lat,
              lng: value.long,
                  title: value.title+" Pries "+ value.price +"€/Tag",
                  click: function(e) {
                    infowindow.open(mymap,marker);
                    // let url = "{{ route('app.led.detail', ':value.id') }}";
                    // url = url.replace(':value.id', value.id);
                    // document.location.href=url;
                  },
                });
                marker.setLabel(markerLabel);
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
            
            mymap.addMarker({
           
              lat: value.lat,
              lng: value.long,
              title: value.title+" Pries "+ value.price +"€/Tag",
              click: function(e) {
               // alert('This is second '+value.id+', gujarat from India.');
                let url = "{{ route('app.led.detail', ':value.id') }}";
                    url = url.replace(':value.id', value.id);
                    document.location.href=url;
                   // window.open(url,'_self');
               // window.open("https://www.w3schools.com",'_self');
              }
            });
       });
    })
    </script>  
@endsection
<div>
 
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
  @foreach ($coordinates as $coordinate)
  <div wire:ignore class="modal fade" id="exampleModal-{{$coordinate['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">{{$coordinate['title']}}</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
                  
            <div class="w3-margin-48-top  box-shad" id="stick">
             
             <!-- right side booking -->
                    <div class="order-booking">
              <div class=" ">
                  <div class="topbookingform"> 
                  <div class="order-body">
                      @include('common.validation')
                      <input type="text" disabled class="input-style-red" wire:model="sessionFlash.{{$coordinate['led']->id}}" size="34">
                      <input type="text" disabled class="input-style-green" wire:model="sessionFlashSuccess.{{$coordinate['led']->id}}" size="34">
                      <div class="form-group">

          <input required="" name="product_id" type="hidden" value="3" class="form-control" id="product_id">
          <input required="" name="price" type="hidden" class="form-control" id="price">
         <input required="" name="selected_date_array" value="" type="hidden" class="form-control" id="selected_date_array">
          <input type="hidden" value="booking2" name="redirectFile">
                          <label for="booking-daterange">Buchungszeitraum wählen-{{$coordinate['led']->getBookingDurationName()}}</label>



                          <div class="input-group" style="width:100%">
                              <div class="input-group-prepend cticon">
                              <!--     <span class="input-group-text">
                                        <img src="images/calandericon.png" style="
                            width: 20px;
                            color: #fff !important;
                            /* background: #fff; */
                          ">
                                  </span> -->
                              </div>
                              <form action="#" method="post">
                                
                              <input type="text" class="form-control"  wire:model="bookingDates.{{$coordinate['led']->id}}" id="book_dates-{{$coordinate['led']->id}}" placeholder="Select Date" />
                              <input type="hidden" name="error" id="error">
                              <input type="text" wire:model="alert.{{$coordinate['led']->id}}" disabled size="34" class="input-style-red">
                              {{-- <h6  style="color: red;">{{$alert[$coordinate['led']->id]??''}}</h6> --}}
                              <input type="hidden" id="no_of_days" name="no_of_days">
                          </div>
                          

                      </div>


                  <ul class="list-group" style="padding:2px;font-size:13px;">
                  <li class="list-group-item listordertaking" style="background:none;border:none;padding:0;padding-top:10px"> <span id="per_booking_cost" style="font-weight:bold;color:#333"> <!-- € --> </span> <span id="id_x" style="font-weight:bold;color:#333"> {{$coordinate['led']->getPrice()}} € </span><span style="font-weight:bold;color:#333" id="multiply_show"></span><input type="text" size="4" wire:model="totalDays.{{$coordinate['led']->id}}" class="input-style" disabled><span id="days_show"></span> <span id="days_id"></span> <span class=" pull-right" id="total_cost">  </span></li>
                  <!--   <li class="list-group-item listordertaking"> 25 &euro; x  <span class="badge pull-right" >12</span></li>
                  --> </ul>

                   

                      <table class="table" style="width:100%">
                          <tbody>



                              <tr>
                                  <th style="text-align: left;"> <span style="line-height: 45px;color:#333;font-weight:bold"> Gesamtpreis </span></th>
                                  <td style="text-align: right;"><strong><input type="text" disabled class="input-style" wire:model="totalPrice.{{$coordinate['led']->id}}" size="8">                                        </strong><b> €</b> </td>
                              </tr>
                          </tbody>
                      </table>
                <div style="text-align: center;">
                  <a href="javascript:;" wire:click="SubmitBookDates({{$coordinate['led']->id}})" type="submit" class="buttonsubmit btn btn-default"  style="font-size:15px">
                 jetzt buchen                         </a>
              </div>
                  </form>
                    
                  <hr>
                  <p id="underactionbutton" style="font-size:16px;text-align: center"> Geben Sie Ihren Buchungszeitraum ein, um den Gesamtpreis pro Tag zu sehen. </p>
                       
                  </div>

              </div>
          </div>


          <!-- end right side booking -->
              
             
          </div>
       </div>
       <!--right-col-->
  
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    
        </div>
      </div>
    </div>
  </div>
  @endforeach
 
</div>
</div>
</div>
</div>
      
</div>

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

      .input-style-red{
        border: none;
        color: rgb(255, 0, 0);
      }
      .input-style-green{
        border: none;
        color: rgb(0, 255, 8);
      }
      .input-style{
        border: none;
        color: rgb(0, 0, 0);
      }
    </style>
@endsection

@section('pageScripts')

<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>



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
   

      @foreach ($coordinates as $coordinate)
      @php
          $disableDates=App\Models\SubOrders::with(['order'])
      ->whereHas('order', function($q) {
      $q->where('payment_status',true);
      })
      ->where('led_id',$coordinate['led']->id)
      ->where('startDate','>=',Carbon\Carbon::now()->format('Y-m-d'))
      ->get();
      @endphp
      @if ($coordinate['led']->bookingduration=='All')
      <script>
             $(function() {
             var dateRanges=@json($disableDates);
             var dateToday = new Date();
               $("#book_dates-{{$coordinate['led']->id}}").daterangepicker({
                 opens: 'left',
                 //singleDatePicker: true,
                 minDate: dateToday,
                 autoApply : true,
                 isInvalidDate: function(date) {
                     return dateRanges.reduce(function(bool, range) {
                         startDateObject=new Date(range.startDate);
                         startDate=startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate();
                         endDateObject=new Date(range.endDate);
                         endDate=endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate();
                         return bool || (date >= moment(startDate) && date <= moment(endDate));
                     }, false);
                 }
               }, function(start, end, label) {
                 var date1 = new Date(start);
         var date2 = new Date(end);
         var disableDays=0;
         var a=0,b=0;
         //alert(date2.getDate());
         dateRanges.forEach(range => {
                   startDateObject=new Date(range.startDate);
                         startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
                         endDateObject=new Date(range.endDate);
                         endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
              
                     if((startDate.getDate() >= date1.getDate() && startDate.getDate() <= date2.getDate())||(date1.getDate() >= startDate.getDate() && date1.getDate() <= endDate.getDate())) 
                   {
                     //alert('wrong');
                     @this.set('alert.{{$coordinate["led"]->id}}', 'Ungültiges Datum Bitte erneut auswählen');
                     @this.set('bookingDates.{{$coordinate["led"]->id}}', '');
                     @this.set('error.{{$coordinate["led"]->id}}', true); 
                     @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
                   else{
                    @this.set('bookingDates.{{$coordinate["led"]->id}}', (date1.getMonth()+1)+'/'+date1.getDate()+'/'+date1.getFullYear()+' - '+(date2.getMonth()+1)+'/'+date2.getDate()+'/'+date2.getFullYear());
                    @this.set('alert.{{$coordinate["led"]->id}}', '');
                    @this.set('error.{{$coordinate["led"]->id}}', false);
                    @this.set('sessionFlash.{{$coordinate["led"]->id}}', '');
                    @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                    //  document.getElementById("alert").innerHTML =  ''; 
                    //  $('#error').val('false');
                   }
                 });
   
      
                   
         
         var Difference_In_Days =date2.getDate() - date1.getDate();
         Difference_In_Days=Difference_In_Days+1;
                // document.getElementById("total_days").innerHTML = Difference_In_Days;
                 @this.set('totalDays.{{$coordinate["led"]->id}}', Difference_In_Days);
                 document.getElementById("multiply_show").innerHTML =  'X';
                 document.getElementById("days_show").innerHTML =  ' Tag(s)';
               //  document.getElementById("total_price").innerHTML =  Difference_In_Days*"{{$coordinate['led']->price}}";
                 @this.set('totalPrice.{{$coordinate["led"]->id}}', Difference_In_Days*"{{$coordinate['led']->price}}");
                 document.getElementById("no_of_days").value = Difference_In_Days;
                // alert(start.format('YYYY-MM-DD'));
               });
         
        
       
             });
             </script>
      @else
      <script>
            $(function() {
               
         
             var dateRanges=@json($disableDates);
             var dateToday = new Date();
             var maxSpan=0;
             //$('#error').val('true'); 
            // document.getElementById("error").value = 'true';
           //  @this.set('error.{{$coordinate["led"]->id}}', true); 
             if('{{$coordinate["led"]->bookingduration}}'=='3 Days')
         {
            maxSpan=2;
         }
         if('{{$coordinate["led"]->bookingduration}}'=='1 Week')
         {
            maxSpan=6;
         }
         if('{{$coordinate["led"]->bookingduration}}'=='1 Month')
         {
            maxSpan=29;
         }
         if('{{$coordinate["led"]->bookingduration}}'=='3 Month')
         {
            maxSpan=89;
         }
         if('{{$coordinate["led"]->bookingduration}}'=='6 Month')
         {
            maxSpan=179;
         }
               $("#book_dates-{{$coordinate['led']->id}}").daterangepicker({
                 opens: 'left',
                // singleDatePicker: true,
                "maxSpan": {
                     "days": maxSpan
                                 },
                 autoApply : true,
                 minDate: dateToday,
                 isInvalidDate: function(date) {
                  
                     return dateRanges.reduce(function(bool, range) {
                         startDateObject=new Date(range.startDate);
                         startDate=startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate();
                         endDateObject=new Date(range.endDate);
                         endDate=endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate();
                         return bool || (date >= moment(startDate) && date <= moment(endDate));
                     }, false);
                 }
               }, function(start, end, label) {
                  var date1 = new Date(start);
         var date2 = new Date(end);
         var disableDays=0;
         var a=0,b=0;
         
         var Difference_In_Days =date2.getDate() - date1.getDate();
         Difference_In_Days=Difference_In_Days+1;
         //alert(Difference_In_Days);
         dateRanges.forEach(range => {
                   startDateObject=new Date(range.startDate);
                         startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
                         endDateObject=new Date(range.endDate);
                         endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
                 
                     if((startDate.getDate() >= date1.getDate() && startDate.getDate() <= date2.getDate())||(date1.getDate() >= startDate.getDate() && date1.getDate() <= endDate.getDate())||(Difference_In_Days!=(maxSpan+1))) 
                   {
                   
                          @this.set('alert.{{$coordinate["led"]->id}}', 'Ungültiges Datum Bitte erneut auswählen');
                     @this.set('bookingDates.{{$coordinate["led"]->id}}', '');
                     @this.set('error.{{$coordinate["led"]->id}}', true); 
                     @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
                   else{
                   

                     @this.set('bookingDates.{{$coordinate["led"]->id}}', (date1.getMonth()+1)+'/'+date1.getDate()+'/'+date1.getFullYear()+' - '+(date2.getMonth()+1)+'/'+date2.getDate()+'/'+date2.getFullYear());
                    @this.set('alert.{{$coordinate["led"]->id}}', '');
                    @this.set('error.{{$coordinate["led"]->id}}', false);
                    @this.set('sessionFlash.{{$coordinate["led"]->id}}', '');
                    @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
                 });
                 if(Difference_In_Days!=(maxSpan+1)) 
                   {
                   
                          @this.set('alert.{{$coordinate["led"]->id}}', 'Ungültiges Datum Bitte erneut auswählen');
                     @this.set('bookingDates.{{$coordinate["led"]->id}}', '');
                     @this.set('error.{{$coordinate["led"]->id}}', true); 
                     @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
                   else{
                   
                 
                     @this.set('bookingDates.{{$coordinate["led"]->id}}', (date1.getMonth()+1)+'/'+date1.getDate()+'/'+date1.getFullYear()+' - '+(date2.getMonth()+1)+'/'+date2.getDate()+'/'+date2.getFullYear());
                    @this.set('alert.{{$coordinate["led"]->id}}', '');
                    @this.set('error.{{$coordinate["led"]->id}}', false);
                    @this.set('sessionFlash.{{$coordinate["led"]->id}}', '');
                    @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
         
                   
         
                   @this.set('totalDays.{{$coordinate["led"]->id}}', Difference_In_Days);
                // document.getElementById("total_days").innerHTML = Difference_In_Days;
                 document.getElementById("multiply_show").innerHTML =  'zum';
                 document.getElementById("days_show").innerHTML =  ' Tag(s)';
                 @this.set('totalPrice.{{$coordinate["led"]->id}}', Difference_In_Days*"{{$coordinate['led']->price}}");
                // document.getElementById("total_price").innerHTML =  Difference_In_Days*"{{$coordinate['led']->price}}";
                 
                 document.getElementById("no_of_days").value = Difference_In_Days;
      
      
      
      
               });
         
              
             });
        
             </script> 
      @endif
      @endforeach
         <script type="text/javascript">
    
    
             var locations = @json($coordinates);
        
            // var increment=0;
            // var increment_2=0;
    
            var mymap = new GMaps({
              el: '#mymap',
              lat: locations.length==0?51 :locations[0].lat ,
              lng: locations.length==0?10 :locations[0].long,
          zoom:6
            });
        
              //alert(value.title+' : '+value.price);

             
             
            $.each( locations, function( index, value ){
              
              var markerLabel = 'GO!';
              //alert(value.image);
              var infowindow = new google.maps.InfoWindow({
               content: "<div style='max-width:220px'><div style='float:left;width:100%'><img src='"+value.image+"' style='max-width:220px;max-height:180px' ></div><div style='float:left; padding: 10px;'><b>"+value.title+"</b><br/> <h2>"+value.price +"€</h2> </div> <div style='float:right'><a href='javascript:;' data-toggle='modal' data-target='#exampleModal-"+value.id+"'> <img src='https://www.freeiconspng.com/uploads/calendar-icon-png-4.png' style='width:50px;padding:10px;'></a> </div></div>"
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
          
          var locations = event.detail.name;

var mymap = new GMaps({
el: '#mymap',
lat: locations.length==0?51 :locations[0].lat ,
lng: locations.length==0?10 :locations[0].long,
zoom:6
});





$.each( locations, function( index, value ){
var markerLabel = 'GO!';
  //alert(value.image);
  var infowindow = new google.maps.InfoWindow({
   content: "<div style='max-width:220px'><div style='float:left;width:100%'><img src='"+value.image+"' style='max-width:220px;max-height:180px' ></div><div style='float:left; padding: 10px;'><b>"+value.title+"</b><br/> <h2>"+value.price +"€</h2> </div> <div style='float:right'><a href='javascript:;' data-toggle='modal' data-target='#exampleModal-"+value.id+"'> <img src='https://www.freeiconspng.com/uploads/calendar-icon-png-4.png' style='width:50px;padding:10px;'></a> </div></div>"
});
var marker= mymap.addMarker({

  lat: value.lat,
  lng: value.long,
  title: value.title+" Pries "+ value.price +"€/Tag",
  click: function(e) {
   // alert('This is second '+value.id+', gujarat from India.');
    infowindow.open(mymap,marker);
  //   let url = "{{ route('app.led.detail', ':value.id') }}";
  //       url = url.replace(':value.id', value.id);
  //       document.location.href=url;
       // window.open(url,'_self');
   // window.open("https://www.w3schools.com",'_self');
  }
});
marker.setLabel(markerLabel);
});
          @foreach ($coordinates as $coordinate)
      @php
          $disableDates=App\Models\SubOrders::with(['order'])
      ->whereHas('order', function($q) {
      $q->where('payment_status',true);
      })
      ->where('led_id',$coordinate['led']->id)
      ->where('startDate','>=',Carbon\Carbon::now()->format('Y-m-d'))
      ->get();
      @endphp
      @if ($coordinate['led']->bookingduration=='All')
     
             $(function() {
             var dateRanges=@json($disableDates);
             var dateToday = new Date();
               $("#book_dates-{{$coordinate['led']->id}}").daterangepicker({
                 opens: 'left',
                 //singleDatePicker: true,
                 minDate: dateToday,
                 autoApply : true,
                 isInvalidDate: function(date) {
                     return dateRanges.reduce(function(bool, range) {
                         startDateObject=new Date(range.startDate);
                         startDate=startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate();
                         endDateObject=new Date(range.endDate);
                         endDate=endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate();
                         return bool || (date >= moment(startDate) && date <= moment(endDate));
                     }, false);
                 }
               }, function(start, end, label) {
                 var date1 = new Date(start);
         var date2 = new Date(end);
         var disableDays=0;
         var a=0,b=0;
         //alert(date2.getDate());
         dateRanges.forEach(range => {
                   startDateObject=new Date(range.startDate);
                         startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
                         endDateObject=new Date(range.endDate);
                         endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
              
                     if((startDate.getDate() >= date1.getDate() && startDate.getDate() <= date2.getDate())||(date1.getDate() >= startDate.getDate() && date1.getDate() <= endDate.getDate())) 
                   {
                     //alert('wrong');
                     @this.set('alert.{{$coordinate["led"]->id}}', 'Ungültiges Datum Bitte erneut auswählen');
                     @this.set('bookingDates.{{$coordinate["led"]->id}}', '');
                     @this.set('error.{{$coordinate["led"]->id}}', true); 
                     @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
                   else{
                    @this.set('bookingDates.{{$coordinate["led"]->id}}', (date1.getMonth()+1)+'/'+date1.getDate()+'/'+date1.getFullYear()+' - '+(date2.getMonth()+1)+'/'+date2.getDate()+'/'+date2.getFullYear());
                    @this.set('alert.{{$coordinate["led"]->id}}', '');
                    @this.set('error.{{$coordinate["led"]->id}}', false);
                    @this.set('sessionFlash.{{$coordinate["led"]->id}}', '');
                    @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                    //  document.getElementById("alert").innerHTML =  ''; 
                    //  $('#error').val('false');
                   }
                 });
   
      
                   
         
         var Difference_In_Days =date2.getDate() - date1.getDate();
         Difference_In_Days=Difference_In_Days+1;
                // document.getElementById("total_days").innerHTML = Difference_In_Days;
                 @this.set('totalDays.{{$coordinate["led"]->id}}', Difference_In_Days);
                 document.getElementById("multiply_show").innerHTML =  'X';
                 document.getElementById("days_show").innerHTML =  ' Tag(s)';
               //  document.getElementById("total_price").innerHTML =  Difference_In_Days*"{{$coordinate['led']->price}}";
                 @this.set('totalPrice.{{$coordinate["led"]->id}}', Difference_In_Days*"{{$coordinate['led']->price}}");
                 document.getElementById("no_of_days").value = Difference_In_Days;
                // alert(start.format('YYYY-MM-DD'));
               });
         
        
       
             });
           
      @else
    
            $(function() {
               
         
             var dateRanges=@json($disableDates);
             var dateToday = new Date();
             var maxSpan=0;
             //$('#error').val('true'); 
            // document.getElementById("error").value = 'true';
           //  @this.set('error.{{$coordinate["led"]->id}}', true); 
             if('{{$coordinate["led"]->bookingduration}}'=='3 Days')
         {
            maxSpan=2;
         }
         if('{{$coordinate["led"]->bookingduration}}'=='1 Week')
         {
            maxSpan=6;
         }
         if('{{$coordinate["led"]->bookingduration}}'=='1 Month')
         {
            maxSpan=29;
         }
         if('{{$coordinate["led"]->bookingduration}}'=='3 Month')
         {
            maxSpan=89;
         }
         if('{{$coordinate["led"]->bookingduration}}'=='6 Month')
         {
            maxSpan=179;
         }
               $("#book_dates-{{$coordinate['led']->id}}").daterangepicker({
                 opens: 'left',
                // singleDatePicker: true,
                "maxSpan": {
                     "days": maxSpan
                                 },
                 autoApply : true,
                 minDate: dateToday,
                 isInvalidDate: function(date) {
                  
                     return dateRanges.reduce(function(bool, range) {
                         startDateObject=new Date(range.startDate);
                         startDate=startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate();
                         endDateObject=new Date(range.endDate);
                         endDate=endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate();
                         return bool || (date >= moment(startDate) && date <= moment(endDate));
                     }, false);
                 }
               }, function(start, end, label) {
                  var date1 = new Date(start);
         var date2 = new Date(end);
         var disableDays=0;
         var a=0,b=0;
         
         var Difference_In_Days =date2.getDate() - date1.getDate();
         Difference_In_Days=Difference_In_Days+1;
         //alert(Difference_In_Days);
         dateRanges.forEach(range => {
                   startDateObject=new Date(range.startDate);
                         startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
                         endDateObject=new Date(range.endDate);
                         endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
                 
                     if((startDate.getDate() >= date1.getDate() && startDate.getDate() <= date2.getDate())||(date1.getDate() >= startDate.getDate() && date1.getDate() <= endDate.getDate())||(Difference_In_Days!=(maxSpan+1))) 
                   {
                   
                          @this.set('alert.{{$coordinate["led"]->id}}', 'Ungültiges Datum Bitte erneut auswählen');
                     @this.set('bookingDates.{{$coordinate["led"]->id}}', '');
                     @this.set('error.{{$coordinate["led"]->id}}', true); 
                     @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
                   else{
                   

                     @this.set('bookingDates.{{$coordinate["led"]->id}}', (date1.getMonth()+1)+'/'+date1.getDate()+'/'+date1.getFullYear()+' - '+(date2.getMonth()+1)+'/'+date2.getDate()+'/'+date2.getFullYear());
                    @this.set('alert.{{$coordinate["led"]->id}}', '');
                    @this.set('error.{{$coordinate["led"]->id}}', false);
                    @this.set('sessionFlash.{{$coordinate["led"]->id}}', '');
                    @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
                 });
                 if(Difference_In_Days!=(maxSpan+1)) 
                   {
                   
                          @this.set('alert.{{$coordinate["led"]->id}}', 'Ungültiges Datum Bitte erneut auswählen');
                     @this.set('bookingDates.{{$coordinate["led"]->id}}', '');
                     @this.set('error.{{$coordinate["led"]->id}}', true); 
                     @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
                   else{
                   
                 
                     @this.set('bookingDates.{{$coordinate["led"]->id}}', (date1.getMonth()+1)+'/'+date1.getDate()+'/'+date1.getFullYear()+' - '+(date2.getMonth()+1)+'/'+date2.getDate()+'/'+date2.getFullYear());
                    @this.set('alert.{{$coordinate["led"]->id}}', '');
                    @this.set('error.{{$coordinate["led"]->id}}', false);
                    @this.set('sessionFlash.{{$coordinate["led"]->id}}', '');
                    @this.set('sessionFlashSuccess.{{$coordinate["led"]->id}}', '');
                   }
         
                   
         
                   @this.set('totalDays.{{$coordinate["led"]->id}}', Difference_In_Days);
                // document.getElementById("total_days").innerHTML = Difference_In_Days;
                 document.getElementById("multiply_show").innerHTML =  'zum';
                 document.getElementById("days_show").innerHTML =  ' Tag(s)';
                 @this.set('totalPrice.{{$coordinate["led"]->id}}', Difference_In_Days*"{{$coordinate['led']->price}}");
                // document.getElementById("total_price").innerHTML =  Difference_In_Days*"{{$coordinate['led']->price}}";
                 
                 document.getElementById("no_of_days").value = Difference_In_Days;
      
      
      
      
               });
         
              
             });
        
       
      @endif
      @endforeach
            
    })
    </script>  
@endsection
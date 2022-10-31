
@extends('layouts.led-theme')

@section('content')
{{-- <livewire:map-led-search-results /> --}}
 
<form action="{{route('find.map.led')}}" method="get">
    <div class="container-fluid DN-800" id="search-page" style="position: absolute;
    z-index: 999;
    padding-top: -3%;
    margin-left: 10%;">
      
        <div class="sp-backdrop-bg sp-border">
            <div class="flex-stretch">
                <div class="f-g-4 col-sm-4" >
                    <div class="flex-st">
                        <p class="margin-right">  <i class="fa fa-map-marker" style="font-size: 25px;"></i></p><input class="cp-input-form"   placeholder="EStandort suchen" style="border:none; outline:none; font-size:16px;" name="location">
                    </div>
                </div>
                <div class="f-g-1 margin-right">
                    <div class="vr-line"></div>
                </div>
                <div class="f-g-2">
                    <p class="font-lufga-18 dis-none">Stadt</p>
                    <div class="flex-st">
                        <div class="dropdown margin-right">
                            <select aria-labelledby="menu1" name="city" style="padding: 8px 32px 8px 0px;border: none;outline: none;text-align: center;color: #8F90A6!important;">
                              <option value="">alle Städte</option>
                              @foreach ($cities as $city)
                              <option value="{{$city->id}}">{{$city->city}}</option>
                              @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="f-g-1 margin-right">
                    <div class="vr-line"></div>
                </div>
                <div class="f-g-2">
                  {{-- <p class="font-lufga-18 dis-none">Datum -{{$selectedStartDate}} - {{$selectedEndDate}}- {{$selectedDateRange}}</p> --}}
                  <p class="font-lufga-18 dis-none">Datum</p>
                  <div class="flex-st">
                      <div class="dropdown margin-right">
                        <input type="text" class="form-control" name="searchdates" id="searchdates" placeholder="Select Date" />
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
                            <select  name="pricerange" style="padding: 8px 32px 8px 0px;border: none;outline: none;text-align: center;color: #8F90A6!important;">
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
                    {{-- <a href=""> <img src="https://1000logos.net/wp-content/uploads/2021/05/Google-Maps-logo.png" class="img-responsive cursor-on"  style="width:90px">
                    </a> --}}
                    <button type="submit" class="btn btn-primary">Apply</button>
               </div>
      
      
      
                
          
                
                
            </div>
        </div>
      </div> 
</form>


<div class="container-fluid ">
    <div class="row w3-padding-56-top">
     {{-- @foreach ($leds as $led)
     <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w3-margin-bottom-30">
      <div class="card h-100">
    
    
     <a href="{{route('app.led.detail',$led->id)}}"><img class="card-img-top" src="{{asset('storage/'.(($led->images->first())->path??''))}}" alt="" style="width:100%;min-height: 200px;;max-height: 200px;"></a>  
    
    
    
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
        @include('common.validation')              
      <div id="mymap"></div>
      @foreach ($coordinates as $coordinate)
      <div  class="modal fade" id="exampleModal-{{$coordinate['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                  <form action="{{route('cart.led.add')}}" method="post">
                                    @csrf
                                  <input type="text" class="form-control" name="book_dates" id="book_dates-{{$coordinate['led']->id}}" placeholder="Select Date" />
                                  <input type="hidden" name="error" id="error-{{$coordinate['led']->id}}">
                                  <h6 id="alert-{{$coordinate['led']->id}}" style="color: red;"></h6>
                                  <input type="hidden" id="no_of_days-{{$coordinate['led']->id}}" name="no_of_days">
                              </div>
                              

                          </div>


                      <ul class="list-group" style="padding:2px;font-size:13px;">
                      <li class="list-group-item listordertaking" style="background:none;border:none;padding:0;padding-top:10px"> <span id="per_booking_cost" style="font-weight:bold;color:#333"> <!-- € --> </span> <span id="id_x" style="font-weight:bold;color:#333"> {{$coordinate['led']->price??''}} € </span><span style="font-weight:bold;color:#333" id="multiply_show-{{$coordinate['led']->id}}"></span> <span style="font-weight:bold;color:#333" id="total_days-{{$coordinate['led']->id}}"></span><span id="days_show-{{$coordinate['led']->id}}"></span> <span id="days_id"></span> <span class=" pull-right" id="total_cost">  </span></li>
                      <!--   <li class="list-group-item listordertaking"> 25 &euro; x  <span class="badge pull-right" >12</span></li>
                      --> </ul>

                       

                          <table class="table" style="width:100%">
                              <tbody>



                                  <tr>
                                      <th style="text-align: left;"> <span style="line-height: 45px;color:#333;font-weight:bold"> Gesamtpreis </span></th>
                                      <td style="text-align: right;"><strong id="total_price-{{$coordinate['led']->id}}">                                        </strong><b> €</b> </td>
                                  </tr>
                              </tbody>
                          </table>
                    <div style="text-align: center;">
                      <button type="submit" class="buttonsubmit btn btn-default" name="led_id" value="{{$coordinate['led']->id}}" style="font-size:15px">
                     jetzt buchen                         </button>
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
      <div class="modal fade" style="top: 200px;" id="myModal-{{$coordinate['led']->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Error</h4>
            </div>
            <div class="modal-body">
              <h3>Please Select Date in Periods of {{$coordinate['led']->bookingduration??''}}</h3>
              <h6>Example : 
                 {{$coordinate['led']->bookingduration=='3 Days'?'1 to 3,1 to 6,12 to 15,20 to 23 etc' : ''}}
                 {{$coordinate['led']->bookingduration=='1 Week'?'1 to 7,1 to 14,12 to 19,20 to 27 etc' : ''}}
                 {{$coordinate['led']->bookingduration=='1 Month'?'1 to 30,1 to next consecutive 60 dyas,12 to next consecutive 30 days etc' : ''}}
                 {{$coordinate['led']->bookingduration=='3 Month'?'1 to next consecutive 90 days,12 to next consecutive 90 days etc' : ''}}
                 {{$coordinate['led']->bookingduration=='6 Month'?'1 to next consecutive 180 days,12 to next consecutive 180 days etc' : ''}}
              </h6>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
      @endforeach
     
    </div>
    </div>
    </div>



  
<!-- end listing -->
@endsection

@section('Styles')
@parent
<style>
 
 
    /*
    # Welcome
    --------------------------------*/
    #mymap { 
              height: 800px;
                 width: 115% !important;
    margin-left: -50px !important;
    margin-top: -55px !important;
    border: none !important ;
    margin-top: -15% !important ;
     } 
    footer{
        display: none;
    }

     


    </style>


@endsection

@section('pageScripts')
<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>



    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script> --}}
    <script src="{{asset('assets/daterangepicker/daterangepicker.js')}}"></script>
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
<script>
    $(function() {
      var dateToday = new Date();
      $('#searchdates').daterangepicker({
        opens: 'left',
        minDate: dateToday,
         autoApply : true
      }, function(start, end, label) {
        //alert('safeer');
        var date1 = new Date(start);
  var date2 = new Date(end);
     
      });
  
      $('#searchdates').on('cancel.daterangepicker', function(ev, picker) {
    //do something, like clearing an input

    $('#searchdates').val('Select Date Range');
  });
    });
    </script>
 <script>
  const minSpan = [];
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
   jQuery(function($) {
       $("#daterange").daterangepicker({
           isInvalidDate: function(date) {
               var dateRanges = [
                   { 'start': moment('2017-10-10'), 'end': moment('2017-10-15') },
                   { 'start': moment('2017-10-25'), 'end': moment('2017-10-30') },
                   { 'start': moment('2017-11-10'), 'end': moment('2017-11-15') },
                   { 'start': moment('2017-11-25'), 'end': moment('2017-11-30') },
                   { 'start': moment('2017-12-10'), 'end': moment('2017-12-15') },
                   { 'start': moment('2017-12-25'), 'end': moment('2017-12-30') },
                   { 'start': moment('2018-01-10'), 'end': moment('2018-01-15') },
                   { 'start': moment('2018-01-25'), 'end': moment('2018-01-30') },
                   { 'start': moment('2018-02-10'), 'end': moment('2018-02-15') },
                   { 'start': moment('2018-02-25'), 'end': moment('2018-02-30') }
               ];
               return dateRanges.reduce(function(bool, range) {
                   return bool || (date >= range.start && date <= range.end);
               }, false);
           }
       });
   });
   
   
       $(function() {
         var a = moment("2022-06-10");
       var b = moment("2022-06-12");
       var x = moment("2022-07-20");
       var y = moment("2022-07-25");
       var dates=@json($disableDates);
       var dateRanges=@json($disableDates);
       var dateToday = new Date();
       document.getElementById("error-{{$coordinate['led']->id}}").value = 'true';
         $('#book_dates-{{$coordinate["led"]->id}}').daterangepicker({
           opens: 'left',
           //singleDatePicker: true,
           minDate: dateToday,
           autoApply : true,
           isInvalidDate: function(date) {
             // var dateRanges = [
             //       { 'start': moment('2022-06-10'), 'end': moment('2022-06-12') },
             //       { 'start': moment('2022-07-20'), 'end': moment('2022-07-25') },
             //   ];
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
             //alert(startDate+' : '+endDate);
            // alert(picker.startDate.format('YYYY-MM-DD')+' : '+picker.endDate.format('YYYY-MM-DD'));
            //alert(pickerStartDate.getTime()+' : '+startDate.getTime());
             //if(!(date1.getTime()<startDate.getTime()&&date2.getTime()>endDate.getTime()))
               if((startDate.getDate() >= date1.getDate() && startDate.getDate() <= date2.getDate())||(date1.getDate() >= startDate.getDate() && date1.getDate() <= endDate.getDate())) 
             {
               //alert('wrong');
               document.getElementById("alert-{{$coordinate['led']->id}}").innerHTML =  'Ungültiges Datum Bitte erneut auswählen'; 
                   // $('#book_dates').val('');
                    $('#error-{{$coordinate["led"]->id}}').val('true'); 
             }
             else{
             
               document.getElementById("alert-{{$coordinate['led']->id}}").innerHTML =  ''; 
               $('#error-{{$coordinate["led"]->id}}').val('false');
             }
           });
   // dateRanges.reduce(function(bool, range) {
   //                 startDateObject=new Date(range.startDate);
   //                 endDateObject=new Date(range.endDate);
   //                 if(date1.getTime()<startDateObject.getTime()&&date2.getTime()>endDateObject.getTime())
   //                 {
                       
   //                 }
   //             }
             
   
   var Difference_In_Days =parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10); 
   Difference_In_Days=Difference_In_Days+1;
           document.getElementById("total_days-{{$coordinate['led']->id}}").innerHTML = Difference_In_Days;
           document.getElementById("multiply_show-{{$coordinate['led']->id}}").innerHTML =  'X';
           document.getElementById("days_show-{{$coordinate['led']->id}}").innerHTML =  ' Tag(s)';
           document.getElementById("total_price-{{$coordinate['led']->id}}").innerHTML =  Difference_In_Days*"{{$coordinate['led']->price}}";
           
           document.getElementById("no_of_days-{{$coordinate['led']->id}}").value = Difference_In_Days;
          // alert(start.format('YYYY-MM-DD'));
         });
   
   //       $('input[name="book_dates"]').on('apply.daterangepicker', function(ev, picker) {
   //         var pickerStartDate=new Date(picker.startDate.format('YYYY-MM-DD'));
   //         var pickerEndDate=new Date(picker.endDate.format('YYYY-MM-DD'));
   //         dateRanges.forEach(range => {
   //           startDateObject=new Date(range.startDate);
   //                 startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
   //                 endDateObject=new Date(range.endDate);
   //                 endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
   //           //alert(startDate+' : '+endDate);
   //          // alert(picker.startDate.format('YYYY-MM-DD')+' : '+picker.endDate.format('YYYY-MM-DD'));
   //          //alert(pickerStartDate.getTime()+' : '+startDate.getTime());
   //           if(pickerStartDate.getTime()<startDate.getTime()&&pickerEndDate.getTime()>endDate.getTime())
   //           {
   //            // alert('Invalid Date Choosen');
   //      $('input[name="book_dates"]').val('');  
   //      doument.getElementById("alert").innerHTML =  'Invalid Date';     
   //           }
   //         });
   //         var today = new Date();
   
   // var todayDate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
   //   //  if(picker.startDate.format('YYYY-MM-DD')<todayDate)
   //   //  {
   //   //    alert('Invalid Date Choosen');
   //   //    $('input[name="book_dates"]').val(''); 
   //   //  }   
   //   //do something, like clearing an input
   //  // alert(picker.startDate.format('YYYY-MM-DD'));
   //   //$('#daterange').val('');
   // });
   //       $('input[name="book_dates"]').on('apply.daterangepicker', function(ev, picker) {
   //         var pickerStartDate=new Date(picker.startDate.format('YYYY-MM-DD'));
   //         var pickerEndDate=new Date(picker.endDate.format('YYYY-MM-DD'));
   //         dateRanges.forEach(range => {
   //           startDateObject=new Date(range.startDate);
   //                 startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
   //                 endDateObject=new Date(range.endDate);
   //                 endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
   //           //alert(startDate+' : '+endDate);
   //          // alert(picker.startDate.format('YYYY-MM-DD')+' : '+picker.endDate.format('YYYY-MM-DD'));
   //          //alert(pickerStartDate.getTime()+' : '+startDate.getTime());
   //           if(pickerStartDate.getTime()<startDate.getTime()&&pickerEndDate.getTime()>endDate.getTime())
   //           {
   //            // alert('Invalid Date Choosen');
   //      $('input[name="book_dates"]').val('');  
   //      document.getElementById("alert").innerHTML =  'Invalid Date';     
   //           }
   //         });
   //         var today = new Date();
   
   // var todayDate = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
   //   //  if(picker.startDate.format('YYYY-MM-DD')<todayDate)
   //   //  {
   //   //    alert('Invalid Date Choosen');
   //   //    $('input[name="book_dates"]').val(''); 
   //   //  }   
   //   //do something, like clearing an input
   //  // alert(picker.startDate.format('YYYY-MM-DD'));
   //   //$('#daterange').val('');
   // });
 
       });
       </script>
@else
<script>
  function isDecimal(n)
{
   var result = (n - Math.floor(n)) !== 0; 
   
  if (result)
  //alert('Number has a decimal place.');
    //return 'Number has a decimal place.';
    return true;
   else
   //alert('It is a whole number.');
     //return 'It is a whole number.';
     return false;
  }
      $(function() {
         var a = moment("2022-06-10");
       var b = moment("2022-06-12");
       var x = moment("2022-07-20");
       var y = moment("2022-07-25");
       var dates=@json($disableDates);
       var dateRanges=@json($disableDates);
       var dateToday = new Date();
       var maxSpan=0;
       //$('#error').val('true'); 
       document.getElementById("error-{{$coordinate['led']->id}}").value = 'true';
       if('{{$coordinate["led"]->bookingduration}}'=='3 Days')
   {
      minSpan['{{$coordinate["led"]->id}}']=2;
   }
   if('{{$coordinate["led"]->bookingduration}}'=='1 Week')
   {
      minSpan['{{$coordinate["led"]->id}}']=6;
     // alert(minSpan);
   }
   if('{{$coordinate["led"]->bookingduration}}'=='1 Month')
   {
      minSpan['{{$coordinate["led"]->id}}']=29;
     // alert(minSpan);
   }
   if('{{$coordinate["led"]->bookingduration}}'=='3 Month')
   {
      minSpan['{{$coordinate["led"]->id}}']=89;
   }
   if('{{$coordinate["led"]->bookingduration}}'=='6 Month')
   {
      minSpan['{{$coordinate["led"]->id}}']=179;
   }
         $('#book_dates-{{$coordinate["led"]->id}}').daterangepicker({
           opens: 'left',
          // singleDatePicker: true,
          // "maxSpan": {
          //      "days": maxSpan
          //                  },
          "minSpan": {
               "days": minSpan['{{$coordinate["led"]->id}}']
                           },
           autoApply : true,
           minDate: dateToday,
           isInvalidDate: function(date) {
             // var dateRanges = [
             //       { 'start': moment('2022-06-10'), 'end': moment('2022-06-12') },
             //       { 'start': moment('2022-07-20'), 'end': moment('2022-07-25') },
             //   ];
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
   
   var Difference_In_Days =parseInt((date2 - date1) / (1000 * 60 * 60 * 24), 10); 
   Difference_In_Days=Difference_In_Days+1;
   //alert(Difference_In_Days);
   if (dateRanges.length>0) {
    dateRanges.forEach(range => {
             startDateObject=new Date(range.startDate);
                   startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
                   endDateObject=new Date(range.endDate);
                   endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
             //alert(startDate+' : '+endDate);
            // alert(picker.startDate.format('YYYY-MM-DD')+' : '+picker.endDate.format('YYYY-MM-DD'));
            //alert(pickerStartDate.getTime()+' : '+startDate.getTime());
             //if(!(date1.getTime()<startDate.getTime()&&date2.getTime()>endDate.getTime()))
               if((startDate.getDate() >= date1.getDate() && startDate.getDate() <= date2.getDate())||(date1.getDate() >= startDate.getDate() && date1.getDate() <= endDate.getDate())) 
             {
               //alert('wrong');
              // alert('Invalid Date Selection');
               document.getElementById("alert-{{$coordinate['led']->id}}").innerHTML =  'Ungültiges Datum Bitte erneut auswählen'; 
                   // $('#book_dates').val('');
                    //$('#error').val('true'); 
                    document.getElementById("error-{{$coordinate['led']->id}}").value = 'true';
             }
             else{
             
               document.getElementById("alert-{{$coordinate['led']->id}}").innerHTML =  ''; 
              // $('#error').val('false');
               document.getElementById("error-{{$coordinate['led']->id}}").value = 'false';

               if (isDecimal(Difference_In_Days/(minSpan['{{$coordinate["led"]->id}}']+1))) {
            document.getElementById("alert-{{$coordinate['led']->id}}").innerHTML =  'Ungültiges Datum Bitte erneut auswählen'; 
                   // $('#book_dates').val('');
                    //$('#error').val('true'); 
                    document.getElementById("error-{{$coordinate['led']->id}}").value = 'true';
                    $("#myModal-{{$coordinate['led']->id}}").modal('show');
           } else {
            document.getElementById("alert-{{$coordinate['led']->id}}").innerHTML =  ''; 
              // $('#error').val('false');
               document.getElementById("error-{{$coordinate['led']->id}}").value = 'false';
           }
             }
           });
   } else {
    if (isDecimal(Difference_In_Days/(minSpan['{{$coordinate["led"]->id}}']+1))) {
            document.getElementById("alert-{{$coordinate['led']->id}}").innerHTML =  'Ungültiges Datum Bitte erneut auswählen'; 
                   // $('#book_dates').val('');
                    //$('#error').val('true'); 
                    document.getElementById("error-{{$coordinate['led']->id}}").value = 'true';
                    $("#myModal-{{$coordinate['led']->id}}").modal('show');
           } else {
            document.getElementById("alert-{{$coordinate['led']->id}}").innerHTML =  ''; 
              // $('#error').val('false');
               document.getElementById("error-{{$coordinate['led']->id}}").value = 'false';
           }
   }
  
          
   // dateRanges.reduce(function(bool, range) {
   //                 startDateObject=new Date(range.startDate);
   //                 endDateObject=new Date(range.endDate);
   //                 if(date1.getTime()<startDateObject.getTime()&&date2.getTime()>endDateObject.getTime())
   //                 {
                       
   //                 }
   //             }
             
   
   
           document.getElementById("total_days-{{$coordinate['led']->id}}").innerHTML = Difference_In_Days;
           document.getElementById("multiply_show-{{$coordinate['led']->id}}").innerHTML =  'X';
           document.getElementById("days_show-{{$coordinate['led']->id}}").innerHTML =  ' Tag(e)';
           document.getElementById("total_price-{{$coordinate['led']->id}}").innerHTML =  Difference_In_Days*"{{$coordinate['led']->price}}";
           
           document.getElementById("no_of_days-{{$coordinate['led']->id}}").value = Difference_In_Days;




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
     zoom:15
       });
   
         //alert(value.title+' : '+value.price);
         const markerIcon = {
    url: "{{asset('assets/led-map-marker/marker2.png')}}",
    scaledSize: new google.maps.Size(40, 40)
  };
        
        
       $.each( locations, function( index, value ){
         
         var markerLabel = "€"+ value.price;
         //alert(value.image);
         var infowindow = new google.maps.InfoWindow({
          content: "<div style='max-width:170px'><div style='float:left;width:100%'><img src='"+value.image+"' style='max-width:100%;max-height:180px' ></div><div style='float:left;margin-top:7px'><b style='font-weight:bold;font-size:12px'><a href='led-detail/"+value.id+"' style='text-decoration: none;outline: none;' title='Information'>"+value.title+"</a></b><br/> <h2 style='font-weight:bold;font-size:12px;color:blue'>"+value.price +"€</h2> </div> <div style='float:right'><a href='javascript:;' data-toggle='modal' data-target='#exampleModal-"+value.id+"' style='border:none'> <span class='btn btn-danger classinfobtnbook' style='margin-top:5px'> Buchung </span></a> </div></div>", 
          
       });
       
 

         //alert(value.title+' : '+value.price);
           // increment_2++;
           var marker = mymap.addMarker({
           //   lat: value.lat,
           //   lng: value.lng,
           
           lat: value.lat,
         lng: value.long,
             title: value.title+" Pries "+ value.price +"€/Tag",
             icon: markerIcon,
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
@endsection




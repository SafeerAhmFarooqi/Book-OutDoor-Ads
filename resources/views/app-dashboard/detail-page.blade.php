 
@extends('layouts.led-theme')

@section('content')
      <section id="detail-page">
         <div class="container-fluid">
            <div class="flex-sb f-d-col-dp">
               <div class="flex-sb flex-sb-sm m-b-sm-dp" style="padding-top:60px">
                  <div>
                     <h2 class="sp-h-24 font-20 font-16-sm font-w-600 w3-theme-text">{{$led->title}}</h2>
                     <p class="sp-text theme-light-gray"><i class="fa fa-map-marker"></i> {{$led->location}}</p>
                  </div>
                               </div>
               
            </div>
         </div>
      </section>
      <!--search-->
      <section id="detail" class="w3-text-black bg-gray w3-padding-25-top">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12 col-xs-12 col-md-7 col-lg-7 w3-margin-bottom-25">
                  <div id="myCarousel" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner" >
                         @foreach ($led->images as $image)
                  @php
                      $increment++;
                  @endphp


                        <div class="item {{$increment==1?'active' : ''}}">
                           <img src="{{asset('storage/'.$image->path)}}" alt="" class="carousal-img">
                           <div class="w3-padding w3-display-bottomright">
                              <div class="flex-end p-t-10">
                                 {{-- <button  class="like-link m-r-10"><i class="fa fa-camera"></i> 1 Photos</button>
                                 <a href="" class="like-link"><i class="fa fa-map-marker"></i> See on map</a> --}}
                              </div>
                           </div>
                        </div>
                       @endforeach                       
                       </div>
                     <!-- Left and right controls -->
                     <a class="left carousel-control w3-border-radius-20" href="#myCarousel" data-slide="prev">
                     <i class="glyphicon-chevron-left fa fa-chevron-left"></i>
                     </a>
                     <a class="right carousel-control w3-border-radius-20" href="#myCarousel" data-slide="prev">
                     <i class="glyphicon-chevron-right fa fa-chevron-right"></i>
                     </a>
                  </div>
                  <!--details-->
                  <div class="flex-con-sb w3-padding-48-top">
                     <h2 class="ff-lagufa-n font-20 font-16-sm font-w-600 w3-theme-text">LED Details</h2>
                     <h2 class="ff-lagufa-n font-30 font-w-600 font-18-sm p-l-5"> {{$led->price}} €</h2>

                  </div>
                   <h3><i class="fa fa-map-marker"></i> {{$led->location}} </h3>
                 
                
                  <hr>
                  <div class="flex-con-sb flex-col-600">
                     <div class="det-col">
                        <h2 class="ff-lagufa-n font-18 font-12-sm font-w-600 w3-theme-text">Typ </h2>
                        <div class="flex-sb jus-con-center w3-padding-12-top">
                           <p class="ff-lagufa-n font-16 font-12-sm font-w-400 p-l-5">{{$led->multimedia?'Multimedia' : 'Singlemedia'}}</p>
                        </div>
                     </div>
                     <div class="det-col">
                        <h2 class="ff-lagufa-n font-18 font-12-sm font-w-600  w3-theme-text">Sichtkontakte </h2>
                        <div class="flex-sb jus-con-center w3-padding-12-top">
                           <h2 class="ff-lagufa-n font-16 font-12-sm font-w-400 p-l-5">{{$led->estviews??'-'}}</h2> 
                        </div>
                     </div>
                     <div class="det-col">
                        <h2 class="ff-lagufa-n font-18 font-12-sm font-w-600 w3-theme-text w3-center">Buchen   </h2>
                        <div class="flex-sb jus-con-center w3-padding-12-top">
                           <h2 class="ff-lagufa-n font-16 font-12-sm font-w-400 p-l-5">{{$led->bookingduration}}</h2>
                        </div>
                     </div>
                  </div>
                  <hr>
                  <div class="desc">
                     <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text">Beschreibung</h2>
                     
                     <div class="w3-padding-24-top font-18 font-12-sm theme-light-gray">
                        {!! preg_replace('#<script(.*?)>(.*?)</script>#is', '', $led->description) !!}
                     </div>
                     <div class="flex-con-sb w3-padding-24-top">
                        <p class="font-16 font-12-sm w3-theme-text">REF NO:  {{$led->id}}</p>
                        <p class="font-16 font-12-sm w3-theme-text">ADDED ON: {{$led->created_at->format('F d,y')}}</p>
                     </div>
                  </div>
                  <hr>
                  <div >
                      
                     <div id="mymap"></div>
                  </div>
                 
                  <div class="desc">
                     <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text" style="padding: 50px 50px 10px 0px !important;">Leave Comments </h2>
                        <div class="media-body">
                           @if (Auth::check()&&Auth::user()->hasRole('User'))
                           
                            <livewire:comments :ledId="$led->id" />
                        
                           @else
                           <div class="alert alert-warning">
                                    <a href="{{route('user.login','led-detail-'.$led->id)}}" class="btn btn-xs btn-warning pull-right">Login  </a>
                                    <strong>Warning:</strong> You need to sign in your account for comment 
                                </div>
                           @endif
                              




                            <!--comment -->
                                    
                                      <!--end comment -->     


                            </div>


                  </div>
                   
               </div>
               <!--left-col-->
               <div class="col-sm-12 col-xs-12 col-md-5 col-lg-5">
                    <div class="w3-margin-48-top  box-shad" id="stick">
                     

                     <!-- right side booking -->
                            <div class="order-booking">
                      <div class=" ">
                          <div class="topbookingform"> 
                          <div class="order-body">
                              @include('common.validation')
                              <div class="form-group">

                  <input required="" name="product_id" type="hidden" value="3" class="form-control" id="product_id">
                  <input required="" name="price" type="hidden" class="form-control" id="price">
                 <input required="" name="selected_date_array" value="" type="hidden" class="form-control" id="selected_date_array">
                  <input type="hidden" value="booking2" name="redirectFile">
                                  <label for="booking-daterange">Buchungszeitraum wählen-{{$led->bookingduration}}</label>



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
                                      <input type="text" class="form-control" name="book_dates" id="book_dates" placeholder="Select Date" />
                                      <input type="hidden" name="error" id="error">
                                      <h6 id="alert" style="color: red;"></h6>
                                      <input type="hidden" id="no_of_days" name="no_of_days">
                                  </div>
                                  

                              </div>


                          <ul class="list-group" style="padding:2px;font-size:13px;">
                          <li class="list-group-item listordertaking" style="background:none;border:none;padding:0;padding-top:10px"> <span id="per_booking_cost" style="font-weight:bold;color:#333"> <!-- € --> </span> <span id="id_x" style="font-weight:bold;color:#333"> {{$led->price}} € </span><span style="font-weight:bold;color:#333" id="multiply_show"></span> <span style="font-weight:bold;color:#333" id="total_days"></span><span id="days_show"></span> <span id="days_id"></span> <span class=" pull-right" id="total_cost">  </span></li>
                          <!--   <li class="list-group-item listordertaking"> 25 &euro; x  <span class="badge pull-right" >12</span></li>
                          --> </ul>

                           

                              <table class="table" style="width:100%">
                                  <tbody>



                                      <tr>
                                          <th style="text-align: left;"> <span style="line-height: 45px;color:#333;font-weight:bold"> Gesamtpreis </span></th>
                                          <td style="text-align: right;"><strong id="total_price">                                        </strong><b> €</b> </td>
                                      </tr>
                                  </tbody>
                              </table>
                        <div style="text-align: center;">
                          <button type="submit" class="buttonsubmit btn btn-default" name="led_id" value="{{$led->id}}" style="font-size:15px">
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
         </div>
      </section>
     
      @endsection






      @section('modals')
<div class="modal" id="showLedCalanderModal">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
        <div class="modal-body" id="showLedCalander">
          <!--<input type="text" name="daterange" id="demoDate" class="demo">-->
        </div>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('pageStyles')
    <style>
      #mymap {
      		  
              width: 100%;
              height: 500px;
            margin-top: 12%;
         }
    </style>
@endsection

@section('pageScripts')
<script>
   
</script>
<script src="{{ asset('assets/Metronic-Theme/plugins/global/plugins.bundle.js') }}"></script>
<script src="{{ asset('assets/Metronic-Theme/js/scripts.bundle.js') }}"></script>
<script src="{{asset('assets/Metronic-Theme/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
<script>
  //     var options = {selector: "#kt_docs_tinymce_basic",
  //   menubar: false,
  //   statusbar: false,
  //   toolbar: false,
  //   readonly: 1,
  //                     };
  var options = {selector: "#kt_docs_tinymce_basic",
  //theme : 'advanced',
  plugins : 'autoresize',
  width: '100%',
  height: '25%',
  autoresize_min_height: 400,
  autoresize_max_height: 800,
  menubar: false,
    statusbar: false,
    toolbar: false,
    readonly: 1,
                      };
  
  if (KTApp.isDarkMode()) {
      options["skin"] = "oxide-dark";
      options["content_css"] = "dark";
  }
  
  tinymce.init(options);
  </script>
<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>



<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>















{{-- <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery/latest/jquery.min.js"></script> --}}

<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

{{-- <script>
  $(function() {
    $('input[name="book_dates"]').daterangepicker({
      opens: 'left'
    }, function(start, end, label) {
      console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
  });
  </script> --}}
  <script type="text/javascript">


    // var locations = @json($coordinates);
    var coordinates=JSON.parse(@json($coordinates));
//alert(co.lat);
   // var increment=0;
   // var increment_2=0;

   var mymap = new GMaps({
     el: '#mymap',
     lat: coordinates.lat,
 lng: coordinates.long,
 zoom:6
   });
   
   const image = {
    url: "{{asset('storage/'.$image->path)}}",
    // This marker is 20 pixels wide by 32 pixels high.
    size: new google.maps.Size(100, 100),
    // The origin for this image is (0, 0).
    origin: new google.maps.Point(0, 0),
    // The anchor for this image is the base of the flagpole at (0, 32).
    anchor: new google.maps.Point(0, 32),
  }
  
   mymap.addMarker({
       //   lat: value.lat,
       //   lng: value.lng,
       lat: coordinates.lat,
       lng: coordinates.long,
       icon: '',
       title: "{{$led->title}}",
        //  title: value.title,
         mouseout: function(e) {
           this.setIcon('');
         },
         mouseover: function(e) {
          this.setIcon(image);
         }
       });
  
       


  //  $.each( locations, function( index, value ){
  //      // increment_2++;
  //      mymap.addMarker({
  //      //   lat: value.lat,
  //      //   lng: value.lng,
  //      lat: value.lat,
  //    lng: value.long,
  //        title: value.title,
  //      //   click: function(e) {
  //      //     alert('This is '+value.status+' : '+increment_2+', gujarat from India.');
  //      //   }
  //      });
  // });


 </script>

@if ($led->bookingduration=='All')
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
         $('input[name="book_dates"]').daterangepicker({
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
   dateRanges.forEach(range => {
             startDateObject=new Date(range.startDate);
                   startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
                   endDateObject=new Date(range.endDate);
                   endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
             //alert(startDate+' : '+endDate);
            // alert(picker.startDate.format('YYYY-MM-DD')+' : '+picker.endDate.format('YYYY-MM-DD'));
            //alert(pickerStartDate.getTime()+' : '+startDate.getTime());
             //if(!(date1.getTime()<startDate.getTime()&&date2.getTime()>endDate.getTime()))
               if((startDate.getTime() >= date1.getTime() && startDate.getTime() <= date2.getTime())||(date1.getTime() >= startDate.getTime() && date1.getTime() <= endDate.getTime())) 
             {
               //alert('wrong');
               document.getElementById("alert").innerHTML =  'Invalid Date Please Select Again'; 
                   // $('#book_dates').val('');
                    $('#error').val('true'); 
             }
             else{
               a=startDate.getTime() - endDate.getTime();
               disableDays=Math.round(a / (1000 * 3600 * 24)); 
               disableDays=(disableDays-1)*-1;
               document.getElementById("alert").innerHTML =  ''; 
               $('#error').val('false');
             }
           });
   // dateRanges.reduce(function(bool, range) {
   //                 startDateObject=new Date(range.startDate);
   //                 endDateObject=new Date(range.endDate);
   //                 if(date1.getTime()<startDateObject.getTime()&&date2.getTime()>endDateObject.getTime())
   //                 {
                       
   //                 }
   //             }
             
   var Difference_In_Time = date2.getTime() - date1.getTime();
   var Difference_In_Days = Math.round(Difference_In_Time / (1000 * 3600 * 24));
   Difference_In_Days=Difference_In_Days-disableDays+2;
           document.getElementById("total_days").innerHTML = Difference_In_Days;
           document.getElementById("multiply_show").innerHTML =  'X';
           document.getElementById("days_show").innerHTML =  ' Days';
           document.getElementById("total_price").innerHTML =  Difference_In_Days*{{$led->price}};
           
           document.getElementById("no_of_days").value = Difference_In_Days;
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
      $(function() {
         var a = moment("2022-06-10");
       var b = moment("2022-06-12");
       var x = moment("2022-07-20");
       var y = moment("2022-07-25");
       var dates=@json($disableDates);
       var dateRanges=@json($disableDates);
       var dateToday = new Date();
       var maxSpan=0;
       $('#error').val('true'); 
       if('{{$led->bookingduration}}'=='3 Days')
   {
      maxSpan=2;
   }
   if('{{$led->bookingduration}}'=='1 Week')
   {
      maxSpan=6;
   }
   if('{{$led->bookingduration}}'=='1 Month')
   {
      maxSpan=29;
   }
   if('{{$led->bookingduration}}'=='3 Month')
   {
      maxSpan=89;
   }
   if('{{$led->bookingduration}}'=='6 Month')
   {
      maxSpan=179;
   }
         $('input[name="book_dates"]').daterangepicker({
           opens: 'left',
          // singleDatePicker: true,
          "maxSpan": {
               "days": maxSpan
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
          //  alert(start)
            var date1 = new Date(start);
   var date2 = new Date(start);
   var date3 = new Date(start);
   var date4 = new Date(end);
   if('{{$led->bookingduration}}'=='3 Days')
   {
      date2.setDate(date2.getDate()+3);
      date3.setDate(date3.getDate()+2);
      date3.setTime(date3.getTime() + (6*60*60*1000));
   }
   if('{{$led->bookingduration}}'=='1 Week')
   {
      date2.setDate(date2.getDate()+7);
      date3.setDate(date3.getDate()+6);
      date3.setTime(date3.getTime() + (6*60*60*1000));
   }
   if('{{$led->bookingduration}}'=='1 Month')
   {
      date2.setDate(date2.getDate()+30);
      date3.setDate(date3.getDate()+29);
      date3.setTime(date3.getTime() + (6*60*60*1000));
   }
   if('{{$led->bookingduration}}'=='3 Month')
   {
      date2.setDate(date2.getDate()+90);
      date3.setDate(date3.getDate()+89);
      date3.setTime(date3.getTime() + (6*60*60*1000));
   }
   if('{{$led->bookingduration}}'=='6 Month')
   {
      date2.setDate(date2.getDate()+180);
      date3.setDate(date3.getDate()+179);
      date3.setTime(date3.getTime() + (6*60*60*1000));
   }
 
                  dateRanges.reduce(function(bool, range) {
                   startDateObject=new Date(range.startDate);
                   startDate=startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate();
                   endDateObject=new Date(range.endDate);
                   endDate=endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate();
                   //alert('date1 : '+date1+'date2 : '+date3+'date3 : '+startDateObject+'date4 : '+endDateObject);
                  //var maxSpanTime=date4.getTime() - date1.getTime();
                  // const maxSpanTime = Math.abs(date4 - date1);
                  // const maxSpanCheck = Math.ceil(maxSpanTime / (1000 * 60 * 60 * 24)); 
                  // //var maxSpanCheck=Math.round(maxSpanTime / (1000 * 3600 * 24));
                   const _MS_PER_DAY = 1000 * 60 * 60 * 24;

// a and b are javascript Date objects
function dateDiffInDays(a, b) {
  // Discard the time and time-zone information.
  const utc1 = Date.UTC(a.getFullYear(), a.getMonth(), a.getDate());
  const utc2 = Date.UTC(b.getFullYear(), b.getMonth(), b.getDate());

  return Math.floor((utc2 - utc1) / _MS_PER_DAY);
}
var maxSpanCheck=dateDiffInDays(date1, date4)+1;
                  //alert(dateDiffInDays(date1, date4)+1);
                   if ((startDateObject >= date1 && startDateObject <= date3)||(date1 >= startDateObject && date1 <= endDateObject)||(maxSpanCheck!=maxSpan+1))  {
                    // alert('clash');
                    document.getElementById("alert").innerHTML =  'Invalid Date Please Select Again'; 
                   // $('#book_dates').val('');
                    $('#error').val('true'); 
                   }else{
                     document.getElementById("alert").innerHTML =  '';
                     $('#error').val('false');
                    // $('#book_dates').val(start); 
                   }
                   //return bool || (date >= moment(startDate) && date <= moment(endDate));
               }, false);
  
             
   var Difference_In_Time = date2.getTime() - date1.getTime();
   var Difference_In_Days = Math.round(Difference_In_Time / (1000 * 3600 * 24));
   Difference_In_Days=Difference_In_Days;
  // alert(Difference_In_Days);
           document.getElementById("total_days").innerHTML = Difference_In_Days;
           document.getElementById("multiply_show").innerHTML =  'X';
           document.getElementById("days_show").innerHTML =  ' Days';
           document.getElementById("total_price").innerHTML =  Difference_In_Days*{{$led->price}};
           //document.getElementById("alert").innerHTML =  ''; 
           document.getElementById("no_of_days").value = Difference_In_Days;
          // alert('check 1');




         });
   
        
       });
  
       </script> 
@endif

 
@endsection
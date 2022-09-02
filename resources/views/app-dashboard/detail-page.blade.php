
@extends('layouts.led-theme')

@section('content')
<div class="site-blocks-cover inner-page-cover overlay aos-init aos-animate" style="background-image: url({{asset('assets/Led-Theme/images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12">
          
          
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1 class="" data-aos="fade-up">{{$led->title}}</h1>
              <p data-aos="fade-up" data-aos-delay="100">{{$led->location}}</p>
            </div>
          </div>

         

        </div>
      </div>
    </div>
  </div>  


  
 <div class="site-section">
   
    <div class="container">
      
      <div class="row">
        
        <div class="col-md-8">
         @include('common.validation')
  

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                  @foreach ($led->images as $image)
                  @php
                      $increment++;
                  @endphp
                  <div class="carousel-item {{$increment==1?'active' : ''}}">
                    <img class="d-block w-100" src="{{asset('storage/'.$image->path)}}" style="height: 500px;" alt="First slide">
                  </div>
                  @endforeach
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>
            <div class="clearfix"> </div>
          <br><br>          
   
        </div>
        <div class="col-lg-4 ml-auto">

        <div class="order-booking">
                      <div class="box">
                          <p class="topbookingform">Wählen Sie Ihren Buchungszeitraum aus, damit wir Ihnen den Preis anzeigen können.</p>
                          <div class="order-body">
                              
                              <div class="form-group">

                  <input required="" name="product_id" type="hidden" value="3" class="form-control" id="product_id">
                  <input required="" name="price" type="hidden" class="form-control" id="price">
                 <input required="" name="selected_date_array" value="" type="hidden" class="form-control" id="selected_date_array">
                  <input type="hidden" value="booking2" name="redirectFile">
                                  <label for="booking-daterange">Booking Dates</label>



                                  <div class="input-group">
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
                                      <input type="text" name="book_dates" value="{{\Carbon\Carbon::now()}}" />
                                      <h6 id="alert" style="color: red;"></h6>
                                      <input type="hidden" id="no_of_days" name="no_of_days">
                                  </div>
                                  

                              </div>


                          <ul class="list-group" style="padding:2px;font-size:13px;">
                          <li class="list-group-item listordertaking" style="background:none;border:none;padding:0;padding-top:10px"> <span id="per_booking_cost" style="font-weight:bold;color:#333"> € </span> <span id="id_x" style="font-weight:bold;color:#333"> {{$led->price}} </span><span style="font-weight:bold;color:#333" id="multiply_show"></span> <span style="font-weight:bold;color:#333" id="total_days"></span><span id="days_show"></span> <span id="days_id"></span> <span class=" pull-right" id="total_cost">  </span></li>
                          <!--   <li class="list-group-item listordertaking"> 25 &euro; x  <span class="badge pull-right" >12</span></li>
                          --> </ul>

                          <ul class="list-group" style="margin-top: 20px; display: none;" id="sicial_id_sh">
                          <li class="list-group-item bookingoff">Werbefoto <span class=" pull-right">  <del> 99 €</del>  </span></li>
                          <li class="list-group-item bookingoff ">Social Media Beitrag  <span class=" pull-right">  <del> 99 €</del>  </span></li>
                          <li class="list-group-item bookingoff">Facebook &amp; Instagram Post  <span class=" pull-right">  <del> 199 €</del>  </span></li>
                          </ul>

                              <table class="table" style="width:100%">
                                  <tbody>



                                      <tr>
                                          <th style="text-align: left;"> <span style="line-height: 45px;color:#333;font-weight:bold"> Total Price </span></th>
                                          <td style="text-align: right;"><strong id="total_price">                                        </strong><b>€</b> </td>
                                      </tr>
                                  </tbody>
                              </table>

                          <button type="submit" class="buttonsubmit btn btn-default" name="led_id" value="{{$led->id}}" style="font-size:15px">
                          Add to Cart                            </button>
                          </form>
                            
                          <hr>
                          <p id="underactionbutton" style="font-size:12px;text-align: center"> Geben Sie Ihren Buchungszeitraum ein, um den Gesamtpreis pro Tag zu sehen. </p>
                               
                          </div>

                      </div>
                  </div>
         

        </div>

      </div>

      <div class="clearfix"> </div>


      <div class="container" style="padding:35px;background:#fff">

        <div class="wrapper">
        <h1  > {{$led->title}} </h1>
        <h4> <i class="fa fa-map-marker" style="font-size:24px;color:#2c35da"></i> {{$led->location}}  </h4>
</div>
<div class="wrapper" style="margin-top:-30px">
        <h4 style="float:right">
        <span style="padding-left:50px"> <i class="fa fa-eur" style="font-size:15px"></i> {{$led->price}} / 
            <span style="font-size:10px"> day</span>&nbsp;&nbsp;&nbsp;</span>
        </h4> 
        <h4 style="float:right"> <i class="fa fa-handshake-o" style="font-size:24px;color:#2c35da"></i> {{$led->tax}}  </h4>
    </div>
    
    <div class="clearfix"></div>


        
        <div class="container" style="padding-top:40px;">
          {!! preg_replace('#<script(.*?)>(.*?)</script>#is', '', $led->description) !!}
        </div>
         <div class="wrapper">   <div id="mymap"></div></div>
      </div>
      <div style="background:#fff;margin:5px;">
        <div class="card">
          
          <div class="card-body">
            <h3 class="card-text">Comments : </h3>
          </div>
        </div>
      </div>
      @if ($led->comments->where('status',true)->count()>0)
          @foreach ($led->comments->where('status',true) as $comment)
          <div style="background:#fff;margin:5px;">
            <div class="card">
              
              <div class="card-body">
                <h5 class="card-text">{{$comment->user->firstname.' '.$comment->user->lastname}} </h5>
                <p>{{$comment->comment}}</p>
              </div>
            </div>
          </div>
          @endforeach
      @else
      <div style="background:#fff;margin:5px;">
        <div class="card">
          
          <div class="card-body">
            <h6 class="card-text">This led Has No Comments</h6>
          </div>
        </div>
      </div>
      @endif
     

     
     @if (Auth::check()&&Auth::user()->hasRole('User'))
     <div>
      <livewire:comments :ledId="$led->id" />
     </div>
     @else
     <div class="card">
      
      <div class="card-body">
        <h5 class="card-title">Please Sign in to Comment here</h5>
        <a href="{{route('user.login')}}" class="btn btn-primary">Sign In</a>
      </div>
    </div>
     @endif
     



    </div>
  </div>

    
@endsection

@section('Styles')
@parent
<link href="{{ asset('assets/Metronic-Theme/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/Metronic-Theme/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    {{-- <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/style.css')}}"> --}}

  {{-- <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/bootstrap.min.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('assets/Bootstrap-4-1/bootstrap.min.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    /*
    # Welcome
    --------------------------------*/

    #mymap {
      		  
      		width: 100%;
      		height: 500px;
          margin-top: 12%;
    	}
    .home-page-welcome {
        position: relative;
        padding: 96px 0;
        background: url("../../www.led-werbeflaechen.de/images/slide1.jpg") no-repeat center;
        background-size: cover;
        z-index: 99;
    }
    
    .home-page-welcome::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 100%;
        background: rgba(21,21,21,.9);
    }
    
    .welcome-content .entry-title {
        position: relative;
        padding-bottom: 24px;
        font-size: 36px;
        font-weight: 600;
        color: #fff;
    }
    
    .welcome-content .entry-title::before {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 64px;
        height: 4px;
        border-radius: 2px;
        background: #2c35da;
    }
    
    .welcome-content .entry-content {
        font-size: 14px;
        line-height: 2;
        color: #b7b7b7;
    }
    
    .home-page-welcome img {
        display: block;
        width: 100%;
    }
    
    @media screen and (max-width: 992px){
        .home-page-welcome img {
            margin-bottom: 60px;
        }
    }
    
    /*
    
    /*
    # Home Milestone
    --------------------------------*/
    .home-page-limestone {
        padding: 96px 0;
    }
    
    .home-page-limestone .section-heading .entry-title {
        padding-bottom: 36px;
        line-height: 1.6;
    }
    
    .home-page-limestone .section-heading p {
        font-size: 14px;
        color: #595858;
    }
    .site-footer::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        z-index: -1;
        width: 100%;
        height: 101%;
        background: rgba(22,22,22,.92);
    }
    .footeruiclass li a
    {
      color: #fff;
      font-size: 15px;
    }
    .footeruiclass
    {
        padding-top: 15px;
    }
    .box{
      position: relative;
    border-radius: 5px;
    -webkit-box-shadow: 0px 3px 3px 3px rgb(0 0 0 / 30%);
    box-shadow: 0px 3px 3px 3px rgb(0 0 0 / 30%);
}.order-body {
    padding: 10px 15px;
    background: #f9f9f9;
    border: 1px solid #eee;
}
 .topbookingform {
color: #333;
    font-weight: bolder;
    font-size: 12px;
    padding: 15px;
    padding-bottom: 0 !important;
    font-family: 'Montserrat', sans-serif;
}
.form-group label {
font-size: 14px;
    /* margin: 0px 0px 3px; */
    font-family: 'cmd';
    color: #333;
    font-family: 'Montserrat', sans-serif !important;
    font-weight: bold;
}
 .form-control {
    font-size: 16px;
    color: #111;
    letter-spacing: .7px;
}
.bookings .order-booking .box {
    position: -webkit-sticky;
    position: sticky;
    top: 50px;
}
.bookings .order-booking .box {
    position: relative;
    border-radius: 5px;
    -webkit-box-shadow: 0px 3px 3px 3px rgb(0 0 0 / 30%);
    box-shadow: 0px 3px 3px 3px rgb(0 0 0 / 30%);
}.topbookingform {
    font-weight: bold;
    font-size: 12px;
    padding: 15px;
    padding-bottom: 0 !important;
}.bookings .order-booking .box .order-body {
    padding: 10px 15px;
    background: #f9f9f9;
    border: 1px solid #eee;
}  
 .list-group-item:last-child {
    margin-bottom: 0;
    border-bottom-right-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.list-group-item:first-child {
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
}.table tbody tr td strong {
    color: #2c35da;
    font-size: 24px;
}.btn-default {
    width: 100%;
    background: #2c35da;
    color: #fff;
    margin: 5px 0px 10px;
    font-family: 'Montserrat', sans-serif;
    font-size: 12px !important;
} .box {
    position: -webkit-sticky;
    position: sticky;
    top: 50px;
}


.accordian {
    width: 100%; height: 420px;
    overflow: hidden;
     
    box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
    -webkit-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
    -moz-box-shadow: 0 0 10px 1px rgba(0, 0, 0, 0.35);
}

/*A small hack to prevent flickering on some browsers*/
.accordian ul {
    width: 1200px;
    /*This will give ample space to the last item to move
    instead of falling down/flickering during hovers.*/
}

.accordian li {
    position: relative;
    display: block;
    width: 160px;
    float: left;
    
    border-left: 1px solid #888;
    
    box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
    -webkit-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
    -moz-box-shadow: 0 0 25px 10px rgba(0, 0, 0, 0.5);
    
    /*Transitions to give animation effect*/
    transition: all 0.5s;
    -webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    /*If you hover on the images now you should be able to 
    see the basic accordian*/
}
.accordian ul li img{
    height: 420px;
}
/*Reduce with of un-hovered elements*/
.accordian ul:hover li {width: 40px;}
/*Lets apply hover effects now*/
/*The LI hover style should override the UL hover style*/
.accordian ul li:hover {width: 640px;}


.accordian li img {
    display: block;
}

/*Image title styles*/
.image_title {
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    left: 0; bottom: 0; 
width: 640px;   

}
.image_title a {
    display: block;
    color: #fff;
    text-decoration: none;
    padding: 20px;
    font-size: 16px;
}
     .testdate{
           color: #fff;
    border: none !important;
    border-top: none !important;
      }
      .input-group-prepend
      {
        display: none;
        border: none;
      }
      .date-picker-table
      {
        
        border: none !important;
      }
    </style>
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

@section('pageScripts')
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
   mymap.addMarker({
       //   lat: value.lat,
       //   lng: value.lng,
       lat: coordinates.lat,
     lng: coordinates.long,
        //  title: value.title,
       //   click: function(e) {
       //     alert('This is '+value.status+' : '+increment_2+', gujarat from India.');
       //   }
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
dateRanges.forEach(range => {
          startDateObject=new Date(range.startDate);
                startDate=new Date(startDateObject.getFullYear()+'-'+(startDateObject.getMonth() + 1)+'-'+startDateObject.getDate());
                endDateObject=new Date(range.endDate);
                endDate=new Date(endDateObject.getFullYear()+'-'+(endDateObject.getMonth() + 1)+'-'+endDateObject.getDate());
          //alert(startDate+' : '+endDate);
         // alert(picker.startDate.format('YYYY-MM-DD')+' : '+picker.endDate.format('YYYY-MM-DD'));
         //alert(pickerStartDate.getTime()+' : '+startDate.getTime());
          if(date1.getTime()<startDate.getTime()&&date2.getTime()>endDate.getTime())
          {
            a=startDate.getTime() - endDate.getTime();
            disableDays=Math.round(a / (1000 * 3600 * 24)); 
            disableDays=(disableDays-1)*-1;
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
Difference_In_Days=Difference_In_Days-disableDays;
        document.getElementById("total_days").innerHTML = Difference_In_Days;
        document.getElementById("multiply_show").innerHTML =  'X';
        document.getElementById("days_show").innerHTML =  ' Days';
        document.getElementById("total_price").innerHTML =  Difference_In_Days*{{$led->price}};
        document.getElementById("alert").innerHTML =  ''; 
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
@endsection
@extends('layouts.led-theme')

@section('content')
<div class="site-blocks-cover inner-page-cover overlay aos-init aos-animate" style="background-image: url({{asset('assets/Led-Theme/images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12">
          
          
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1 class="" data-aos="fade-up">Largest LED Classifieds In  World</h1>
              <p data-aos="fade-up" data-aos-delay="100">You can buy, sell anything you want.</p>
            </div>
          </div>

         

        </div>
      </div>
    </div>
  </div>  


  
 <div class="site-section">
   
    <div class="container">
      
      <div class="row">
        
        <div class="col-lg-8">
          @if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{ session()->get('message') }}
    </div>
   @endif
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
   


  <h1 style="box-sizing: border-box; margin: 0px 0px 20px; font-weight: 500; line-height: 1.2; font-size: 2.5rem; color: rgb(44, 53, 218); font-family: cbold; text-transform: uppercase; background-color: rgb(255, 255, 255);"><span style="color: rgb(38, 38, 38); font-family: cblack; font-size: 24px;">{{$led->title}}</span></h1>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Description</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$led->title}}</h6>
      <p class="card-text">{{$led->description}}</p>
      
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">Location</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$led->location}}</h6> 
      <h5 class="card-title">Price</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$led->price}}</h6>
      <h5 class="card-title">Tax</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$led->tax}}</h6>
    </div>
  </div>
  {{-- <h5 style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 1.25rem; color: rgb(38, 38, 38); font-family: Montserrat, sans-serif; background-color: rgb(255, 255, 255);">Ab&nbsp;<span style="box-sizing: border-box; font-weight: bolder; font-family: cmd; color: rgb(44, 53, 218); font-size: 24px;">25&nbsp;<small style="box-sizing: border-box; font-size: 19.2px; font-weight: 400;">�</small>&nbsp;</span>pro Tag</h5><div class="description" style="box-sizing: border-box; padding: 15px 0px; margin-bottom: 20px; color: rgb(38, 38, 38); font-family: Montserrat, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);"><p style="box-sizing: border-box; margin-bottom: 0px; color: rgb(102, 102, 102); font-size: 15px;"><img src="../../www.led-werbeflaechen.de/newassets/bluetick.png" style="box-sizing: border-box; vertical-align: baseline; border-style: none; width: 20px; margin-left: 15px; margin-right: 5px;">&nbsp;�ber 35.000 Kontakte am Tag</p><p style="box-sizing: border-box; margin-bottom: 0px; color: rgb(102, 102, 102); font-size: 15px;"><img src="../../www.led-werbeflaechen.de/newassets/bluetick.png" style="box-sizing: border-box; vertical-align: baseline; border-style: none; width: 20px; margin-left: 15px; margin-right: 5px;">&nbsp;ca. 5 m� LED</p><p style="box-sizing: border-box; margin-bottom: 0px; color: rgb(102, 102, 102); font-size: 15px;"><img src="../../www.led-werbeflaechen.de/newassets/bluetick.png" style="box-sizing: border-box; vertical-align: baseline; border-style: none; width: 20px; margin-left: 15px; margin-right: 5px;">&nbsp;ab einer Ausstrahlungswoche buchbar</p><p style="box-sizing: border-box; margin-bottom: 0px; color: rgb(102, 102, 102); font-size: 15px;"><img src="../../www.led-werbeflaechen.de/newassets/bluetick.png" style="box-sizing: border-box; vertical-align: baseline; border-style: none; width: 20px; margin-left: 15px; margin-right: 5px;">&nbsp;offizieller Partner der Rhein-Zeitung, EVM, L�hr Center, Saturn &amp; Sparkasse</p><p style="box-sizing: border-box; margin-bottom: 0px; color: rgb(102, 102, 102); font-size: 15px;"><img src="../../www.led-werbeflaechen.de/newassets/bluetick.png" style="box-sizing: border-box; vertical-align: baseline; border-style: none; width: 20px; margin-left: 15px; margin-right: 5px;">&nbsp;wechselndes Standbild ca. 5 m� zur Moselbr�cke</p></div><div class="col-sm-6 socialmediapackages" style="box-sizing: border-box; position: relative; width: 365px; padding-right: 15px; padding-left: 15px; flex: 0 0 50%; max-width: 50%; padding-bottom: 50px; color: rgb(38, 38, 38); font-family: Montserrat, sans-serif; font-size: 16px; background-color: rgb(255, 255, 255);"><h3 style="box-sizing: border-box; margin-top: 0px; margin-bottom: 0.5rem; font-weight: 500; line-height: 1.2; font-size: 1.75rem;">Social Media Paket</h3><ul class="list-group" style="box-sizing: border-box; margin: 20px 0px 0px; padding: 0px; display: flex; flex-direction: column;"><li class="list-group-item " style="box-sizing: border-box; padding: 0.75rem 1.25rem; display: block; list-style-type: none; position: relative; margin-bottom: -1px; border: 1px solid rgba(0, 0, 0, 0.125); border-top-left-radius: 0.25rem; border-top-right-radius: 0.25rem; font-size: 15px;">Werbefoto<span class=" pull-right" style="box-sizing: border-box; float: right;"><del style="box-sizing: border-box;">99 �</del></span></li><li class="list-group-item " style="box-sizing: border-box; padding: 0.75rem 1.25rem; display: block; list-style-type: none; position: relative; margin-bottom: -1px; border: 1px solid rgba(0, 0, 0, 0.125); font-size: 15px;">Social Media Beitrag<span class=" pull-right" style="box-sizing: border-box; float: right;"><del style="box-sizing: border-box;">99 �</del></span></li><li class="list-group-item " style="box-sizing: border-box; padding: 0.75rem 1.25rem; display: block; list-style-type: none; position: relative; margin-bottom: 0px; border: 1px solid rgba(0, 0, 0, 0.125); border-bottom-right-radius: 0.25rem; border-bottom-left-radius: 0.25rem; font-size: 15px;">Facebook &amp; Instagram Post<span class=" pull-right" style="box-sizing: border-box; float: right;"><del style="box-sizing: border-box;">199 �</del></span></li></ul></div><h1 class="bookingcalanderheading" style="box-sizing: border-box; margin: 0px 0px 20px; font-weight: 500; line-height: 1.2; font-size: 2.5rem; color: rgb(44, 53, 218); font-family: cbold; text-transform: uppercase; background-color: rgb(255, 255, 255);">W�HLEN SIE IHREN BUCHUNGSZEITRAUM.</h1>  --}}
                       



<div class="clearfix"> </div>
           
   {{-- <div class="row leftsidecalander" >
                          <div class="col-12">
                              <div class="date-picker-table">
                                  
                                   <div class="form-group display-picker" style="float:left">
                                      <div class="input-group">
                                          <div class="input-group-prepend">
                                              <span class="input-group-text" style="display:none">
                                                  <i class="fal fa-calendar-alt"></i>
                                              </span>
                                          </div>
                                          <input type="text" class="form-control testdate" id="range_date2"/>
                                      </div>
                                  </div>
                              </div>

                          </div>
                      </div> --}}
<div class="clearfix"> </div>
           
  {{-- <div class="row leftsidecalander" style="margin-top:300px">
      <div class="col-12">
          <div id='map'></div>
      </div>
  </div> --}}


<div class="row">
<form action="#" method="post" style="width:100%;padding:20px">

<div class="form-group">
<label for="comment"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Comment:</font></font></label>
<textarea class="form-control" rows="5" name="commenttext"></textarea>
</div>
<font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input type="submit" class="form-control" name="submitcomment" value="Send" style="width:100px"></font></font>

                </form>

                <!-- end new post comment here -->
</div>

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
    </div>
  </div>

    
@endsection

@section('Styles')
@parent
    {{-- <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/style.css')}}"> --}}

  {{-- <link rel="stylesheet" href="{{asset('assets/Led-Theme/css/bootstrap.min.css')}}"> --}}
  {{-- <link rel="stylesheet" href="{{asset('assets/Bootstrap-4-1/bootstrap.min.css')}}"> --}}
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
  
  <style>
    /*
    # Welcome
    --------------------------------*/
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
  <script>
    $(function() {
      $('input[name="book_dates"]').daterangepicker({
        opens: 'left'
      }, function(start, end, label) {
        var date1 = new Date(start);
var date2 = new Date(end);
var Difference_In_Time = date2.getTime() - date1.getTime();
var Difference_In_Days = Math.round(Difference_In_Time / (1000 * 3600 * 24));
        document.getElementById("total_days").innerHTML = Difference_In_Days;
        document.getElementById("multiply_show").innerHTML =  'X';
        document.getElementById("days_show").innerHTML =  ' Days';
        document.getElementById("total_price").innerHTML =  Difference_In_Days*{{$led->price}};
       // alert(start.format('YYYY-MM-DD'));
      });
    });
    </script>
@endsection
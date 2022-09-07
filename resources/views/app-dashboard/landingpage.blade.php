
@extends('layouts.led-theme')

@section('content')
      <!--header-->
      <div class="container-fluid">
         <div class="bg-header" style="background-image: url('{{asset('assets/newtheme2023/images/bgimagemainpage.png')}}');">

             <h1 class="header-text">Easy way to rent a perfect LED</h1>
            <p class="header-p-text theme-text-col">We provide a complete service for the LED Advertisement</p>
            <br>
            <div class="auto-search-wrapper">
               <div class="search-input">
                <form method="get" action="{{route('find.led')}}">
              {{-- @csrf --}}
                 <a href="#" target="_blank" hidden></a>
                 <input type="text" class="w3-cus-input" placeholder="Where do you want to Advertisement?" id="googleLocation" name="googleLocation">

                    <input type="hidden" class="hide" name="lati" id="lati" />
                    <input type="hidden" class="hide" name="longi" id="longi" />

                 <div class="autocom-box">
                   <!-- here list are inserted from javascript -->
                 </div>
                 <div class="icon"> 
                  <input type="submit" class="fa fa-search" value="&#xf002;" style="background:none">
                </div>
                </form>
                 


               
               </form>
               </div>
            </div>
         </div>
      </div>


<!-- papular start -->


 
  <section class="w3-text-black bg-gray w3-padding-25-top" id="search-listing">
    <div class="container-fluid padding50up">
        <h2 class="sub-h2 alignleft">Available in many well-known <br> Papular LED's For Advertisement in Germany</h2>

 @foreach ($popularLeds as $led)
      <div class="hp-card-sl col-sm-6">
        <div class="row">
          <div class="col-sm-12 w3-margin-bottom-25-sm">
            <div class="w3-white">
              <img class="w3-detail-image w3-border-radius-10" src="{{asset('storage/'.($led->images->first())->path)}}">

              <img class="mySlides w3-detail-image w3-border-radius-10" src="{{asset('storage/'.($led->images->first())->path)}}" style="display:none">

              <div class="w3-row-padding" style="margin:10px -10px 0px -10px!important">
                <div class="w3-col s6">
                  <img class="w3-detail-silde-img w3-border-radius-10" onclick="currentDiv(1)" src="{{asset('storage/'.($led->images->first())->path)}}"></div>

                <div class="w3-col s6">
                  <img class="w3-detail-silde-img w3-border-radius-10" onclick="currentDiv(2)" src="{{asset('storage/'.($led->images->first())->path)}}"></div>

              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xs-12 col-md-12 col-lg-12" style="padding-top:30px">
            <div class="w3-padding-8">
              <div class="flex-sb">
                <div class="flex-sb-sm">
                  <a href="{{route('app.led.detail',$led->id)}}"><span class="sp-h-24">{{$led->title}}</span></a> <span class="btn feature-link">Papular</span>
                </div> 
              </div>
              <p class="sp-text theme-light-gray" style="color: #A5A5A5 !important;">{{$led->location}}</p>
               
            </div>
            <div class="row">
              <div class="col-sm-12 col-md-7 w3-margin-bottom-25-sm">
                <div class="flex-sb">
                 <p class="ra-h-24">€ {{$led->price}} / Day</p> 
                </div>
              </div>
              
            </div>
             
            <div class="flex-sb f-d-col-sm">
               
            
              <div class="" style="padding-bottom:30px">
                <br>
                <div class="res-see-more">
                  <a href="{{route('app.led.detail',$led->id)}}"><button class="sp-btn theme-bg btn">See More</button></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> 
 @endforeach 
 
     
    </div>
  </section> 





 



<!-- Trending start -->

<div class="container-fluid padding50up">
  <h2 class="sub-h2 alignleft">Available in many well-known <br> Papular LED's For Advertisement in Germany</h2>
<div class="row w3-padding-56-top">
 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w3-margin-bottom-30">    
    

  <div class="py-4 container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row">
       @foreach ($trendingLeds as $led)
        <div class="col-md-6">
            <div class="card1 mt-3 p-3 g-2" style="background-image: url('{{asset('storage/'.($led->images->first())->path)}}'); 
             -webkit-background-size: cover;
             -moz-background-size: cover;
             -o-background-size: cover;
             background-size: cover;"> 
        <div class="mt-3">
            <h2 class="text1 papularledtitle">{{$led->title}}</h2>
        </div> 
        <div class="mt-3">
            <h2 class="text1 papularledprice"> € {{$led->price}} / Day</h2>
        </div> 

        <div class="mt-3 d-flex justify-content-end px-2">
            <a href="{{route('app.led.detail',$led->id)}}" class="btn-submit papularledbtn btn">Book Now</a>
        </div>        
          </div>
        </div>
      @endforeach
    </div>    
  </div>
</div> 

</div>
</div>
<!--end Trending LED -->






            <!--search-->
    <section id="my-search">
      <div class="container-fluid w3-padding-105-top">
            <div class="bg-img-2" style="background-image: url('{{asset('assets/newtheme2023/images/bgimagemainpage2.png')}}');">
               <div class="row">
                 
            <h2 class="re-text">Find your best LED</h2>
            <p class="header-p-text theme-text-col">We provide a complete service for the LED Advertisement in your City</p>
            <div class="w3-padding-32-top">
                  <button class="search-btn" onclick="myfunc();">START MY SEARCH</button>
            </div>
      </div>
      </div>
      </div>
   



<div class="container-fluid ">
      <div class="row w3-padding-56-top">
        @foreach ($leds as $led) 
             <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w3-margin-bottom-30">
                 <div class="card h-100">
              <!--   <a href="#"><img class="card-img-top" src="{{asset('storage/'.($led->images->first())->path)}}" alt="" style="width:100%"></a> -->


                <a href="{{route('app.led.detail',$led->id)}}"><img class="card-img-top" src="{{asset('storage/'.($led->images->first())->path)}}" alt="" style="width:100%;min-height: 200px;;max-height: 200px;"></a>  



                <div class="card-body viewledlistmainpage" >
                    <h2 class="card-title alignleft"  >
                        <a href="{{route('app.led.detail',$led->id)}}" class="viewledlistmainpageheading"> € {{$led->price}}</a>
                    </h2>
                    <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text viewledlistmainpageheading1"  > {{$led->title}}</h2>

                    <h2 class="card-title viewledlistmainpageheading2">{{$led->location}}</h4>

                     
                    <h2 class="card-title alignright"  >
                        <a href="{{route('app.led.detail',$led->id)}}"  class="viewledlistmainpageheading3"  >   € {{$led->price}} / <b  class="viewledlistmainpageheading4"  > day</b> </a>
                    </h2>
                    
                    <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text"> 
                        <a href="{{route('app.led.detail',$led->id)}}">
                          <img src="{{asset('assets/newtheme2023/images/arrowblue.png')}}"   class="viewledlistmainpageheading6"  > 
                        </a>
                    </h2>
                </div>
              </div>
            </div> 
        @endforeach

      </div>
</div>
<!-- end listing -->


            
       

  





  
</section>
@endsection  

 
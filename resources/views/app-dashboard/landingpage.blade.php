
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
<!-- <div class="container-fluid padding50up">
  <h2 class="sub-h2 alignleft">Available in many well-known <br> Papular LED's For Advertisement in Germany</h2>
<div class="row w3-padding-56-top">
 <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w3-margin-bottom-30">    
    

  <div class="py-4 container min-vh-100 d-flex justify-content-center align-items-center">
    <div class="row">
 @foreach ($popularLeds as $led)
        <div class="col-md-4">


            <div class="card1 mt-3 p-3 g-2">
                <img src="{{asset('storage/'.($led->images->first())->path)}}" style="width:100%;max-height:150px"> 
        <div class="mt-3" style="margin-top:10px !important">
            <h2 class="text1 papularledtitle" style="font-size:16px;background:none">{{$led->title}}</h2>
        </div> 
        <div class="mt-3" style="margin-top:10px !important">
            <h2 class="text1 papularledprice" style="font-size:16px;background:none"> € {{$led->price}} / Day</h2>
        </div> 

        <div class="mt-3 d-flex justify-content-end px-2" style="margin-top:10px !important">
            <a href="{{route('app.led.detail',$led->id)}}" class="btn-submit papularledbtn btn" style="margin-top:0px !important">Book Now</a>
        </div>        
          </div>
        </div>
      @endforeach
    </div>    
  </div>
</div> 

</div>
</div> -->
<!--end papular LED -->

  





 



<!-- Trending start -->

<div class="container-fluid padding50up">
  <h2 class="sub-h2 alignleft" style="font-size:25px">Available in many well-known <br> Papular LED's For Advertisement in Germany</h2>
<div class="row">
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
            <h2 class="text1 papularledtitle">&nbsp; {{$led->title}} &nbsp;</h2>
        </div> 
        <div class="mt-3">
            <h2 class="text1 papularledprice">&nbsp;  € {{$led->price}} / Day &nbsp;</h2>
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

 
    <section id="city">
        <div class="container-fluid w3-h-padding-top">
            <h2 class="sub-h2">We are available in many<br>
            well-known cities of Germany</h2>


            <div class="row w3-padding-56-top">
              
                  @foreach ($cities as $city)
                  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 w3-margin-bottom-30">
                  <div class="w3-display-container">
                    <a href="{{route('list.cities.led',$city->id)}}">
                    <div class="w3-display-middle city-text">
                        {{$city->city}}
                    </div><img alt="lonodn" class="city-img" src="{{asset('storage/'.$city->icon)}}"></a>
                </div>
              </div> 
              @endforeach
                    
              
              
            


            </div>
        </div>
    </section> 






            <!--search-->
    <section id="my-search">
      <div class="container-fluid w3-padding-105-top">
            <div class="bg-img-2" style="background-image: url('{{asset('assets/newtheme2023/images/bgimagemainpage2.png')}}');">
               <div class="row">
                 
            <h2 class="re-text">Find your best LED</h2>
            <p class="header-p-text theme-text-col">We provide a complete service for the LED Advertisement in your City</p>
            <div class="w3-padding-32-top">
                  <a href="/search-led?googleLocation=&lati=&longi=" class="search-btn"  style="padding:15px" >START MY SEARCH</a>
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
                    
                    <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text" style="text-align:right"> 
                        <a href="{{route('app.led.detail',$led->id)}}" >
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

 
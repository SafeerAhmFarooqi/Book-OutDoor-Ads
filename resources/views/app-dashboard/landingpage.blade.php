@extends('layouts.led-theme')

@section('content')
<div class="site-blocks-cover overlay" style="background-image: url({{asset('assets/Led-Theme/images/hero_2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12">
          
          
          <div class="row justify-content-center mb-4">
            <div class="col-md-8 text-center">
              <h1 class="" data-aos="fade-up">Largest LED Classifieds In  World
              </h1>
              <p data-aos="fade-up" data-aos-delay="100">You can buy, sell anything you want.</p>
            </div>
          </div>
          @if(session()->has('payment'))
    <div class="alert alert-success">
        {{ session()->get('payment') }}
    </div>
@endif
          <div class="form-search-wrap" data-aos="fade-up" data-aos-delay="200">
            {{-- <form method="post" action="https://led-werbeflaechen.de/newled/search.php">
              <div class="row align-items-center">
                <div class="col-sm-5">
                  <input type="text" class="form-control rounded" placeholder="What are you looking for?" name="str_con">
                </div>
                <div class="col-sm-5">
                  <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" class="form-control rounded" placeholder="Location" id="googleLocation" name="googleLocation">
                    <input type="hidden" class="hide" name="lati" id="lati" />
                    <input type="hidden" class="hide" name="longi" id="longi" />
                  </div>
                </div>
                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                  <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                </div>
              </div>
            </form> --}}

            <form method="get" action="{{route('find.led')}}">
              {{-- @csrf --}}
              <div class="row align-items-center">
                <div class="col-sm-5">
                  <input type="text" class="form-control rounded" placeholder="What are you looking for?" name="find">
                </div>
                <div class="col-sm-5">
                  <div class="wrap-icon">
                    <span class="icon icon-room"></span>
                    <input type="text" class="form-control rounded" placeholder="Location" id="googleLocation" name="location">
                    {{-- <input type="hidden" class="hide" name="lati" id="lati" />
                    <input type="hidden" class="hide" name="longi" id="longi" /> --}}
                  </div>
                </div>
                <div class="col-lg-12 col-xl-2 ml-auto text-right">
                  <input type="submit" class="btn btn-primary btn-block rounded" value="Search">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>  

  <div class="site-section bg-light">
    <div class="container">
      
      <div class="overlap-category mb-5">
        <div class="row align-items-stretch no-gutters">
          
          
          
          @foreach ($cities as $city)
          <div class="col-sm-6 col-md-4 mb-4 mb-lg-0 col-lg-2">
            <a href="{{route('list.cities.led',$city->id)}}" class="popular-category h-100">
              <span class="icon"><span class="flaticon-house"></span></span>
              <span class="caption mb-2 d-block">{{$city->city}}</span>
              <span class="number">{{$city->led->count()}}</span>
            </a>
          </div>    
          @endforeach
          
          




                 </div>
      </div>
      
      <div class="row">
        <div class="col-12">
          <h2 class="h5 mb-4 text-black">Featured Ads</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12  block-13">
          <div class="owl-carousel nonloop-block-13">
       

            @foreach ($leds as $led)
            
            <div class="d-block d-md-flex listing vertical">
              <a href="{{route('app.led.detail',$led->id)}}" class="img d-block" style="background-image: url('{{asset('storage/'.($led->images->first())->path)}}');"></a>
              
              <div class="lh-content">
                <span class="category">Led</span>
                <a href="#" class="bookmark"><span class="icon-heart"></span></a>
                <h3><a href="{{route('app.led.detail',$led->id)}}" style="font-size:12px">{{$led->title}}</a></h3>
                
                <address>{{substr($led->location,0,15)}}
                @if (strlen($led->location)>15)
                    .....
                @endif
                </address>
                <p class="mb-0">  
                  <span class="review" style="font-weight:bold">€ {{$led->price}} / day</span>
                </p>
              </div>
            </div>    
            @endforeach
            
            
            
           
            
            
      

           

          </div>
        </div>


      </div>
    </div>
  </div>
  
  <div class="site-section" data-aos="fade">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Popular LED's</h2>
          <p class="color-black-opacity-5">Most Top Rated LED's</p>
        </div>
      </div>

      <div class="row">

        @foreach ($popularLeds as $led)
        <div class="col-md-6 mb-4 mb-lg-4 col-lg-4">
          
          <div class="listing-item">
            <div class="listing-image">
              <img src="{{asset('storage/'.($led->images->first())->path)}}" alt="Image" class="img-fluid">
            </div>
            <div class="listing-item-content">
              {{-- <a href="ledd708.html?id=3" class="bookmark" data-toggle="tooltip" data-placement="left" title="Bookmark"><span class="icon-heart"></span></a> --}}
              <a class="px-3 mb-3 category" href="{{route('app.led.detail',$led->id)}}">{{$led->title}}</a>
              <h2 class="mb-1"><a href="{{route('app.led.detail',$led->id)}}" style="font-size:12px">Price : {{$led->price}}</a></h2>
              <span class="address">City : {{$led->city->city}}</span><br>
              <span class="address">Location : {{$led->location}}</span>
            </div>
          </div>

        </div>
        @endforeach
      </div>
    </div>
  </div>


  <div class="site-section bg-light">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-7 text-left border-primary">
          <h2 class="font-weight-light text-primary">Trending Today</h2>
        </div>
      </div>
      <div class="row mt-5">
        @foreach ($trendingLeds as $led)
        <div class="col-lg-6">
          <div class="d-block d-md-flex listing">
            <a href="{{route('app.led.detail',$led->id)}}" class="img d-block" style="background-image: url('{{asset('storage/'.($led->images->first())->path)}}')"></a>
            <div class="lh-content">
              <span class="category">{{$led->title}}</span>
              {{-- <a href="#" class="bookmark"><span class="icon-heart"></span></a> --}}
              <h3><a href="{{route('app.led.detail',$led->id)}}">Price : {{$led->price}}/day</a></h3>
              <span class="address">City : {{$led->city->city}}</span><br>
              <address>Location : {{$led->location}}</address>
              <p class="mb-0"> 
                <span class="review"></span>
              </p>
            </div>
          </div>
        </div>    
        @endforeach
        
        
        
      </div>
    </div>
  </div>


<div class="home-page-welcome">
      <div class="container">
          <div class="row">
              <div class="col-12 col-lg-6 order-2 order-lg-1">
                  <div class="welcome-content">
                      <header class="entry-header">
                          <h2 class="entry-title">Willkommen im LED-WERBEFLÄCHEN MAGAZIN!

</h2>
                      </header><!-- .entry-header -->

                      <div class="entry-content mt-5">
                          <p>Als unser Werbepartner  haben Sie die Möglichkeit exklusiv im LED-Werbeflächen MAGAZIN mit Ihrem Unternehmen platziert zu werden. Sprechen Sie uns gerne  auf unser MAGAZIN an und erhalten Sie einen Überblick über  die Partnerunternehmen der LED-Werbeflächen.</p>
                      </div><!-- .entry-content -->


                  </div><!-- .welcome-content -->
              </div><!-- .col -->

              <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
                  <img src="{{asset('assets/Led-Theme/images/slide1.jpg')}}" alt="welcome">
              </div><!-- .col -->
          </div><!-- .row -->
      </div><!-- .container -->
  </div>



  <div class="site-section bg-white">
    <div class="container">

      <div class="row justify-content-center mb-5">
        <div class="col-md-7 text-center border-primary">
          <h2 class="font-weight-light text-primary">Testimonials</h2>
        </div>
      </div>

      <div class="slide-one-item home-slider owl-carousel">
        <div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="{{asset('assets/Led-Theme/images/person_3.jpg')}}" alt="Image" class="img-fluid mb-3">
              <p>John Smith</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>
        <div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="{{asset('assets/Led-Theme/images/person_2.jpg')}}" alt="Image" class="img-fluid mb-3">
              <p>Christine Aguilar</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

        <div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="{{asset('assets/Led-Theme/images/person_4.jpg')}}" alt="Image" class="img-fluid mb-3">
              <p>Robert Spears</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

        <div>
          <div class="testimonial">
            <figure class="mb-4">
              <img src="{{asset('assets/Led-Theme/images/person_5.jpg')}}" alt="Image" class="img-fluid mb-3">
              <p>Bruce Rogers</p>
            </figure>
            <blockquote>
              <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
            </blockquote>
          </div>
        </div>

      </div>
    </div>
  </div>


<div class="home-page-limestone" style="padding:0">
      <div class="container">
        <div class="text-center">
          <h2 class="font-weight-light text-primary" style="padding-bottom:50px;font-weight:bold !important">Our Partners </h2>
        </div>


          <div class="row">
              <div class="coL-12 col-lg-6">
                  <div class="section-heading" style="padding-top:60px">
                      <h3 class="entry-title" style="font-size:18px">DAS LED-BRANCHENFENSTER. IHR BLICKPUNKT.</h3>
<h4 style="font-size:19px">SIE WÜNSCHEN WEITERE INFORMATIONEN? <br> WIR SIND GERNE FÜR SIE DA.
</h4><br>

<ul class="contact-info p-0">
                          <li><i class="fa fa-phone"></i><span>  0261 - 200 695 68  <i class="fa fa-mobile" style="margin:0"></i>0176 - 808 507 25</span></li><br>
                          <li><i class="fa fa-envelope"></i><span>hochhalter@led-werbeflächen.de</span></li><br>
                         

<li><i class="fa fa-map-marker"></i><span>Löhrstraße 87A/B 56068 Koblenz

</span></li>
                      </ul>

     
                  </div><!-- .section-heading -->
              </div><!-- .col -->


              <div class="col-12 col-lg-6">
                  <div class="milestones d-flex flex-wrap justify-content-between">
                          <div class="container">
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/1.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/2.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/3.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/4.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/5.jpg')}}" style="width:100%"></div> 
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/6.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/7.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/8.jpg')}}" style="width:100%"></div> 
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/9.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/10.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/11.jpg')}}" style="width:100%"></div> 
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/12.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/13.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/14.jpg')}}" style="width:100%"></div> 
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/15.jpg')}}" style="width:100%"></div>
      <div class="col-sm-3" style="float:left"><img class="img-responsive" src="{{asset('assets/Led-Theme/images/partner/16.jpg')}}" style="width:100%"></div> 
      
  </div>
                  </div><!-- .milestones -->
              </div><!-- .col -->
          </div><!-- .row -->
      </div><!-- .container -->
  </div>

    
@endsection

@section('Styles')
    @parent
    

    
<style>
    /*
    # Welcome
    --------------------------------*/
    
    .symbol.symbol-50px>img{width:50px;height:50px}
    .symbol-label{display:flex;align-items:center;justify-content:center;font-weight:500;color:#3f4254;background-color:#f5f8fa;background-repeat:no-repeat;background-position:center center;background-size:cover;border-radius:.475rem}

    .home-page-welcome {
        position: relative;
        padding: 96px 0;
        background: url("assets/Led-Theme/images/slide1.jpg") no-repeat center;
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
@endsection
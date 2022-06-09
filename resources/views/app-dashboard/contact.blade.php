@extends('layouts.led-theme')

@section('content')
<div class="site-blocks-cover inner-page-cover overlay aos-init aos-animate" style="background-image: url({{asset('assets/Led-Theme/images/hero_2.jpg')}});max-height: 100px !important; min-height: 150px !important;" data-aos="fade" data-stellar-background-ratio="0.5">
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

          
        </div>
      </div>
    </div>
  </div>  

  
  
  <div class="site-section" data-aos="fade">
 <div class="container">
        <div class="row">
          <div class="col-md-7 mb-5 aos-init aos-animate" data-aos="fade">

            

            <form action="#" class="p-5 bg-white">
             

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname">First Name</label>
                  <input type="text" id="fname" class="form-control">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname">Last Name</label>
                  <input type="text" id="lname" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject">Subject</label> 
                  <input type="subject" id="subject" class="form-control">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Write your notes or questions here..."></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
                </div>
              </div>

  
            </form>
          </div>
          <div class="col-md-5 aos-init aos-animate" data-aos="fade" data-aos-delay="100">
            
            <div class="p-4 mb-3 bg-white">
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">youremail@domain.com</a></p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">More Info</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
              <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
            </div>

          </div>
        </div>
      </div>
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
<div>
  {{-- The whole world belongs to you. --}}
<div>

      <div style="text-align: center;"> 
      <img src="https://freeiconshop.com/wp-content/uploads/edd/list-round-flat.png" class="filterbtn" data-toggle="modal" data-target="#myModal" style="z-index: 1002;
    position: relative;
    max-width: 60px;margin-top: -20px;">
    </div>


  <!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width:100% !important;margin:0 !important">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body" style="padding:15%">
        
        <div class="form-group">
            <label for="sel1">City</label>
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>


        <div class="form-group">
            <label for="sel1">Price</label>
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>

          <div style="text-align: center;">
           <input type="subit" name="" class="btn btn-primary" value="Search">
          </div>





      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div>



<div class="container-fluid DN-800" id="search-page">
      
  <div class="sp-backdrop-bg sp-border">
      <div class="flex-stretch">
          <div class="f-g-4 col-sm-4" >
              <div class="flex-st">
                  <p class="margin-right">  <i class="fa fa-map-marker" style="font-size: 25px;"></i></p><input class="cp-input-form"   placeholder=" Standort suchen" style="border:none; outline:none; font-size:16px;"  wire:model='location'>
              </div>
          </div>
          <div class="f-g-1 margin-right">
              <div class="vr-line"></div>
          </div>
          <div class="f-g-2">
              <p class="font-lufga-18 dis-none">Stadt</p>
              <div class="flex-st">
                  <div class="dropdown margin-right">
                        <select aria-labelledby="menu1" wire:model='selectedCity' style="padding: 8px 32px 8px 0px;border: none;outline: none;text-align: left;color: #8F90A6!important;padding-left:10px">
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
              {{-- <p class="font-lufga-18 dis-none">Datum -{{$selectedStartDate}} - {{$selectedEndDate}}- {{$selectedDateRange}}</p> --}}
              <p class="font-lufga-18 dis-none">Datum-{{$selectedStartDate}}-{{$selectedEndDate}}</p>
              <div class="flex-st">
                  <div class="dropdown margin-right">
                    <input type="text" class="form-control" name="book_dates" id="book_dates" placeholder="Select Date" style="Border:none;box-shadow: none !important;" />
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
                        <select  wire:model='priceRange' style="padding: 8px 32px 8px 0px;border: none;outline: none;text-align: left;color: #8F90A6!important;padding-left: 10px;">
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

  <div class="col-sm-6 mediaqueryproductslistshow">
 @foreach ($leds as $led)
   <div class="col-sm-6 responsiveadjust" style="padding-bottom:10px">
  <div class="card h-100">


 <a href="{{route('app.led.detail',$led->id??'')}}"><img class="card-img-top" src="{{asset('storage/'.(($led->images->first())->path??''))}}" alt="" style="width:100%;min-height: 200px;;max-height: 200px;"></a>  



 <div class="card-body viewledlistmainpage" >
     <h2 class="card-title alignleft"  >
         <a href="#" class="viewledlistmainpageheading">Preis : {{$led->price}} € /Tag   </a>
     </h2>
     <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text viewledlistmainpageheading1"  style="font-size: 16px !important"> {{$led->title}}</h2>

     <h2 class="card-title viewledlistmainpageheading2"> {{($cities->where('id',$led->city_id)->first())->city}} </h4>

      
     <h2 class="card-title alignright"  >
         <a href="#"  class="viewledlistmainpageheading3"  > Price : {{$led->price}} € / <b  class="viewledlistmainpageheading4"  > Tag   </b> </a>
     </h2>
     
     <h2 class="ff-lagufa-n font-20 font-14-sm font-w-600 w3-theme-text" style="text-align:right"> 
         <a href="#" >
           <img src="{{asset('assets/newtheme2023/images/arrowblue.png')}}"   class="viewledlistmainpageheading6"  > 
         </a>
     </h2>
 </div>
</div>
</div>
 @endforeach
</div>


<div class="col-sm-6 mapresponsiveclass" style="">
   <div id="map"  style="width:100%;height:500px;"></div>
</div>  



  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
 <script type="text/javascript">
    //adapted from http://gmaps-samples-v3.googlecode.com/svn/trunk/overlayview/custommarker.html
function CustomMarker(latlng, map, imageSrc) {
    this.latlng_ = latlng;
    this.imageSrc = imageSrc;
    // Once the LatLng and text are set, add the overlay to the map.  This will
    // trigger a call to panes_changed which should in turn call draw.
    this.setMap(map);
}

CustomMarker.prototype = new google.maps.OverlayView();

CustomMarker.prototype.draw = function () {
    // Check if the div has been created.
    var div = this.div_;
    if (!div) {
        // Create a overlay text DIV
        div = this.div_ = document.createElement('div');
        // Create the DIV representing our CustomMarker
        div.className = "customMarker"


        var img = document.createElement("img");
        img.src = this.imageSrc;
        div.appendChild(img);
        google.maps.event.addDomListener(div, "click", function (event) {
            google.maps.event.trigger(me, "click");
        });

        // Then add the overlay to the DOM
        var panes = this.getPanes();
        panes.overlayImage.appendChild(div);
    }

    // Position the overlay 
    var point = this.getProjection().fromLatLngToDivPixel(this.latlng_);
    if (point) {
        div.style.left = point.x + 'px';
        div.style.top = point.y + 'px';
    }
};

CustomMarker.prototype.remove = function () {
    // Check if the overlay was on the map and needs to be removed.
    if (this.div_) {
        this.div_.parentNode.removeChild(this.div_);
        this.div_ = null;
    }
};

CustomMarker.prototype.getPosition = function () {
    return this.latlng_;
};

var map = new google.maps.Map(document.getElementById("map"), {
    zoom: 17,
    center: new google.maps.LatLng(37.77088429547992, -122.4135623872337),
    mapTypeId: google.maps.MapTypeId.ROADMAP
});

var data = [{
    profileImage: "assets/images/1.jpg",
    pos: [37.77085, -122.41356],
}, {
    profileImage: "assets/images/2.jpg",
    pos: [37.77220, -122.41555],
}]

for(var i=0;i<data.length;i++){
new CustomMarker(new google.maps.LatLng(data[i].pos[0],data[i].pos[1]), map,  data[i].profileImage)
}
 </script>




       
       
        
        
       
       
       
        
  

</div>
</div>
</div>
      
</div>

@section('Styles')
@parent

<Style>




  #map{
    margin-top: -55px;
    width: 117% !important;
  }
     
  /* Functional styling;
   * These styles are required for noUiSlider to function.
   * You don't need to change these rules to apply your design.
   */
  .noUi-target,.noUi-target * {
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -ms-touch-action: none;
    touch-action: none;
    -ms-user-select: none;
    -moz-user-select: none;
    user-select: none;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  
  .noUi-target {
    position: relative;
    direction: ltr;
  }
  
  .noUi-base {
    width: 100%;
    height: 100%;
    position: relative;
    z-index: 1;
  /* Fix 401 */
  }
  
  .noUi-origin {
    position: absolute;
    right: 0;
    top: 0;
    left: 0;
    bottom: 0;
  }
  
  .noUi-handle {
    position: relative;
    z-index: 1;
  }
  
  .noUi-stacking .noUi-handle {
  /* This class is applied to the lower origin when
     its values is > 50%. */
    z-index: 10;
  }
  
  .noUi-state-tap .noUi-origin {
    -webkit-transition: left 0.3s,top .3s;
    transition: left 0.3s,top .3s;
  }
  
  .noUi-state-drag * {
    cursor: inherit !important;
  }
  
  /* Painting and performance;
   * Browsers can paint handles in their own layer.
   */
  .noUi-base,.noUi-handle {
    -webkit-transform: translate3d(0,0,0);
    transform: translate3d(0,0,0);
  }
  
  /* Slider size and handle placement;
   */
  .noUi-horizontal {
    height: 4px;
  }
  
  .noUi-horizontal .noUi-handle {
    width: 18px;
    height: 18px;
    border-radius: 50%;
    left: -7px;
    top: -7px;
    background-color: #345DBB;
  }
  
  /* Styling;
   */
  .noUi-background {
    background: #D6D7D9;
  }
  
  .noUi-connect {
    background: #345DBB;
    -webkit-transition: background 450ms;
    transition: background 450ms;
  }
  
  .noUi-origin {
    border-radius: 2px;
  }
  
  .noUi-target {
    border-radius: 2px;
  }
  
  .noUi-target.noUi-connect {
  }
  
  /* Handles and cursors;
   */
  .noUi-draggable {
    cursor: w-resize;
  }
  
  .noUi-vertical .noUi-draggable {
    cursor: n-resize;
  }
  
  .noUi-handle {
    cursor: default;
    -webkit-box-sizing: content-box !important;
    -moz-box-sizing: content-box !important;
    box-sizing: content-box !important;
  }
  
  .noUi-handle:active {
    border: 8px solid #345DBB;
    border: 8px solid rgba(53,93,187,0.38);
    -webkit-background-clip: padding-box;
    background-clip: padding-box;
    left: -14px;
    top: -14px;
  }
  
  /* Disabled state;
   */
  [disabled].noUi-connect,[disabled] .noUi-connect {
    background: #B8B8B8;
  }
  
  [disabled].noUi-origin,[disabled] .noUi-handle {
    cursor: not-allowed;
  }



  </Style>


@endsection

@section('scripts')
@parent
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
  var searchInput = 'location';
  
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
  $('input[name="book_dates"]').daterangepicker({
    opens: 'left',
    minDate: dateToday,
     autoApply : true
  }, function(start, end, label) {
    //alert('safeer');
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


  
@endsection
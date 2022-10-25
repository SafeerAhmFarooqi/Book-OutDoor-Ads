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
   {{-- <div id="map"  style="width:100%;height:500px;"></div> --}}
   <div id="mymap"></div>
</div>  



  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
 {{-- <script type="text/javascript">
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
 </script> --}}




       
       
        
        
       
       
       
        
  

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
            height: 500px;
               width: 100% !important;

  border: none !important !important;
   } 
footer{
  display: none !important;
}
.filterbtn{
  display: none;
 
}
@media (min-width: 430px) and (max-width: 600px) {
.filterbtn{
display: inline-block;
}
}
</style>
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
<script src="http://maps.google.com/maps/api/js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
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

  
  
 $.each( locations, function( index, value ){
   
   var markerLabel = "€"+ value.price;
   //alert(value.image);
   var infowindow = new google.maps.InfoWindow({
    content: "<div style='max-width:220px'><div style='float:left;width:100%'><img src='"+value.image+"' style='max-width:220px;max-height:180px' ></div><div style='float:left; padding: 10px;color:#fff'><b>"+value.title+"</b><br/> <h2>"+value.price +"€</h2> </div> <div style='float:right'><a href='javascript:;' data-toggle='modal' data-target='#exampleModal-"+value.id+"'> <img src='https://www.freeiconspng.com/uploads/calendar-icon-png-4.png' style='width:50px;padding:10px;'></a> </div></div>", 
    
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
  
@endsection
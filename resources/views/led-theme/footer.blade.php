<footer class="w3-padding-86-top container-fluid w3-margin-bottom-30">
      <div class="row w3-padding-32-top">
         <div class="col-xs-12 col-lg-5 col-md-6 col-sm-12 w3-padding-right-20 w3-margin-bottom-30">
            <div class="w3-center-logo">
               <img src="images/main-logo.png" alt="" class="img-responsive">
            </div>
            <div class="w3-padding-32-top">
               <p class="footer-p-text">Einzigartig werben und garantiert gesehen werden!  <br> 

Mit unseren LED Werbeflächen positionieren Sie Ihre Werbekampagne in die erste Reihe.   <br> 

Präsentieren Sie Ihre Botschaften aufmerksamkeitsstark, multimedial und innovativ. Informieren Sie sich jetzt über die vielfältigen Möglichkeiten, die Ihnen LED-Werbeflächen bieten.<br><br>
               </p>
            </div>
            <div class="icon-bar-2 f-h4 w3-padding-32-top">
               <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> 
               <a href="#" class="youtube"><i class="fa fa-instagram"></i></a> 
            </div>
            <div class="w3-padding-32-top ">
               <p class="footer-p-text"> © 2022. All rights reserved
               </p>
            </div>
         </div>
         <div class="col-xs-12 col-lg-2 col-md-6 col-sm-12 w3-margin-bottom-30">
            <h4 class="w3-padding-2-top footer-h-text">Take a Tour</h4>
            <div class="w3-padding-32-top ">
               <a href="/"><p class="footer-p2-text">Home</p></a>
               <a href="{{route('show.imprint')}}"><p class="footer-p2-text">IMPRESSUM</p></a>
               <a href="{{route('show.contact')}}"><p class="footer-p2-text">KONTAKT</p></a>
               <a href="{{route('show.agb')}}"><p class="footer-p2-text">AGB</p></a>
               <a href="{{route('show.policy')}}"><p class="footer-p2-text">Privacy Policy</p></a>
            </div>
         </div>
         <div class=" col-xs-12 col-lg-2 col-md-6 col-sm-12 w3-margin-bottom-30">
            <h4 class="w3-padding-2-top footer-h-text">Our Company</h4>
            <div class=" w3-padding-32-top ">
               <p class="footer-p2-text">City Search</p>
               <p class="footer-p2-text">Map View</p>
               <a href="{{route('show.about')}}"><p class="footer-p2-text">About</p></a>
               <p class="footer-p2-text">Help Centre</p>
            </div>
         </div>
         <div class="col-xs-12 col-lg-3 col-md-6 col-sm-12 w3-margin-bottom-30">
            <h4 class="w3-padding-2-top footer-h-text">Contact</h4>
            <div class="w3-padding-32-top ">
            <p class="footer-p-text">Wir sind für Sie erreichbar 
            </p>
            </div>
            <div class="w3-padding-32-top">
               <div class="wrapper">
                  <div class="box">
                    <i class="fa fa-mobile" aria-hidden="true"></i>  &nbsp; &nbsp;
     <span style="font-size: 25px;font-weight: bold;  clor: #2E3192;"> 017680850725   </span>
                  </div>
                  <br>
                 
               </div>
                <div>
                    <a href="/client-login" class="btn-submit papularledbtn btn">Partner Login</a> &nbsp;&nbsp;
                    <a href="/admin-login" class="btn-submit papularledbtn btn">Admin Login</a> </div> 
            </div>
         </div>
      </div>
      <!--row-->
    </footer>

<script src="{{asset('assets/newtheme2023/assets/javascript.js')}}"></script>
   
      <script>
         function myfunc(){
            document.getElementById('search').focus();
         }
      </script>
      <script>
        const searchWrapper = document.querySelector(".search-input");
        const inputBox = searchWrapper.querySelector("input");
        const suggBox = searchWrapper.querySelector(".autocom-box");
        const icon = searchWrapper.querySelector(".icon");
        let linkTag = searchWrapper.querySelector("a");
        let webLink;
    async function getAddress() {
          const value = document.getElementById('search').value;
          var myHeaders = new Headers();
            myHeaders.append("Cookie", "TiPMix=99.03755974279281; x-ms-routing-name=self");
            
            var requestOptions = {
              method: 'GET',
              headers: myHeaders,
              redirect: 'follow'
            };
          var url = "https://api.getaddress.io/autocomplete/";
            fetch(url+value+"?api-key=bsXbfpPoV0qSRB12WLkhZQ36387", requestOptions)
            .then(response => response.json())
            .then(result => showSuggestions(result))
            .catch(error => console.log('error', error));
        
        }
    
        inputBox.onkeyup = (e)=>{
            
            getAddress();
            
        }
        function select(element){
            let selectData = element.textContent;
            inputBox.value = selectData;
            searchWrapper.classList.remove("active");
        }
        function showSuggestions(result){
            let listData;
            if(!result.length){
                for(let i = 0; i < result.suggestions.length; i++) {
                    if(i == 0){
                        userValue = result.suggestions[i].address;
                        listData = `<li>${userValue}</li>`;
                    }
                    else{
                     userValue = result.suggestions[i].address;
                    listData += `<li>${userValue}</li>`;   
                    }
                }
            }
            else{
              listData = list.join('Type more...');
            }
            suggBox.innerHTML = listData;
            searchWrapper.classList.add("active"); //show autocomplete box
                let allList = suggBox.querySelectorAll("li");
                for (let i = 0; i < allList.length; i++) {
                    //adding onclick attribute in all li tag
                    allList[i].setAttribute("onclick", "select(this)");
                }
        }
</script>
<script src="{{asset('assets/newtheme2023/assets/suggestions.js')}}"></script>
<script src="{{asset('assets/newtheme2023/assets/script.js')}}"></script>

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
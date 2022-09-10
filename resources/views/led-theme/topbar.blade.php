      <nav class="navbar navbar-default" id="navbar">
         <div class="container-fluid">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>                        
               </button>
               <a class="navbar-brand" href="/" style="font-weight:bold;padding-top:30px">LED - WERBEFLAECHEN

                <!-- <img src="https://led-werbeflaechen.de/assets/Led-Theme/logo/logo.png" alt="" class="logo-img-style" style="width:200px"> -->

               </a>   
            </div>
            <div class="collapse navbar-collapse" id="myNavbar" > 
          <ul class="nav navbar-nav navbar-right ">
           <!--  <li ><a href="/">Home</a></li> -->
            <li><a href="{{route('show.imprint')}}">Impressum</a></li> 
             <li><a href="{{route('show.contact')}}">kontakt</a></li> 

               @if (Auth::check()&&Auth::user()->hasRole(['User','Admin','Client']))
            
             <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Auth::user()->firstname.' '.Auth::user()->lastname}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{route('dashboard')}}">Dashboard</a>
                @if (Auth::user()->hasRole(['User','Client']))
                <a class="dropdown-item" href="{{Auth::user()->hasRole('User')? route('user.profile.show') : route('client.profile.show')}}">My Profile</a>                    
                @endif
                <a class="dropdown-item" href="{{Auth::user()->hasRole('User')? route('user.orders.list') : (Auth::user()->hasRole('Client')?route('client.order.view') : route('admin.led.orders'))}}">{{Auth::user()->hasRole('Admin')?'Orders' : 'My Orders'}}</a>                    
              
                
                <div class="dropdown-divider"></div>
                <form action="{{route('logout')}}" method="post" style="display: inline;">
                  @csrf
                  <button type="submit" style="border: none; display: inline;background-color: Transparent;cursor: pointer;" class="dropdown-item">Log Out</button>
                </form>
              </div>
            </li>


       
             @else
             <li class="ml-xl-3 login"><a href="{{route('user.login')}}"><span class="border-left pl-xl-4"></span>Log In</a></li>    
             @endif
            

            <li><a href="{{route('cart.list.items')}}"><button class="nav-menu-btn"> <i class="fa fa-shopping-cart" aria-hidden="true"></i>
 ({{count($cartItems??$cartItems=[])}})</button></a></li>


            </ul>

         </div>
         </div>
      </nav>





 
      
            
            
            
            
            
            
            
            
            
            
            
       
           

          
  <!-- </div> -->
  
</header>

 
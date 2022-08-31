<header class="site-navbar container py-0 bg-white" role="banner">

  <!-- <div class="container"> -->
    <div class="row align-items-center">
      
      <div class="col-6 col-xl-2">
        {{-- <h1 class="mb-0 site-logo"><a href="/" class="text-black mb-0">Werbeflächen <span class="text-primary"> </span>  </a></h1> --}}
        <a  href="/">
          <span>
            <img src="{{asset('assets\Led-Theme\logo/logo.png')}}" width="200" height="40"  alt="WERBEFLÄCHEN" style="color: #1e1e2d">
          </span>
          
        </a>
      </div>
      <div class="col-12 col-md-10 d-none d-xl-block">
        <nav class="site-navigation position-relative text-right" role="navigation">

          <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
            <li class="active"><a href="/">Home</a></li>
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
            
            
            
            
            
            
            
            
            
            
            
            
            
             {{-- <form action="{{route('logout')}}" method="post" style="display: inline;">
              @csrf
              <li><button type="submit" style="border: none; display: inline;background-color: Transparent;cursor: pointer;">Log Out</button></li>
            </form> --}}
                  
             @else
             <li class="ml-xl-3 login"><a href="{{route('user.login')}}"><span class="border-left pl-xl-4"></span>Log In</a></li>
             <li><a href="{{route('user.register')}}">Register</a></li>     
             @endif
            
            

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cart({{count($cartItems??$cartItems=[])}})
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                @if (count($cartItems)>0)
                @foreach ($cartItems as $item)
                <span class="dropdown-item">
                 <img src="{{asset('storage/'.($item->images->first())->path)}}" alt="" style="width: 35px; height: 35px;">
                 {{$item->title}}
                 <form action="{{route('cart.led.delete')}}" method="post" style="display: inline;">
                    @csrf
                   <button style="padding: 0;border: none;background: none;cursor: pointer;" type="submit" name="led_id" value="{{$item->id}}" title="delete item">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black" class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                      <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z"/>
                    </svg>
                   </button>
                 </form>
                </span>                    
                @endforeach
                <a class="dropdown-item" href="{{route('cart.list.items')}}">Go to Cart</a>
                @else
                <a class="dropdown-item">Cart Is Empty</a>    
                @endif
              </div>
            </li>

            
          </ul>
          <ul class="navbar-nav me-right mb-2 mb-lg-0">
           
        </ul>
        </nav>
      </div>


      <div class="d-inline-block d-xl-none ml-auto py-3 col-6 text-right" style="position: relative; top: 3px;">
        <a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a>
      </div>

    </div>
  <!-- </div> -->
  
</header>

@section('Styles')
<style>

</style>      
@endsection
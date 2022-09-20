
@extends('layouts.led-theme')

@section('content')

 
    <section id="login">
        <div class="container-fluid w3-padding-48-top">
            <div class="row">
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                    <h2 class="cp-heading">Account registrieren
</h2>
                    <p class="log-info-text">Erhalten Sie Zugang zum Miet-LED-Erlebnis</p>
                        <a href="{{route('user.login')}}" ><p class="log-forgot-text" style="margin:0 !important">Haben Sie bereits ein Konto ? Log in </p></a>

                    <div class="row w3-padding-36-top">
                        <div class="col-md-12">
                            <div class="row">
                                 
                                 @include('common.validation')
     <form    action="{{ route('register') }}" method="POST">
                                    @csrf
<!--    @if ($errors->any())
   
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{$error}}
                    </div> 
                    @endforeach
                    @endif 
                                -->   
                    <div class="col-sm-6 form-group">
                        <label>First Name</label> <input class="cp-input-form"   type="text" placeholder="" name="firstname" value="{{old('firstname')}}" >
                          @error('firstname')
                                <div class="alert alert-danger">
                                        {{$message}}
                                </div>
                                @enderror

                    </div>  
                    <div class="col-sm-6 form-group">
                        <label>Last Name</label> <input class="cp-input-form"    type="text" placeholder="" name="lastname" value="{{old('lastname')}}">
                          @error('lastname')
                            <div class="alert alert-danger">
                                    {{$message}}
                            </div>
                            @enderror

                    </div> 
                    <div class="col-sm-6 form-group">
                        <label>Email</label> <input class="cp-input-form"  type="email" placeholder="" name="email" value="{{old('email')}}">
                            @error('email')
                            <div class="alert alert-danger">
                                    {{$message}}
                            </div>
                            @enderror

                    </div> 
                    <div class="col-sm-6 form-group">
                        <label>Telefon</label> <input class="cp-input-form"   type="text" placeholder="" name="phone" value="{{old('phone')}}">
                          @error('phone')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                        @enderror
                    </div> 
                  
                    <div class="col-sm-12 form-group">
                        <label>die Anschrift
</label> 
                        <input class="cp-input-form" type="text" placeholder="" name="address" value="{{old('address')}}"  id="myAddress" >
                            @error('address')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                        @enderror
                    </div>
                    <div class="col-sm-6 form-group">
                            <label>Password</label> 
                            <input class="cp-input-form"  type="password" placeholder="" name="password" >
                        </div>
                    <div class="col-sm-6 form-group">
                            <label>Password</label> 
                            <input class="cp-input-form"  type="password" placeholder="" name="password_confirmation"  >
                               @error('password')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                        @enderror
                        @error('password_confirmation')
                        <div class="alert alert-danger">
                                {{$message}}
                        </div>
                        @enderror
                        </div>
                                
                           <input type="hidden" name="role" value="user">
                    <input type="hidden" name="redirectUrl" value="{{$redirectUrl??''}}">
                          
                            <div class="w3-padding-36-top w3-center">
                             <button type="submit" class="cp-login-btn w3-ripple btn btn-lg btn-primary w-100 mb-5">
                            <span class="indicator-label">Create Account</span> 
                        </button>
                        <a href="{{route('user.login',($redirectUrl??''))}}" ><p class="log-forgot-text" >Haben Sie bereits ein Konto ? Log in </p></a>
  </div></form>
                         
                            </div>
                        </div>
                    </div>
                </div>
            
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                  <img src="{{asset('assets/newtheme2023/images/loginledimage.jpg')}}" class="cp-img w3-hide-small w3-hide-medium w3-right w3-padding-right">
                </div>
            </div>
        </div>
    </section> 



@endsection  

@section('pageScripts')
{{-- <script src="{{ asset('assets/Metronic-Theme/js/custom/authentication/sign-up/general.js') }}"></script> --}}
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI"></script>
<script type="text/javascript">
    var searchInput = 'myAddress';
    
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

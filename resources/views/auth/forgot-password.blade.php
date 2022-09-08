{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}


@extends('layouts.led-theme')

@section('content')
  
    <div class="container-fluid bg-center">
        <div class="flex-sb btn-margin-lr">
           
        </div>
        <form method="POST" action="{{ route('password.email') }}" >
             @csrf 
              @include('common.validation')
            <div class="middle w3-container">
                <div class="circle-bg"><img class="w3-image" src="{{asset('assets/newtheme2023/images/passwordforgot.png')}}"></div>
                <h2 class="ra-h-24 font-20-sm p-t-10">Forget Password</h2>
                <p class="file-sm-label p-t-10">No worrie we will send you reset instruction</p><label class="d-label w3-left w3-theme-text">Email</label> <input class="d-input-form w3-white theme-border-col" placeholder="Enter email" type="email" name="email" value="{{old('email')}}" required  ><br>
                <a href="check-email.html">
                    <button type="submit" class="theme-bg forget-btn btn btnNext">{{ __('Email Password Reset Link') }}</button>
                   </a> <a href="{{route('user.login')}}">
                <p class="log-forgot-text">Back to Login?</p></a>
            </div>
        </form>
    </div> 

  
  
    
@endsection

 


 
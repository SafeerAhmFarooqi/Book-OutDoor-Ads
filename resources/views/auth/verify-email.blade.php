{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </div>

        @if (session('status') == 'verification-link-sent')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
            </div>
        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div>
                    <x-button>
                        {{ __('Resend Verification Email') }}
                    </x-button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900">
                    {{ __('Log Out') }}
                </button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout> --}}




@extends('layouts.led-theme')

@section('content')
     <div class="container-fluid bg-center">
        <div class="flex-sb btn-margin-lr">
           
        </div>
        
            
            <div class="middle w3-container">
                <div class="circle-bg"><img class="w3-image" src="{{asset('assets/newtheme2023/images/emailicon.png')}}"></div>
                <h2 class="ra-h-24 font-20-sm p-t-10">Email Verification</h2>
                <p class="file-sm-label p-t-10">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</p>

   <form method="POST" action="{{ route('verification.send') }}">
            @csrf
            <button type="submit" class="theme-bg forget-btn btn btnNext">{{ __('Resend Verification Email') }}</button>
          </form>
<div class="clearfix"></div>
<br>
<b style="padding-top:50px;padding-bottom: 50px;"> Or</b>
<form method="POST" action="{{ route('logout') }}">
            @csrf <br>
            <button type="submit" class="theme-bg forget-btn btn btnNext">{{ __('Log Out') }}</button>
          </form>



           
    </div> 
</div>
<div class="clearfix"></div>


  
  
  
@endsection
 
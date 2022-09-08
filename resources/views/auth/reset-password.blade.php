{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
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
        <form method="POST" action="{{ route('password.update') }}">
             @csrf
            @include('common.validation')
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <div class="middle w3-container">
                <div class="circle-bg"><img class="w3-image" src="{{asset('assets/newtheme2023/images/passwordforgot.png')}}"></div>
                <h2 class="ra-h-24 font-20-sm p-t-10">Password Reset</h2>
                <p class="file-sm-label p-t-10">{{ __('Enter New Password') }}  |  No worrie we will send you reset instruction</p><label class="d-label w3-left w3-theme-text">Email</label>
 

 <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" type="email" name="email" value="{{old('email', $request->email)}}" required autofocus >


                 <input class="d-input-form w3-white theme-border-col" type="password" placeholder="Password" name="password" required><br>
                 <input class="d-input-form w3-white theme-border-col" type="password" placeholder="Conform Password" name="password_confirmation" required><br>

                <a href="check-email.html">
                    <button   class="theme-bg forget-btn btn btnNext"    type="submit"  >{{ __('Reset Password') }}</button> 
                   </a>  
            </div>
        </form>
    </div> 




 
@endsection
 

<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Models\Led;
use App\Models\LedImages;

class DashboardController extends AdminController
{
   public function home()
   {
      $leds=Led::with('images')->latest()->take(4)->get();
       return view('app-dashboard.landingpage',['leds'=>$leds]);
      // return view('test');
   }

   public function ledDetail($id)
   {
      $led=Led::with('images')->where('id',$id)->first();
       return view('app-dashboard.detail-page',['led'=>$led,'increment'=>0]);
      // return view('test');
   }

   public function dashboard()
   {
      if(Auth::user()->hasRole('Client'))
      {
         return view('client-dashboard.home-page');
      }
      if(Auth::user()->hasRole('Admin'))
      {
         return view('admin-dashboard.home-page');
      }
      // return view('landingpage');
      // return view('test');
   }
}

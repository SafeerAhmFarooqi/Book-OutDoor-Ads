<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class DashboardController extends AdminController
{
   public function home()
   {
       return view('landingpage');
      // return view('test');
   }

   public function dashboard()
   {
      if(Auth::user()->hasRole('Client'))
      {
         return view('client-dashboard.home');
      }
      // return view('landingpage');
      // return view('test');
   }
}

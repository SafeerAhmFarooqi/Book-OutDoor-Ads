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
use App\Models\City;

class DashboardController extends AdminController
{
   public function home(Request $request)
   {
      $leds=Led::with('images')->latest()->take(4)->get();
      $cities=City::with('led')->get();
      $cartItems=[];
      if (session()->has('cart.items')) {
         foreach (session()->get('cart.items') as $value) {
            array_push($cartItems,Led::find($value));
         }
      }
       return view('app-dashboard.landingpage',[
          'leds'=>$leds,
          'cities'=>$cities,
          'cartItems'=>$cartItems,
         ]);
      // return view('test');
   }

   public function addLedToCart(Request $request)
   {
      $request->session()->push('cart.items', $request->led_id);
      return back()->with('message', 'Item Added to Cart Successfully' );
   }

   public function deleteLedFromCart(Request $request)
   {
      $index=0;
      if (session()->has('cart.items')) {
         foreach (session()->get('cart.items') as $value) {
            
            if ($value==$request->led_id) {
               break;
            }
            $index++;
         }
         $cartArray = $request->session()->get('cart.items');
         unset($cartArray[$index]);
         $cartArray=array_values($cartArray);
         $request->session()->put('cart.items',$cartArray);
         return back()->with('message', 'Item Deleted from Cart Successfully' );
      }
      return back();
   }

   public function ledDetail($id)
   {
      $led=Led::with('images')->where('id',$id)->first();
      $cartItems=[];
      if (session()->has('cart.items')) {
         foreach (session()->get('cart.items') as $value) {
            array_push($cartItems,Led::find($value));
         }
      }
      return view('app-dashboard.detail-page',[
          'led'=>$led,
          'increment'=>0,
          'cartItems'=>$cartItems,
         ]);
   }

   public function dashboard()
   {
      if(Auth::user()->hasRole('Client'))
      {
         return view('client-dashboard.home-page');
      }
      if(Auth::user()->hasRole('Admin'))
      {
         $usersCount=User::role('User')->count();
         $clientCount=User::role('Client')->count();
         $ledCount=Led::all()->count();
         $ledImagesCount=LedImages::all()->count();
         return view('admin-dashboard.home-page',[
            'usersCount'=>$usersCount,
            'clientCount'=>$clientCount,
            'ledCount'=>$ledCount,
            'ledImagesCount'=>$ledImagesCount,
         ]);
      }
      // return view('landingpage');
      // return view('test');
   }
}

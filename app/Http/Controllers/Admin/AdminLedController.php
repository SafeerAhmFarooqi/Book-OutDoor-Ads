<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\LedImages;
use App\Models\SubOrders;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdminLedController extends BaseAdminController
{
 public function ledList()
 {
    // return view('test');
    $leds = Led::all();
    return view('admin-dashboard.led-list-page',['leds'=>$leds,'srNo'=>0]);
 }    

 public function  showOrdersList()
 {
    // return view('test');
    $subOrders = SubOrders::all();
    return view('admin-dashboard.led-orders-page',[
       'subOrders'=>$subOrders,
       'srNo'=>0,
      ]);
 }    

 public function deleteLed(Request $request)
 {
    $userId=(Led::find($request->led_id))->user_id;
    Led::with('images')->where('id',$request->led_id)->delete();
    Storage::deleteDirectory('public/led-images/'.$userId.'/'.$request->led_id);
    return back()->with('success', 'Led Deleted Successfully');
 }   
 
 public function showLedOrders(Request $request)
 {
     $led=Led::find($request->led_id);
     $subOrders=$led->subOrders;
     return view('admin-dashboard.led-list-order-page',[
        'led'=>$led,
        'subOrders'=>$subOrders,
        'srNo'=>0,
      ]);
 }    

 public function popularLeds()
 {
    // return view('test');
    $leds = Led::all();
    $popularLeds = Led::where('popular',true)->get();
    return view('admin-dashboard.led-popular-page',[
       'leds'=>$leds,
       'popularLeds'=>$popularLeds,
       'srNo'=>0,
      ]);
 }    

 public function addLedPopular(Request $request)
 {
    $led=Led::find($request->led_id);
    $led->popular=true;
    $led->save();
    return back()->with('success', 'Led Added to Popular List Successfully');
 }    

 public function removeLedPopular(Request $request)
 {
    $led=Led::find($request->led_id);
    $led->popular=false;
    $led->save();
    return back()->with('success', 'Led Removed from Popular List Successfully');
 }    

 public function trendingLeds()
 {
    // return view('test');
    $leds = Led::all();
    $trendingLeds = Led::where('trending',true)->get();
    return view('admin-dashboard.led-trending-page',[
       'leds'=>$leds,
       'trendingLeds'=>$trendingLeds,
       'srNo'=>0,
      ]);
 }    

 public function addLedTrending(Request $request)
 {
    $led=Led::find($request->led_id);
    $led->trending=true;
    $led->save();
    return back()->with('success', 'Led Added to Trending List Successfully');
 }    

 public function removeLedTrending(Request $request)
 {
    $led=Led::find($request->led_id);
    $led->trending=false;
    $led->save();
    return back()->with('success', 'Led Removed from Trending List Successfully');
 }    
}










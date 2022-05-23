<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\LedImages;
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

 public function deleteLed(Request $request)
 {
    $userId=(Led::find($request->led_id))->user_id;
    Led::with('images')->where('id',$request->led_id)->delete();
    Storage::deleteDirectory('public/led-images/'.$userId.'/'.$request->led_id);
    return back()->with('success', 'Led Deleted Successfully');
 }    
}










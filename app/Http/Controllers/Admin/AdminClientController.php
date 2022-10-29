<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\LedImages;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Mail\UserAccountActivationEmail;
use App\Mail\UserAccountDeactivationEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AdminClientController extends BaseAdminController
{
 public function clientList()
 {
    // return view('test');
    $clients = User::role('Client')->get();
    return view('admin-dashboard.client-list-page',['clients'=>$clients,'srNo'=>0]);
 }    

 public function deleteClient(Request $request)
 {
    User::find($request->client_id)->delete();
    Led::with('images')->where('user_id',$request->client_id)->delete();
    Storage::deleteDirectory('public/led-images/'.$request->client_id);
    return back()->with('success', 'Client Deleted Successfully');
 }    

 public function enablePartner(Request $request)
 {
   $user=User::findOrFail($request->user_id);
   $user->update([
      'status'=>true,
    ]);
    Mail::to($user->email)->send(new UserAccountActivationEmail());
    return back()->with('success', 'Partner Enabled Successfully and Email Noification has been sent');
 }  

 public function verifyPartner(Request $request)
 {
   $user=User::findOrFail($request->user_id);
   $user->update([
      'email_verified_at'=>Carbon::now(),
    ]);
   // Mail::to($user->email)->send(new UserAccountActivationEmail());
    return back()->with('success', 'Partner Verified Successfully');
 }

 public function disablePartner(Request $request)
 {
   $user=User::findOrFail($request->user_id);
   $user->update([
      'status'=>false,
    ]);

    Mail::to($user->email)->send(new UserAccountDeactivationEmail());
    return back()->with('success', 'Partner Disabled Successfully and Email Noification has been sent');
 }  

 public function showClientLeds(Request $request)
 {
    $leds=Led::where('user_id',$request->client_id)->get();
    $client=User::find($request->client_id);
    return view('admin-dashboard.client-led-list-page',[
       'client'=>$client,
       'leds'=>$leds,
       'srNo'=>0,
      ]);
}

public function  changeClientPassword(Request $request)
 {
   $request->validate([
      //Validation Rules
      'password' => ['required', Rules\Password::defaults()],
       
  ],[
      //Validation Messages
      'required'=>':attribute Is Required',
  ],[
      //Validation Attributes
      'password' => 'Password',       
  ]);

     $user=User::find($request->clientId);
     $user->update([
      'password' => Hash::make($request->password),
     ]);
     if($user)
     {
         return back()->with('success', 'Password Changed Successfully' );
     }
     else
     {
         return back()->with('error', 'Unable to Change Password' );
     }
 }



}






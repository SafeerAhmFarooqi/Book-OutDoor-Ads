<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\LedImages;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Lang;
use App\Mail\UserAccountActivationEmail;
use App\Mail\UserAccountDeactivationEmail;
use Illuminate\Support\Carbon;

class AdminUsersController extends BaseAdminController
{
 public function usersList()
 {
    // return view('test');
    $users = User::role('User')->get();
    return view('admin-dashboard.users-list-page',['users'=>$users,'srNo'=>0]);
 }    

 public function deleteUser(Request $request)
 {
    User::find($request->user_id)->delete();
    Led::with('images')->where('user_id',$request->user_id)->delete();
    Storage::deleteDirectory('public/led-images/'.$request->user_id);
    return back()->with('success', 'User Deleted Successfully');
 }    

 public function enableUser(Request $request)
 {
   $user=User::findOrFail($request->user_id);
   $user->update([
      'status'=>true,
    ]);
    Mail::to($user->email)->send(new UserAccountActivationEmail());
    return back()->with('success', 'User Enabled Successfully and Email Noification has been sent');
 }  

 public function verifyUser(Request $request)
 {
   $user=User::findOrFail($request->user_id);
   $user->update([
      'email_verified_at'=>Carbon::now(),
    ]);
    //Mail::to($user->email)->send(new UserAccountActivationEmail());
    return back()->with('success', 'User Email Verified Successfully');
 }  

 public function disableUser(Request $request)
 {
   $user=User::findOrFail($request->user_id);
   $user->update([
      'status'=>false,
    ]);

    Mail::to($user->email)->send(new UserAccountDeactivationEmail());
    return back()->with('success', 'User Disabled Successfully and Email Noification has been sent');
 }  

 public function showUserOrders(Request $request)
 {
     $user=User::find($request->user_id);
     $orders=$user->orders->where('payment_status',true);
     return view('admin-dashboard.users-order-page',[
        'user'=>$user,
        'orders'=>$orders,
        'srNo'=>0,
      ]);
 }   
}










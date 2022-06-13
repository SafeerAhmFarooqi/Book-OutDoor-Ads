<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\LedImages;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

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










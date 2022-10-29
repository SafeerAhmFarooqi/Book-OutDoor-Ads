<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends BaseUserController
{
   public function show()
   {
       return view('user-dashboard.profile-page');
   }

   public function edit()
   {
       return view('user-dashboard.profile-edit-page');
   }

   public function update(Request $request)
   {
    $request->validate([
        'firstname' => ['required', 'string', 'max:255'],
        'lastname' => ['required', 'string', 'max:255'],
        'profile_pic' => 'mimes:jpeg,jpg,png,gif,bmp|max:10000',
    ]);
    $user = Auth::user();
    $oldProfilePic='';
    if(Auth::user()->profile_pic)
    {
        $oldProfilePic=Auth::user()->profile_pic;
    }
    $user->update($request->all());
    if($request->profile_pic)
    {
        Storage::disk('public')->delete($oldProfilePic);
        $request->profile_pic->store('user-profile-pics/'.Auth::user()->id,'public');
        $filePath = 'user-profile-pics/'.Auth::user()->id.'/'. $request->profile_pic->hashName();
        $user->update([
            'profile_pic' => $filePath,
        ]);
    }
    if($request->profile_pic_remove)
    {
        Storage::disk('public')->delete($oldProfilePic);
        $user->update([
            'profile_pic' => '',
        ]);
    }
    return back()->with('message', 'Profile Updated Successfully' );
   }

   public function userProfilePasswordChange(Request $request)
   {
      if(Auth::check())
      {
          Auth::guard('web')->logout();
  
          $request->session()->invalidate();
  
          $request->session()->regenerateToken();
  
          return redirect()->route('password.request',$page='password-change');
      }
      return back();
   }
}










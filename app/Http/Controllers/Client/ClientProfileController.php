<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ClientProfileController extends BaseClientController
{
   public function show()
   {
       return view('client-dashboard.profile-page');
   }

   public function edit()
   {
       return view('client-dashboard.profile-edit-page');
   }

   public function update(Request $request)
   {
    $request->validate([
        'firstname' => ['required', 'string', 'max:255'],
        'lastname' => ['required', 'string', 'max:255'],
    ]);
    $user = Auth::user();
    $user->update($request->all());
    return back()->with('message', 'Profile Updated Successfully' );
   }
}










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
}










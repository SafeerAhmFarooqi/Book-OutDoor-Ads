<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\Orders;
use App\Models\LedImages;
use Illuminate\Support\Facades\Storage;
use App\Models\City;

class ClientOrderController extends BaseClientController
{

    public function viewOrder()
    {
        $leds=Led::where('user_id',Auth::user()->id)->get();
        return view('client-dashboard.led-order-page',[
            'leds'=>$leds,
            'srNo'=>0,
        ]);
    }
   
   
}










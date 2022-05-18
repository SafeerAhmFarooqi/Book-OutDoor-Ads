<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;

class ClientLedController extends BaseClientController
{

    public function addLed()
    {
        return view('client-dashboard.led-add-page');
    }

    public function storeLed(Request $request)
    {
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:500'],
            'location' => ['required', 'string', 'max:500'],
            'price' => ['required', 'numeric'],
            'tax' => ['required', 'numeric'],
        ]);

        $led = Led::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'price' => $request->price,
            'tax' => $request->tax,
        ]);
        if($led)
        {
            return back()->with('message', 'Led Created Successfully' );
        }
        else
        {
            return back()->with('message', 'Unable to create New Led' );
        }
    }
   
}










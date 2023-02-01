<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\SubOrders;
use App\Mail\OrderAcceptedMessage;
use App\Models\LedImages;
use Illuminate\Support\Facades\Storage;
use App\Models\City;
use Illuminate\Support\Facades\Mail;

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

    public function viewBilling()
    {
        $subOrders = SubOrders::where('user_id',Auth::user()->id)->get();
        return view('client-dashboard.billing-status-page',[
           'subOrders'=>$subOrders,
          ]);
    }

    public function acceptLedOrder(Request $request){
            $subOrder = SubOrders::where(['user_id' => Auth::user()->id,'id' => $request->subOrderId])->first();
            if ($subOrder) {
                $subOrder->getAndSaveUniqueToken();
                try {
                    Mail::to($subOrder->buyer->email)->send(new OrderAcceptedMessage($subOrder->id));
                } catch (\Throwable $th) {
                    dd($th->getMessage());
                    return back()->with('error','Unable to send email'.' : '.$th->getMessage());
                }   
            } else {
                return back();
            }
            
    }
    
   
   
}










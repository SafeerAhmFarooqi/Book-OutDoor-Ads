<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Orders;

class UserOrderController extends BaseUserController
{
   public function show()
   {
        $orders=Orders::where('user_id',Auth::user()->id)->get();
       return view('user-dashboard.order-page',[
           'orders'=>$orders,
           'srNo'=>0,
       ]);
   }

   public function subOrdersList(Request $request)
   {
        $order=Orders::wiht('subOrders')->where('id',$request->order_id)->first();
       return view('user-dashboard.sub-order-page',[
           'order'=>$order,
           'srNo'=>0,
       ]);
   }

   
}










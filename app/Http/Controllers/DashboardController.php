<?php

namespace App\Http\Controllers;

use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use App\Models\Led;
use App\Models\LedImages;
use App\Models\City;
use App\Models\Orders;
use App\Models\SubOrders;
use Mollie\Laravel\Facades\Mollie;

class DashboardController extends AdminController
{

   public function paymentProcess($id=null)
{
   // $order=Orders::findOrFail($id);
   //  return view('app-dashboard.order-complete',[
   //             'order'=>$order,
   //          ]);
  // return redirect('/')->with('payment','Thanks for your order,Please check your orders section');
  return redirect()->route('order.complete',[$id]);
}

public function payment($id)
   {
            $order=Orders::findOrFail($id);
            //return $price;
            //return $order->total_price; 
            // $order->payment_status=true;
            // $order->save();
            // $request->session()->forget('cart.items');
            // return view('app-dashboard.order-complete',[
            //    'order'=>$order,
            // ]);

            $payment = Mollie::api()->payments->create([
               "amount" => [
                   "currency" => "EUR",
                   "value" => number_format($order->total_price, 2, '.', ''), // You must send the correct number of decimals, thus we enforce the use of strings
               ],
               "description" => "Order #".$order->id,
               "redirectUrl" => route('payment.order.process',$order->id),
               "webhookUrl" => route('webhooks.mollie'),
               "metadata" => [
                   "order_id" => $order->id,
               ],
           ]);
           $order->payment_id=$payment->id;
           $order->save();
          // $payment = Mollie::api()->payments()->get($payment->id);
           // redirect customer to Mollie checkout page
           return redirect($payment->getCheckoutUrl(), 303);
            
   }

public function handle(Request $request) {
   //return "safeer";
   //return redirect('/');
   //echo "safeer";
   if (! $request->has('id')) {
      return;
  }
  $payment = Mollie::api()->payments()->get($request->id);
  $order=Orders::findOrFail($payment->metadata->order_id);
  if ($payment->isPaid()) {
     $order->payment_status=true;
     $order->save();
  }
  if (!$payment->isPaid()) {
   $order->payment_status=false;
     $order->save();
}
   // $paymentId = 12345;
   // $payment = Mollie::api()->payments->get($paymentId);

   // if ($payment->isPaid())
   // {
   //     echo 'Payment received.';
   //     // Do your thing ...
   // }
}

   public function geoLocate($address)
    {
        try {
            $lat = 0;
            $lng = 0;
    
            $data_location = "https://maps.google.com/maps/api/geocode/json?key=AIzaSyAIeDyz_v1KkoU3ZTRqK5e-9Ax1lNjSIEI&address=".str_replace(" ", "+", $address)."&sensor=false";
            $data = file_get_contents($data_location);
            usleep(200000);
            // turn this on to see if we are being blocked
            // echo $data;
            $data = json_decode($data);
            if ($data->status=="OK") {
                $lat = $data->results[0]->geometry->location->lat;
                $lng = $data->results[0]->geometry->location->lng;
    
                if($lat && $lng) {
                    return array(
                        'status' => true,
                        'lat' => $lat, 
                        'long' => $lng, 
                        'google_place_id' => $data->results[0]->place_id
                    );
                }
            }
            if($data->status == 'OVER_QUERY_LIMIT') {
                return array(
                    'status' => false, 
                    'message' => 'Google Amp API OVER_QUERY_LIMIT, Please update your google map api key or try tomorrow'
                );
            }
    
        } catch (Exception $e) {
    
        }
    
        return array('lat' => null, 'long' => null, 'status' => false);
    }

   public function home(Request $request)
   {
      $leds=Led::with('images')->latest()->take(4)->get();
      $popularLeds=Led::with(['images','city'])->where('popular',true)->get();
      $trendingLeds=Led::with(['images','city'])->where('trending',true)->get();
      $cities=City::with('led')->get();
      $cartItems=[];
      if (session()->has('cart.items')) {
         foreach (session()->get('cart.items') as $value) {
            array_push($cartItems,Led::findOrFail(strtok($value,'*')));
         }
      }
       return view('app-dashboard.landingpage',[
          'leds'=>$leds,
          'popularLeds'=>$popularLeds,
          'trendingLeds'=>$trendingLeds,
          'cities'=>$cities,
          'cartItems'=>$cartItems,
         ]);
      // return view('test');
   }

   public function addLedToCart(Request $request)
   {
      //return  strtok($request->led_id.'*'.$request->book_dates,'*');
      //return $request->no_of_days;
      $request->validate([
         //Validation Rules
         //'no_of_days' => ['required'],
         'book_dates' => ['required','date'],
       
     ],[
         //Validation Messages
         'required'=>':attribute is Required',
     ],[
         //Validation Attributes
        // 'no_of_days' =>'Booking Date',
         'book_dates' =>'Booking Date',
     ]);
     // dd($request->book_dates);
      $request->session()->push('cart.items', $request->led_id.'*'.$request->book_dates.'*'.$request->no_of_days);
      return back()->with('message', 'Item Added to Cart Successfully' );
   }

   public function deleteLedFromCart(Request $request)
   {
      $index=0;
      if (session()->has('cart.items')) {
         foreach (session()->get('cart.items') as $value) {
            
            if (strtok($value,'*')==$request->led_id) {
               break;
            }
            $index++;
         }
         $cartArray = $request->session()->get('cart.items');
         unset($cartArray[$index]);
         $cartArray=array_values($cartArray);
         $request->session()->put('cart.items',$cartArray);
         return back()->with('message', 'Item Deleted from Cart Successfully' );
      }
      return back();
   }

   public static array $bookingDurations = [
      '1' => 'All',
      '2' => '3 Days',
      '3' => '1 Week',
      '4' => '1 Month',
      '5' => '3 Month',
      '6' => '6 Month',
  ];

  public function getSequentialDisableDates($id)
  {
   $led=Led::findOrFail($id);

   switch ($led->bookingduration) {
      case "All":
         $sequentialDisableDates=new SubOrders([
            'startDate' => Carbon::now(),
            'endDate' => Carbon::now(),
         ]);
        return $sequentialDisableDates;
        break;
      case "3 Days":
         $dates=array();
         //dd($sequentialDisableDates);
         for ($i=0; $i < 9999; $i+=3) { 
            $sequentialDisableDates=new SubOrders([
               'startDate' => $led->created_at->addDays($i+1),
               'endDate' => $led->created_at->addDays($i+2),
            ]);
            array_push($dates,$sequentialDisableDates);
        }
        //dd($sequentialDisableDates);
        return $dates;
        break;
        case "1 Week":
         $dates=array();
         //dd($sequentialDisableDates);
         for ($i=0; $i < 9999; $i+=7) { 
            $sequentialDisableDates=new SubOrders([
               'startDate' => $led->created_at->addDays($i+1),
               'endDate' => $led->created_at->addDays($i+6),
            ]);
            array_push($dates,$sequentialDisableDates);
        }
        //dd($sequentialDisableDates);
        return $dates;
        break;
        case "1 Month":
         $dates=array();
         //dd($sequentialDisableDates);
         for ($i=0; $i < 9999; $i+=30) { 
            $sequentialDisableDates=new SubOrders([
               'startDate' => $led->created_at->addDays($i+1),
               'endDate' => $led->created_at->addDays($i+29),
            ]);
            array_push($dates,$sequentialDisableDates);
        }
        //dd($sequentialDisableDates);
        return $dates;
        break;
        case "3 Month":
         $dates=array();
         //dd($sequentialDisableDates);
         for ($i=0; $i < 9999; $i+=90) { 
            $sequentialDisableDates=new SubOrders([
               'startDate' => $led->created_at->addDays($i+1),
               'endDate' => $led->created_at->addDays($i+89),
            ]);
            array_push($dates,$sequentialDisableDates);
        }
        //dd($sequentialDisableDates);
        return $dates;
        break;
        case "6 Month":
         $dates=array();
         //dd($sequentialDisableDates);
         for ($i=0; $i < 9999; $i+=180) { 
            $sequentialDisableDates=new SubOrders([
               'startDate' => $led->created_at->addDays($i+1),
               'endDate' => $led->created_at->addDays($i+179),
            ]);
            array_push($dates,$sequentialDisableDates);
        }
        //dd($sequentialDisableDates);
        return $dates;
        break;
     
      default:
        return;
    }
  }

   public function ledDetail($id)
   {
      $led=Led::findOrFail($id);

      $cartItems=[];
      if (session()->has('cart.items')) {
         foreach (session()->get('cart.items') as $value) {
            array_push($cartItems,Led::findOrFail(strtok($value,'*')));
         }
      }
      $disableDates=SubOrders::with(['order'])
      ->whereHas('order', function($q) {
      $q->where('payment_status',true);
      })
      ->where('led_id',$id)
      ->where('startDate','>=',Carbon::now()->format('Y-m-d'))
      ->get();
      //dd($led->bookingduration=='1 Week');
     // dd($led->bookingduration);
      // $sequentialDisableDates=new SubOrders([
      //    'startDate' => Carbon::now()->addDays(0),
      //    'endDate' => Carbon::now()->addDays(0),
      // ]);





      //Code for Sequential Disable Dates
      // foreach ($this->getSequentialDisableDates($id) as $value) {
      //    $disableDates->push($value);   
      // }
      





      //dd($disableDates);
      //dd($sequentialDisableDates);
      //dd($disableDates);
      // $disableDates->push([
      //    'startDate' => Carbon::now()->format('Y-m-d'),
      //    'endDate' => Carbon::now()->format('Y-m-d'),
      // ]);
      // dd($disableDates);

    // var_dump($led->bookingduration);
      
      return view('app-dashboard.detail-page',[
          'led'=>$led,
          'increment'=>0,
          'cartItems'=>$cartItems,
          'disableDates'=>$disableDates,
          'coordinates'=>json_encode($this->geoLocate($led->location)),
         ]);
   }

   public function dashboard()
   {
      if(Auth::user()->hasRole('Client'))
      {
         $ordersCount=0;
         $totalIncome=0;
         $ledCount=Led::where('user_id',Auth::user()->id)->count();
         $leds=Led::where('user_id',Auth::user()->id)->get();
         foreach ($leds as $led) {
            foreach ($led->SubOrders as $subOrder) {
               if($subOrder->order->payment_status==true)
               {
                  $totalIncome+=$subOrder->order->total_price;
                  $ordersCount++;
               }  
            }
         }
         return view('client-dashboard.home-page',[
            'ledCount'=>$ledCount,
            'ordersCount'=>$ordersCount,
            'totalIncome'=>$totalIncome,
         ]);
      }

      if(Auth::user()->hasRole('User'))
      {
         $subOrdersCount=0;
         $completedSubOrdersCount=0;
         $orders=Orders::with('subOrders')
         ->where('user_id',Auth::user()->id)
         ->where('payment_status',true)
         ->get();
         foreach ($orders as $order) {
            $subOrdersCount+=$order->subOrders->count();
            $completedSubOrdersCount+=$order->subOrders->where('endDate','<',Carbon::now()->format('Y-m-d'))->count();
         }
         return view('user-dashboard.home-page',[
            'subOrdersCount'=>$subOrdersCount,
            'completedSubOrdersCount'=>$completedSubOrdersCount,
         ]);
      }

      if(Auth::user()->hasRole('Admin'))
      {
         $usersCount=User::role('User')->count();
         $clientCount=User::role('Client')->count();
         $ledCount=Led::all()->count();
         $subOrders=SubOrders::all();
         $orderCount=0;
         foreach ($subOrders as $subOrder) {
            if($subOrder->order->payment_status==true)
            {
               $orderCount++;
            }
         }
         $cityCount=City::all()->count();
         $popularLedCount=Led::where('popular',true)->count();
         $trendingLedCount=Led::where('trending',true)->count();
         return view('admin-dashboard.home-page',[
            'usersCount'=>$usersCount,
            'clientCount'=>$clientCount,
            'ledCount'=>$ledCount,
            'orderCount'=>$orderCount,
            'cityCount'=>$cityCount,
            'popularLedCount'=>$popularLedCount,
            'trendingLedCount'=>$trendingLedCount,
         ]);
      }
      // return view('landingpage');
      // return view('test');
   }

   public function listCartItems()
   {
      $cartItems=[];
      if (session()->has('cart.items')&&session()->get('cart.items')) {
         foreach (session()->get('cart.items') as $value) {
            $led=Led::with('images')->where('id',strtok($value,'*'))->first();
            $led->setStartAndEndDate($value);
            array_push($cartItems,$led);
         }
         $price=0;
         $totalTax=0;
         foreach ($cartItems as $key=>$value) {
            $price+=$value->price*$value->noOfDays;
            $tax=$value->price*$value->noOfDays;
            //$key==1?dd($tax) : '';
            $totalTax+=(($tax/100)*$value->tax);
            //$key==1?dd($totalTax) : '';
         }
         $totalPrice=$price+$totalTax;
         return view('app-dashboard.cart-items',[
            'cartItems'=>$cartItems,
            'price'=>$price,
            'totalTax'=>$totalTax,
            'totalPrice'=>$totalPrice,
         ]);
      } else {
         return redirect()->route('home');
      } 
   }

   public function checkout(Request $request)
   {
      if(Auth::check()&&!Auth::user()->hasRole('Admin')&&!Auth::user()->hasRole('Client'))
      {
         $cartItems=[];
         if (session()->has('cart.items')&&session()->get('cart.items')) {
            foreach (session()->get('cart.items') as $value) {
               $led=Led::with('images')->where('id',strtok($value,'*'))->first();
               $led->setStartAndEndDate($value);
               array_push($cartItems,$led);
            }
            $price=0;
            $totalTax=0;
            foreach ($cartItems as $value) {
               $price+=$value->price*$value->noOfDays;
               $tax=$value->price*$value->noOfDays;
               $totalTax+=(($tax/100)*$value->tax);
            }
            $totalPrice=$price+$totalTax;
            // return view('app-dashboard.cart-items',[
            //    'cartItems'=>$cartItems,
            //    'price'=>$price,
            //    'totalTax'=>$totalTax,
            //    'totalPrice'=>$totalPrice,
            // ]);

            $order = Orders::create([
               'total_price' => $totalPrice,
               'total_tax' => $totalTax,
           ]);

           foreach ($cartItems as $value) {
            SubOrders::create([
               'user_id' => (Led::findOrFail($value->id))->user->id,
               'led_id' => $value->id,
               'order_id' => $order->id,
               'price' => $value->price*$value->noOfDays,
               'no_of_days' => $value->noOfDays,
               'tax' => $value->tax*$value->noOfDays,
               'startDate' => $value->startDate,
               'endDate' => $value->endDate,
               'order_id' => $order->id,
           ]);
           }
           $request->session()->forget('cart.items');
           return redirect()->route('led.order.payment',$order->id);
         //   return view('app-dashboard.payment-page',[
         //      'order'=>$order,
         //   ]);

         } else {
            return redirect()->route('home');
         } 
      }
      if(Auth::check()&&Auth::user()->hasRole('Admin')||Auth::check()&&Auth::user()->hasRole('Client'))
      {
         $cartItems=[];
         if (session()->has('cart.items')&&session()->get('cart.items')) {
            foreach (session()->get('cart.items') as $value) {
               array_push($cartItems,$value);
            }
               $request->session()->forget('cart.items');
               Auth::guard('web')->logout();
               $request->session()->invalidate();
               $request->session()->regenerateToken();
            foreach ($cartItems as $value) {
               $request->session()->push('cart.items', $value);       
            }
            return redirect()->route('user.login','checkout');
         } else {
            return redirect()->route('home');
         }
         
        
        
         // return redirect()->route('user.login',true);
      }
      if(!Auth::check())
      {
         $cartItems=[];
         if (session()->has('cart.items')&&session()->get('cart.items')) {
            foreach (session()->get('cart.items') as $value) {
               array_push($cartItems,$value);
            }
               $request->session()->forget('cart.items');
               Auth::guard('web')->logout();
               $request->session()->invalidate();
               $request->session()->regenerateToken();
            foreach ($cartItems as $value) {
               $request->session()->push('cart.items', $value);       
            }
            return redirect()->route('user.login','checkout');
         } else {
            return redirect()->route('home');
         }
         
        
        
         // return redirect()->route('user.login',true);
      }
      else
      {
         return redirect()->route('home');
      }
   }

   public function deleteLedFromCartList(Request $request)
   {
      $index=0;
      if (session()->has('cart.items')) {
         foreach (session()->get('cart.items') as $value) {
            
            if (strtok($value,'*')==$request->led_id) {
               break;
            }
            $index++;
         }
         $cartArray = $request->session()->get('cart.items');
         unset($cartArray[$index]);
         $cartArray=array_values($cartArray);
         $request->session()->put('cart.items',$cartArray);
         $cartItems=[];
         if (session()->has('cart.items')&&session()->get('cart.items')) {
            foreach (session()->get('cart.items') as $value) {
               $led=Led::with('images')->where('id',strtok($value,'*'))->first();
               $led->setStartAndEndDate($value);
               array_push($cartItems,$led);
            }
            $price=0;
         $totalTax=0;
            foreach ($cartItems as $value) {
               $price+=$value->price*$value->noOfDays;
            $totalTax+=$value->tax*$value->noOfDays;
            }
            $totalPrice=$price+$totalTax;
            return view('app-dashboard.cart-items',[
               'cartItems'=>$cartItems,
               'price'=>$price,
               'totalTax'=>$totalTax,
               'totalPrice'=>$totalPrice,
            ]);
         } else {
            return redirect()->route('home');
         }  
      }
      return redirect()->route('home');
   }

   

   public function searchLed(Request $request)
   {
      return view('app-dashboard.led-search-results',[
         'location'=>$request->location,
         'find'=>$request->find,
      ]);       
   }

   public function searchMapLed()
   {
      return view('app-dashboard.led-map-search-results');       
   }
   public function showImprint()
   {
      return view('app-dashboard.imprint');        
   }

   public function showContact()
   {
      return view('app-dashboard.contact');       
   }

   public function showAgb()
   {
      return view('app-dashboard.agb');       
   }

   public function showPolicy()
   {
      return view('app-dashboard.policy');       
   }

   public function showAbout()
   {
      return view('app-dashboard.about');       
   }

   public function checkOrder($id)
   {
      return view('email.order-complete-message',[
         'order'=> Orders::findOrFail($id),
      ]);
      return 'safeer'.$id;
      return view('app-dashboard.about');       
   }

   public function showPaymentCompletePage($id)
   {
      if (Auth::check()&&Auth::user()->hasRole('User')&&Orders::where('user_id',Auth::user()->id)->where('id',$id)->first()) {
         return view('app-dashboard.order-complete-page',[
            'id'=>$id,
         ]);
      } else {
         return redirect('/');
      }           
   }

   public function listCitiesLeds($id=false)
   {
      if($id)
      {
         $city=City::findOrFail($id);
         $city??$id=false;
      }
      return view('app-dashboard.list-cities-leds',[
         'id'=>$id,
      ]);       
   }
}



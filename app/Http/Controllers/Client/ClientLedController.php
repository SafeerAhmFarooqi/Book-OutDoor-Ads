<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\LedImages;
use Illuminate\Support\Facades\Storage;
use App\Models\City;

class ClientLedController extends BaseClientController
{

    public function addLed()
    {
        $cities=City::all();
        return view('client-dashboard.led-add-page',[
            'cities'=>$cities,
        ]);
    }

    public function storeLed(Request $request)
    {
        $request->validate([
            //Validation Rules
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required'],
            'location' => ['required', 'string', 'max:500'],
            'ledtype' => ['required'],
            'multimediaquantity' => $request->ledtype==2?['required', 'integer'] : '',
            'city' => ['required', 'string', 'max:500'],
            'price' => ['required', 'numeric'],
            'tax' => ['required', 'numeric'],
            'images' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp|max:2048'
          
        ],[
            //Validation Messages
            'required'=>':attribute is Required',
        ],[
            //Validation Attributes
            'title' => 'Title',
            'description' => 'Description',
            'location' => 'Location',
            'ledtype' => 'Led Type',
            'multimediaquantity' => 'Multimedia Quantity',
            'city' => 'City',
            'price' => 'Price',
            'tax' => 'Tax',
            'images' => 'Image',
        ]);

        $led = Led::create([
            'title' => $request->title,
            'description' => $request->description,
            'location' => $request->location,
            'multimedia' => $request->ledtype==2? true : false,
            'multimediaquantity' => $request->ledtype==2?$request->multimediaquantity : null,
            'city_id' => $request->city,
            'price' => $request->price,
            'tax' => $request->tax,
        ]);

        foreach($request->file('images') as $image)
        {
            $image->store('led-images/'.Auth::user()->id.'/'.$led->id,'public');
            $filePath = 'led-images/'.Auth::user()->id.'/'.$led->id .'/'. $image->hashName();
            $images = new LedImages(['path' => $filePath, 'name' => $image->getClientOriginalName()]);
            $led->images()->save($images);
        }

        if($led)
        {
            return back()->with('message', 'Led Created Successfully' );
        }
        else
        {
            return back()->with('message', 'Unable to create New Led' );
        }
    }

    public function viewLed()
    {
        $leds=Led::with('images')->where('user_id',Auth::user()->id)->get();
        //return count($leds);
        return view('client-dashboard.led-view-page',['leds' => $leds,'srNo'=>0]);
    }

    public function ledDelete(Request $request)
    {
        Led::find($request->led_id)->delete();
        LedImages::where('led_id',$request->led_id)->delete();
        Storage::deleteDirectory('public/led-images/'.Auth::user()->id.'/'.$request->led_id);
        return back()->with('success', 'Led Deleted Successfully');
    }

    public function editLed($id)
    {
        $led=Led::find($id);
        if(!$led || $led->user_id!=Auth::user()->id)
        {
            return redirect()->route('client.led.view');
        }
        if($led)
        {
            $led=Led::with('images')->where('id',$id)->first();
        }
        return view('client-dashboard.led-edit-page',['led' => $led]);
    }

    public function updateLed(Request $request,$id)
    {
        $led=Led::find($id);
        if(!$led || $led->user_id!=Auth::user()->id)
        {
            return redirect()->route('client.led.view');
        }
        $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:500'],
            'location' => ['required', 'string', 'max:500'],
            'price' => ['required', 'numeric'],
            'tax' => ['required', 'numeric'],
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg,bmp|max:2048'
        ]);
        $led->update($request->all());
        if($request->file('images'))
        {
            foreach($request->file('images') as $image)
            {
                $image->store('led-images/'.Auth::user()->id.'/'.$led->id,'public');
                $filePath = 'led-images/'.Auth::user()->id.'/'.$led->id .'/'. $image->hashName();
                $images = new LedImages(['path' => $filePath, 'name' => $image->getClientOriginalName()]);
                $led->images()->save($images);
            }
        }
        
        return back()->with('message', 'Led Updated Successfully' );
    }

    public function deleteLedImage(Request $request)
    {
       $image=LedImages::find($request->imageId);
       Storage::delete('public/'.$image->path);
       $image->delete();
       return back()->with('message', 'Image Deleted Successfully' );
        //return 'image : '.$request->imageId.' : led Id : '.$ledId;

    }



    
   
}










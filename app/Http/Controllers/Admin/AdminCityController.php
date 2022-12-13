<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Led;
use App\Models\City;
use App\Models\Country;
use App\Models\LedImages;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class AdminCityController extends BaseAdminController
{
 public function cityList()
 {
    $cities = City::all();
    return view('admin-dashboard.city-list-page',[
        'countries' => Country::where('status',true)->get(),
        'cities'=>$cities,
        'srNo'=>0,
    ]);
 }    

 public function cityStore(Request $request)
 {
    $request->validate([
        'city' => ['required', 'string', 'max:255'],
        'country' => ['required'],
        'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);



    $city = City::create([
        'country_id' => $request->country,
        'city' => $request->city,
    ]);
    if($request->icon)
    {
        $request->icon->store('city-images/'.$city->id,'public');
        $filePath = 'city-images/'.$city->id.'/'. $request->icon->hashName();
        $city->icon=$filePath;
        $city->save();
    }
    if($city)
    {
        return back()->with('success', 'Led Created Successfully' );
    }
    else
    {
        return back()->with('success', 'Unable to create New Led' );
    }
 }    

 public function cityUpdate(Request $request)
 {
    $request->validate([
        'city' => ['required', 'string', 'max:255'],
        'icon' => 'image|mimes:jpg,png,jpeg,gif,svg|max:2048',
    ]);


    $city=City::findOrFail($request->cityId);
    $city->update([
        'city' => $request->city,
    ]);
    if($request->icon)
    {
        storage::delete('public/'.$city->icon);
        $request->icon->store('city-images/'.$city->id,'public');
        $filePath = 'city-images/'.$city->id.'/'. $request->icon->hashName();
        $city->icon=$filePath;
        $city->save();
    }
    elseif($request->icon_remove)
    {
        $request->validate([
            'icon' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        // storage::delete('public/'.$city->icon);
        // $city->update([
        //     'icon' => '',
        // ]);
    }
    if($city)
    {
        return back()->with('success', 'Led Updated Successfully' );
    }
    else
    {
        return back()->with('success', 'Unable to Update New Led' );
    }
 } 

 public function cityDelete(Request $request)
    {
        City::find($request->city_id)->delete();
        Storage::deleteDirectory('public/city-images/'.$request->city_id);
        return back()->with('success', 'Led Deleted Successfully');
    }
}










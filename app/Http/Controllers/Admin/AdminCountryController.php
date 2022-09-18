<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\Tax;

class AdminCountryController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countries = Country::orderBy('status','DESC')->get();
    return view('admin-dashboard.country-list-page',[
        'countries'=>$countries,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // return $id;
       $request->validate([
        //Validation Rules
        'tax' => ['required', 'numeric'],
      
    ],[
        //Validation Messages
        'required'=>':attribute is Required',
    ],[
        //Validation Attributes
        'Tax' =>'Tax',
    ]);

        $tax=Tax::where('country_id',$id)->first();

        if ($tax) {
            $tax->update([
                'tax' => $request->tax,
            ]);
        } else {
            $tax=Tax::create([
                'country_id' => $id,
                'tax' => $request->tax,
            ]);
        }

        if($tax)
        {
            return back()->with('success', 'Tax Updated Successfully' );
        }
        else
        {
            return back()->with('success', 'Unable to Update Tax' );
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,Request $request)
    {
        if ($request->action=='disable') {
            $country=Country::findOrFail($id);
            $country->update([
                'status' => false,
            ]);
        } else {
            $country=Country::findOrFail($id);
            $country->update([
                'status' => true,
            ]);
        }
        

        if($country)
        {
            return back()->with('success', 'Country Status Updated Successfully' );
        }
        else
        {
            return back()->with('success', 'Unable to Update Country Status' );
        }
    }
}

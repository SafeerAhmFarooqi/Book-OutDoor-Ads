<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Orders;

class AdminBillingController extends BaseAdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::role('Client')->get();
        return view('admin-dashboard.users-commission-list-page',[
            'users'=>$users,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $orders = Orders::where('payment_status',true)->get();
        return view('admin-dashboard.billing-status-page',[
           'orders'=>$orders,
          ]);
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
        //return $request;
        $request->validate([
            //Validation Rules
            'admincommission' => ['required', 'numeric', 'max:100'],
          
        ],[
            //Validation Messages
            'required'=>':attribute is Required',
        ],[
            //Validation Attributes
            'admincommission' =>'Admin Commission',
        ]);

        $adminCommission=(User::findOrFail($id))->update(['admincommission'=>$request->admincommission]);
        if($adminCommission)
        {
            return back()->with('success', 'Admin Commission Updated Successfully' );
        }
        else
        {
            return back()->with('error', 'Unable to update Admin Commission' );
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        if ($request->status=='unpaid') {
            $order=Orders::findOrFail($id)->update([
                'complete_status' => false,
            ]);
            if($order)
                {
                    return back()->with('success', 'You have not paid to partner' );
                }
                else
                {
                    return back()->with('error', 'Unable to update paid to partner status' );
                }
            
        } else {
            $order=Orders::findOrFail($id)->update([
                'complete_status' => true,
            ]);
            if($order)
                {
                    return back()->with('success', 'You have Paid to partner' );
                }
                else
                {
                    return back()->with('error', 'Unable to update paid to partner status' );
                }
        }
        
    }
}

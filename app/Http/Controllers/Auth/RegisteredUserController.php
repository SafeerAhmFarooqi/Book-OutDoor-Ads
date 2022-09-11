<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        View()->share( 'headTitle', 'User Register' );
        return view('auth.user-auth.register');
    }

    public function createClient()
    {
        View()->share( 'headTitle', 'Client Register' );
        return view('auth.client-auth.register');
    }
    
    public function createUser($redirectUrl='')
    {
        View()->share( 'headTitle', 'User Register' );
        return view('auth.user-auth.register',[
            'redirectUrl'=>$redirectUrl,
        ]);
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if(!isset($request->role)||$request->role!='client'&&$request->role!='user')
        {
            return back();
        }
        
        if($request->role=='client')
        {
            $request->validate([
                'firstname' => ['required', 'string', 'max:255'],
                'lastname' => ['required', 'string', 'max:255'],
                'company' => ['required', 'string', 'max:255'],
                'address' => ['required', 'string', 'max:255'],
                'phone' => ['required', 'string', 'max:255'],
                'postal_code' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);    

            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                'company' => $request->company,
                'address' => $request->address,
                'phone' => $request->phone,
                'postal_code' => $request->postal_code,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }

        if($request->role=='user')
        {
            
            $request->validate([
                'firstname' => ['required', 'string', 'max:500'],
                'lastname' => ['required', 'string', 'max:500'],
                // 'company' => ['required', 'string', 'max:255'],
                 'address' => ['required', 'string', 'max:500'],
                'phone' => ['required', 'string', 'max:500'],
                // 'postal_code' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:500', 'unique:users'],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
            ]);    

            $user = User::create([
                'firstname' => $request->firstname,
                'lastname' => $request->lastname,
                // 'company' => $request->company,
                 'address' => $request->address,
                 'phone' => $request->phone,
                // 'postal_code' => $request->postal_code,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
        }
        
        event(new Registered($user));

        //User assign role goes here
        if($request->role=='client')
        {
            $user->assignRole('Client');
        }

        //User assign role goes here
        if($request->role=='user')
        {
            $user->assignRole('User');
        }


        Auth::login($user);

        if ($request->redirectUrl=='checkout') {
            return redirect()->route('cart.list.items');
        }

        return redirect(RouteServiceProvider::HOME);
    }
}

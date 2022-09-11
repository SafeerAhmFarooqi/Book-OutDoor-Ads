<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        View()->share( 'headTitle', 'User Login' );
        return view('auth.user-auth.login');
    }

/**
     * Display the Client login view.
     *
     * @return \Illuminate\View\View
     */
    public function createClient()
    {
        
        View()->share( 'headTitle', 'Client Login' );
        return view('auth.client-auth.login');
    }

    public function createUser($redirectUrl='')
    {
        View()->share( 'headTitle', 'User Login' );
        return view('auth.user-auth.login',[
            'redirectUrl'=>$redirectUrl,
        ]);
    }

    public function createAdmin()
    {
        View()->share( 'headTitle', 'Admin Login' );
        return view('auth.admin-auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        if ($request->redirectUrl=='checkout') {
            return redirect()->route('cart.list.items');
        }

        if (substr($request->redirectUrl,0,10)=='led-detail') {
            return redirect()->route('app.led.detail',substr($request->redirectUrl,11));
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

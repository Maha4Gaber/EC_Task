<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
<<<<<<< Updated upstream
    // protected $redirectTo = RouteServiceProvider::HOME;
=======
<<<<<<< HEAD
    protected $redirectTo = RouteServiceProvider::HOME;
=======
    // protected $redirectTo = RouteServiceProvider::HOME;
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
    protected function authenticated()
    {
        if (Auth::user()->role_as=='1') {
            return redirect('/')->with('status', 'welcome ');
        } else {
<<<<<<< Updated upstream
            return redirect('/')->with('status', 'welcome ');
=======
<<<<<<< HEAD
            return redirect('/')->with('status', 'not allwed ');
=======
            return redirect('/')->with('status', 'welcome ');
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
            # code...
        }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
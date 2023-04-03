<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Auth;
=======
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
<<<<<<< Updated upstream
    protected $redirectTo = RouteServiceProvider::HOME;
=======
<<<<<<< HEAD
    // protected $redirectTo = RouteServiceProvider::HOME;
    protected function authenticated()
    {
        if (Auth::user()->role_as == '1') {
            return redirect('/')->with('status', 'welcome ');
        } else {
            return redirect('/')->with('status', 'not allwed ');
            # code...
        }
    }
=======
    protected $redirectTo = RouteServiceProvider::HOME;
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
<<<<<<< Updated upstream
            'password' => ['required', 'string', 'min:8', 'confirmed'],
=======
<<<<<<< HEAD
            'password' => ['required', 'string', 'min:6', 'confirmed'],
=======
            'password' => ['required', 'string', 'min:8', 'confirmed'],
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    // protected $redirectTo = RouteServiceProvider::HOME;

    protected function authenticated()
    {

        session([
            'userid' => Auth::user()->id,
            'username' => Auth::user()->userfirstname
        ]);

        // echo "<pre>";print_r(Auth::user());die;
        if(Auth::user()->userrole == '1') //1 = Admin Login
        {
            return redirect('/dashboard')->with('status','Welcome to your dashboard');
        }
        elseif(Auth::user()->userrole == '2') // Normal or Default User Login
        {
            return redirect('/')->with('status','Logged in successfully');
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

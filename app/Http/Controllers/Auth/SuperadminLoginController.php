<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use JsValidator;
use Auth;

class SuperadminLoginController extends Controller
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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
	
	public function index(Request $request)
    {
		return view('auth.admin_login');
	}

	public function login(Request $request)
    {
		
        $credentials = $request->validate([
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i|string|max:255',
            'password' => 'required|min:8',
        ]);
 
     
		if (Auth::guard('superadmin')->attempt($credentials)) {
            $request->session()->regenerate();
			
            return redirect()->intended('super-admin/dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
	
	public function logout(Request $request)
    {
		Auth::guard('superadmin')->logout();
		return redirect('/super-admin/login');
	}
	
	
}

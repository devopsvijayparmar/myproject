<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use JsValidator;
use Auth;

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

	public function login(Request $request)
    {
		
        $credentials = $request->validate([
            'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i|string|max:255',
            'password' => 'required|min:8',
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
			$auth = Auth::user();
			if($auth->email_verified == 0){
				Auth::logout();
				return redirect()->back()->with('error',__('messages.verify_account'));
			}
			if($auth->deactive_account == 'deactive'){
				Auth::logout();
				return redirect()->back()->with('error',__('messages.account_deactived'));
			}
			if(isset($request->url)){
				return redirect($request->url);
			}
            return redirect()->intended('admin/dashboard');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
	
	
}

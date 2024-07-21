<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Validator;
use JsValidator;
use App\Models\User;
use App\Models\front\Slider;
use App\Models\front\WebTemplates;
use Auth;
use Illuminate\Support\Facades\Storage;

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
	
	public function syncRoles(Request $request,$id,$role)
    {
		$user = User::find($id);
		$user->assignRole(array($role));
	}
	
	public function removeImage(Request $request)
    {
		
		
		 $array=[
		 
		  '127.0.0.1:8000/watch'=>'watch.webssphere.com',
			'127.0.0.1:8000/agency'=>'agency.webssphere.com',
			'127.0.0.1:8000/architectureandbuilding'=>'architectureandbuilding.webssphere.com',
			'127.0.0.1:8000/artanddesign'=>'artanddesign.webssphere.com',
			'127.0.0.1:8000/bakery'=>'bakery.webssphere.com',
			'127.0.0.1:8000/beautyparlour'=>'beautyparlour.webssphere.com',
			'127.0.0.1:8000/bookstore'=>'bookstore.webssphere.com',
			'127.0.0.1:8000/business'=>'business.webssphere.com',
			'127.0.0.1:8000/carsandtransportation'=>'carsandtransportation.webssphere.com',
			'127.0.0.1:8000/cloth'=>'cloth.webssphere.com',
			'127.0.0.1:8000/electric'=>'electric.webssphere.com',
			'127.0.0.1:8000/event'=>'event.webssphere.com',
			'127.0.0.1:8000/fashionandbeauty'=>'fashionandbeauty.webssphere.com',
			'127.0.0.1:8000/furniture'=>'furniture.webssphere.com',
			'127.0.0.1:8000/gallery'=>'gallery.webssphere.com',
			'127.0.0.1:8000/garage'=>'garage.webssphere.com',
			'127.0.0.1:8000/industrial'=>'industrial.webssphere.com',
			'127.0.0.1:8000/interior'=>'interior.webssphere.com',
			'127.0.0.1:8000/jewellery'=>'jewellery.webssphere.com',
			'127.0.0.1:8000/mobile'=>'mobile.webssphere.com',
			'127.0.0.1:8000/musicandentertainment'=>'musicandentertainment.webssphere.com',
			'127.0.0.1:8000/photography'=>'photography.webssphere.com',
			'127.0.0.1:8000/realestate'=>'realestate.webssphere.com',
			'127.0.0.1:8000/saloon'=>'saloon.webssphere.com',
			'127.0.0.1:8000/shoes'=>'shoes.webssphere.com',
			'127.0.0.1:8000/studio'=>'studio.webssphere.com',
			'127.0.0.1:8000/technology'=>'technology.webssphere.com',
			'127.0.0.1:8000/blog'=>'blog.webssphere.com',
			'127.0.0.1:8000/digitalstartup'=>'digitalstartup.webssphere.com',
			'127.0.0.1:8000/foodordrink'=>'food-ordrink.webssphere.com',
					 
		 
		 ];
		
		
		 foreach($array as $key => $value){
			 WebTemplates::where('preview',$key)->update(['preview'=>$value]);
		 }
		
		
		
		
		//$data = Slider::all();
		//foreach($data as $datas){
			
			
			//$fromPath = base_path('public/uploads/slider_old' . '/' . $datas->image);
			//$toPath = base_path('public/uploads/slider' . '/' . $datas->image);
			
			
			//$success = \File::copy($fromPath,$toPath);
			
			 
		//}
		
		
	}
	
	
}

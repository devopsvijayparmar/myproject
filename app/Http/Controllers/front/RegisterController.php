<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use Auth;
use App\Models\front\ContactUs;
use App\Models\front\Slider;
use App\Models\front\Sites;
use App\Models\User;
use App\Events\UserRegistered;
use App\Events\WelcomeEmail;
use Hash;
use Crypt;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('CheckAuth');
		$this->data['contactus'] = ContactUs::find(1); 
    }
	
	public function index(Request $request)
    {  
	    $this->data['user_site'] = $request->site;
	    $this->data['slider'] = Slider::all(); 
	    $this->data['sites'] = Sites::getSites(); 
		return view('front.register',$this->data);
    }
	
	public function register(Request $request)
    {
		
		$exitsitename = User::getRecordByTitle(strtolower($request->title));
		if(empty($exitsitename))
		{
			$validator = Validator::make($request->all(), [
				'site_name' => 'required|max:255|string',
				'title' => 'required|alpha_num|unique:users|min:4|max:255',
				'name' => 'required|max:255|min:4',
				'email' => 'required|email|unique:users|max:255',
				'password' => 'required|min:8',
				'confirm_password' => 'required|min:8|same:password',
				'terms_of_use_privacy_policy' => 'required',
			]);

			if ($validator->fails()) {
				 return redirect()->back()
								->withErrors($validator, 'register')
								->withInput();
			} else {
				
				$input = $request->all();
				$input['created_at'] = date('Y-m-d H:i:s');
				$input['password'] = Hash::make($request->password);
				$input['title'] = strtolower($request->title);
			
				$register = User::create($input);
				$register->assignRole(array($request->site_name));
			
				event(new UserRegistered($register));
				
				if($register){
					Session::flash('success', 'Successfully Registered');
					 return redirect()->back();
				}else{
					 Session::flash('error', "we're sorry,but something went wrong.Please try again");
					 return redirect()->back();
				}
			}
		}
		else{
			Session::flash('error', "The site name has already been taken");
			return redirect()->back();
		}
    }
	
	public function checkSiteName(Request $request)
    {
		$data = User::getRecordByTitle(strtolower($request->title));
		if($data)
		{
			echo 1;
		}
		else{
			echo 0;
		}
	}
	
	public function checkEmail(Request $request)
    {
		$data = User::getRecordByEmail($request->email);
		if($data)
		{
			echo 1;
		}
		else{
			echo 0;
		}
	}
	
	public function verifyAccount(Request $request, $token)
    {  
	   $token = Crypt::decrypt($token);
	   $user = User::find($token);
	   $user->update(array('email_verified'=>1));
	   event(new WelcomeEmail($user));
	   
		return redirect('login')->with('verify-email','Your account has been successfully verified. Please check your email for website details. Thank you.');
		
    }
	
	
} 
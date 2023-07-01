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
use App\Models\front\Pricing;
use App\Models\PurchasePlan;
use App\Models\PurchasePlanHistory;
use JsValidator;
use Hash;
use Crypt;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	 protected $validationRules = [
        'site_name' => 'required|max:255|string',
		'domain_name' => 'required|alpha_num|min:4|max:255',
		'name' => 'required|max:255|min:4',
		'email' => 'required|email|unique:users|max:255',
		'password' => 'required|min:8',
		'confirm_password' => 'required|min:8|same:password',
		'terms_of_use_privacy_policy' => 'required',
    ];  
	 
	function __construct()
    {
		$this->data['title'] = 'Register';
		$this->middleware('CheckAuth');
		$this->data['contactus'] = ContactUs::find(1); 
    }
	
	public function index(Request $request)
    {  
	    $this->data['validator'] = JsValidator::make($this->validationRules);
	    $this->data['user_site'] = $request->site;
	    $this->data['slider'] = Slider::all(); 
	    $this->data['sites'] = Sites::getSites(); 
		return view('front.register',$this->data);
    }
	
	public function register(Request $request)
    {
		
		$input = $request->all();
		$exitsitename = User::getRecordByTitle(strtolower($request->domain_name));
		if(empty($exitsitename))
		{
			$validator = Validator::make($input, $this->validationRules);
			if($validator->fails()) {
				return redirect()->back()->withErrors($validator)->withInput();
			}
				
			$input['created_at'] = date('Y-m-d H:i:s');
			$input['password'] = Hash::make($request->password);
			$input['title'] = strtolower($request->domain_name);
		
			$register = User::create($input);
			$register->assignRole(array($request->site_name));
		
			event(new UserRegistered($register));
			
			if($register){
				Session::flash('success', 'Thanks for signing up! Please verify your account, We have sent an activation link to your account.This activation link will expire in 24 hours');
				 return redirect()->back();
			}else{
				 Session::flash('error', "we're sorry,but something went wrong.Please try again");
				 return redirect()->back();
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
		if($user->email_verified != 1){
			$user->update(array('email_verified'=>1));
			event(new WelcomeEmail($user));
			
			$pricing = Pricing::find(1);
			$purchaseplan = PurchasePlan::userPurchasePlan($user->id);
			
			$startdate = date('Y-m-d');
			$expiry_date = date('Y-m-d', strtotime($startdate. ' + '.$pricing->duration_in_days.' days'));
			
			
			$input = array('user_id'=>$auth->id,
				'plan_id'=>$id,
				'plan_name'=>$pricing->plan_name,
				'plan_type'=>$pricing->plan_type,
				'price'=>$pricing->price,
				'price_text'=>$pricing->price_text,
				'description'=>$pricing->description,
				'start_date'=>$startdate,
				'expiry_date'=>$expiry_date,
				'duration'=>$pricing->duration,
				'duration_in_days'=>$pricing->duration_in_days,
				'page_builder'=>$pricing->page_builder,
				'no_of_emails'=>$pricing->emails,
				'no_of_page_builder'=>$pricing->no_of_page_builder,
				'no_of_landing_page'=>$pricing->no_of_landing_page,
				'no_of_address_book'=>$pricing->no_of_address_book,
				
			);
			
			$input['created_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth->id;
			
			PurchasePlan::create($input);
			
			/*Purchase Order History*/ 
			$purchase_plan = PurchasePlanHistory::create($input);
			/*Purchase Order History*/ 
			
			return redirect('login')->with('success','Your account has been successfully verified. Please check your email for website details. Thank you.');
		}else{
			return redirect('login')->with('error','your account has been already verified !');
		}
	   
		
    }
	
	
} 
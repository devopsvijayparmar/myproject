<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\Business;
use App\Models\AdminSitesettings;
use App\Events\CommomEmail;
use JsValidator;
use Auth;
use Crypt;


class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
    protected $validationRules = [
		'name' => 'required|string|regex:/^[A-Za-z0-9\-\s]+$/|min:2|max:35',
		'email' => 'required|email|regex:/(.+)@(.+)\.(.+)/i|string|max:255',
		'phone' => 'required|min:10|max:10',
		'country' => 'required|max:255',
		'about' => 'required|max:1000',
		'project_detail' => 'required|max:10000',
    ];   
	 
	function __construct()
    {
		$this->data['title'] = 'Bussiness';
		$this->data['admin_site_settings'] = AdminSitesettings::first();
    }
	
	public function index(Request $request)
    {  
	    $auth = Auth::user();
		$this->data['validator'] = JsValidator::make($this->validationRules);
		$this->data['message']= "";
		if(isset($auth)){
			$this->data['message'] = Business::getLastMessageBySupport($auth->id);
		}
		return view('front.business',$this->data);
    }
	
	public function chat(Request $request)
    {  
	    $auth = Auth::user();
	    $this->data['chat'] = Business::getChatByUser($auth->id);
		Business::where('send_by',1)->where('is_read',0)->where('user_id',$auth->id)->update(['is_read'=>1]);
		return view('front.chat',$this->data);
    }
	
	public function store(Request $request)
    {
	
		$input = $request->all();
		
    	$validator = Validator::make($input, $this->validationRules);
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }
		
        $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
	
		$business = Business::create($input);
		
		$html = "Name : $request->name <br> Email: $request->email <br> Phone: $request->phone <br> Country: $request->country <br> About: $request->about <br> Project detail: $request->project_detail";
		
		$array = array('email'=>$this->data['admin_site_settings']->email,'message'=>$html,'subject'=>'Business inquiry');
		event(new CommomEmail($array));
	
		if($business){
			Session::flash('success', 'Our business service representative will be in touch shortly');
			 return redirect()->back();
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

    }
	
	public function sendMessage(Request $request)
    {
	    
	    $auth = Auth::user();
	    $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['user_id'] = $auth->id;
		$input['send_by'] = 2;
		$input['message'] = $request->message;
	
		$this->data['message'] = $business = Business::create($input);
		
		if($business){
			 return view('front.chat_message',$this->data);
		}else{
			 return 0;
		}

    }
	
} 
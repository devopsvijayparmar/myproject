<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\Bussiness;
use App\Models\AdminSitesettings;
use App\Events\CommomEmail;
use JsValidator;
use Auth;
use Crypt;


class BussinessController extends Controller
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
		$this->data['admin_site_settings'] = AdminSitesettings::first();
    }
	
	public function index(Request $request)
    {  
	    $auth = Auth::user();
		$data['validator'] = JsValidator::make($this->validationRules);
		$data['message']= "";
		if(isset($auth)){
			$data['message'] = Bussiness::getLastMessageBySupport($auth->id);
		}
		return view('front.bussiness',$data);
    }
	
	public function chat(Request $request)
    {  
	    $auth = Auth::user();
	    $data['chat'] = Bussiness::getChatByUser($auth->id);
		Bussiness::where('send_by',1)->where('is_read',0)->where('user_id',$auth->id)->update(['is_read'=>1]);
		return view('front.chat',$data);
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
	
		$bussiness = Bussiness::create($input);
		
		$html = "Name : $request->name <br> Email: $request->email <br> Phone: $request->phone <br> Country: $request->country <br> About: $request->about <br> Project detail: $request->project_detail";
		
		$array = array('email'=>$this->data['admin_site_settings']->email,'message'=>$html,'subject'=>'Bussiness inquiry');
		event(new CommomEmail($array));
	
		if($bussiness){
			Session::flash('success', 'Our bussiness service representative will be in touch shortly');
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
	
		$data['message'] = $bussiness = Bussiness::create($input);
		
		if($bussiness){
			 return view('front.chat_message',$data);
		}else{
			 return 0;
		}

    }
	
} 
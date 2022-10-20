<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use JsValidator;
use Validator;
use App\Models\EmailMarketing;
use App\Models\EmailsBroadCast;
use App\Models\Group;
use App\Models\AddressBook;
use App\Models\GroupData;
use Auth;
use Hash;
use Crypt;
use App\Jobs\SendEmailJob;


class EmailMarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $validationRules = [
		'for' => 'required',
		'group' => 'required',
		'users' => 'required',
    ]; 

	protected $validationRulesSendEmail = [
		'for' => 'required'
    ]; 	
	
	protected $validationRulesForm = [
		'subject' => 'required|string|max:255',
		'email' => 'required|max:10000',
    ];
	 
	 
	function __construct()
    {
		$this->middleware('permission:email_marketing', ['only' => ['index','create','store','edit','update','show','destroy','sendEmail']]);
    }
	
	public function index(Request $request)
    {    
        $data['email'] = EmailMarketing::getEmailsByUser();	
		$data['group'] = Group::groupListData();	
		$data['address_book'] = AddressBook::addressBookList();	
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.email_marketing.index',$data);
    }

	public function create(Request $request)
    { 	
	    $data['validator'] = JsValidator::make($this->validationRulesForm);
		return view('admin.pages.email_marketing.create',$data);
    }
	
	public function store(Request $request)
    {
		$auth = Auth::user();
        $input = $request->all();
    	$validator = Validator::make($input, $this->validationRulesForm);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        } 
			
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		$email = EmailMarketing::create($input);
		
		if($email){
			return redirect()->route('email-marketing.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}

    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $data['validator'] = JsValidator::make($this->validationRulesForm);
		 $data['data'] = EmailMarketing::find($id);
		 return view('admin.pages.email_marketing.edit',$data);
        
    }
	
	public function update(Request $request,$id)
    {
		
		$id = Crypt::decrypt($id);
		$auth = Auth::user();
		$input = $request->all();
    	$validator = Validator::make($input, $this->validationRulesForm);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        } 
			
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		
		$email = EmailMarketing::where('created_by', Auth::user()->id)->where('id',$id)->first();
		$email->update($input);
		
		if($email){
			return redirect()->route('email-marketing.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $data['data'] = EmailMarketing::find($id);
        return view('admin.pages.email_marketing.show',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		$auth = Auth::user(); 	
		$delete = EmailMarketing::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
	public function sendEmail(Request $request)
    {
		$auth = Auth::user();
        $input = $request->all();
		$validator = Validator::make($input, $this->validationRulesSendEmail);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        } 
			
		
		$id = Crypt::decrypt($request->email_id);
		$email = EmailMarketing::find($id);
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
	
	   
	
	    if($request->for == 1)
		{
			$group_data = GroupData::getRecordByGroupId($request->group);
			$address_data = AddressBook::getRecordForLandingPage($group_data);
		}
		else{
			
			if(isset($request->users)){
				$address_data = AddressBook::getRecordForLandingPage($request->users);
			}else{
				return redirect()->back()->with('error', Lang::get('messages.error'));
			}
		}
		
		$array = array('users'=>$address_data);
		SendMail::dispatch($array);
		
		
		foreach($address_data as $retrieved_data)
		{
			$html = $email->email;
			$subject = $email->subject;
			$html = str_replace('{{USER_NAME}}',$retrieved_data->name , $html);
			
			
			
		
			$insertData[] = array(
				'to' => $retrieved_data->email,
				'email' => $html,
				'subject' => $subject,
				'created_at' => date('Y-m-d H:i:s'),
				'created_by' => $auth->id,
			);
		}
		
		if (!empty($insertData)) {
			$newary = array_chunk($insertData, 500);
			foreach ($newary as $inskey) {
				$insert = EmailsBroadCast::insert($inskey);
			}
			
			if ($insertData) {
				Session::flash('success', 'Emails sent');
				 return redirect()->back();
			} else {
				Session::flash('error', 'Something went wrong data not Imported');
				 return redirect()->back();
			}
		} else {
			Session::flash('error', 'Something went wrong data not Imported');
			return redirect()->back();
		}
		
    }
	
}
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\EmailMarketing;
use App\Models\EmailsBroadCast;
use App\Models\Group;
use App\Models\AddressBook;
use App\Models\GroupData;
use Auth;
use Hash;
use Crypt;


class EmailMarketingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:email_marketing', ['only' => ['index','create','store','edit','update','show','destroy','sendEmail']]);
		$this->data['title'] = 'Email Marketing';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['email'] = EmailMarketing::getemails();	
		$this->data['group'] = Group::groupList();	
		$this->data['address_book'] = AddressBook::addressbookList();	
		return view('admin.email_marketing.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('admin.email_marketing.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'subject' => 'required|max:255',
			'email' => 'required|max:10000',
        ]);

        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'Email')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		$email = EmailMarketing::create($input);
		
		if($email){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/email-marketing');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = EmailMarketing::getRecordById($id);
		 return view('admin.email_marketing.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'subject' => 'required|max:255',
			'email' => 'required|max:10000',
        ]);


        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'Email')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		
		$email = EmailMarketing::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($email){
			$email->update($input);
		}
		else{
			abort(401);
		}
		
		if($email){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/email-marketing');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = EmailMarketing::getRecordById($id);
        return view('admin.email_marketing.show',$this->data);
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
		/*Record Delete*/
		$auth = Auth::user(); 	
	    $delete = EmailMarketing::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		
		return $delete;
    }
	
	public function sendEmail(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'for' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Email')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		$id = Crypt::decrypt($request->email_id);
		$email = EmailMarketing::getRecordById($id);
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
	
	    if($request->for == 1)
		{
			$groupdata = GroupData::getRecordByGroupId($request->group);
			$addressdata = AddressBook::getRecordForLandingPage($groupdata);
		}
		else{
			$addressdata = AddressBook::getRecordForLandingPage($request->users);
		}
		
		foreach($addressdata as $retrieved_data)
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
	
}
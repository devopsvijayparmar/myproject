<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\LandingPage;
use App\Models\Group;
use App\Models\GroupData;
use App\Models\AddressBook;
use App\Models\LandingPageEmails;
use Auth;
use Hash;
use Crypt;
use URL;


class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:landing_page', ['only' => ['index','create','store','edit','update','show','destroy','editor','editEditor','exitTitle','exitTitleEdit','sendLandingPage']]);
		$this->data['title'] = 'Landing Page';
		
    }
	
	public function index(Request $request)
    {    
	    $this->data['auth'] = Auth::user();
	    $this->data['landing_page'] = LandingPage::all();
		$this->data['group'] = Group::groupList();	
		$this->data['address_book'] = AddressBook::addressbookList();	
		return view('admin.landing_page.index',$this->data);
    }

	public function create(Request $request)
    { 	
	    $this->data['auth'] = Auth::user();
		return view('admin.landing_page.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'title' => 'required|max:255',
			'url_name' => 'required|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'LandingPage')
                            ->withInput();
        } else {
			
		$exitdata = LandingPage::checkexittitle($request->url_name);
		
        if($exitdata)	
		{
			 Session::flash('error', "This url name is already been taken");
			 return redirect()->back();
		}

		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		$input['url'] = url("/").'/'.$auth->title.'/landing-page/'.$request->url_name;
	   
	
		$landingpage = LandingPage::create($input);
		
		if($landingpage){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/landing-page');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $this->data['auth'] = Auth::user();
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = LandingPage::getRecordById($id);
		 return view('admin.landing_page.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'title' => 'required|max:255',
			'url_name' => 'required|max:50',
        ]);


        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'LandingPage')
                            ->withInput();
        } else {
			
		$exitdata = LandingPage::checkexittitleEdit($request->url_name,$id);
		
        if($exitdata)	
		{
			 Session::flash('error', "This url name is already been taken");
			 return redirect()->back();
		}	
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		$input['url'] = url("/").'/'.$auth->title.'/landing-page/'.$request->url_name;
		
		$landingpage = LandingPage::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($landingpage){
			$landingpage->update($input);
		}
		else{
			abort(401);
		}
		
		if($landingpage){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/landing-page');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = LandingPage::getRecordById($id);
        return view('admin.landing_page.show',$this->data);
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
	    $delete = LandingPage::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		
		return $delete;
    }
	
	public function editor(){
		
		return view('admin.landing_page.editor');
	}
	
	public function editEditor($id){
	    $this->data['data'] = LandingPage::getRecordById($id);
		return view('admin.landing_page.edit_editor',$this->data);
	}
	
	public function exitTitle(Request $request)
    {
		$exitdata = LandingPage::checkexittitle($request->url_name);
		if($exitdata)
		{
			echo 1;
		}
		else{
			echo 0;
		}
	
	}
	
	public function exitTitleEdit(Request $request)
    {
		$exitdata = LandingPage::checkexittitleEdit($request->url_name,$request->id);
		if($exitdata)
		{
			echo 1;
		}
		else{
			echo 0;
		}
	
	}
	
	public function sendLandingPage(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'for' => 'required',
			'description' => 'required',
			'subject' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'LandingPage')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		$id = Crypt::decrypt($request->landing_page_id);
		$landingpage = LandingPage::getRecordById($id);
		
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
			$html = $request->description;
			$subject = $request->subject;
			$html = str_replace('{{USER_NAME}}',$retrieved_data->name , $html);
			$html = str_replace('{{LANDING_PAGE_LINK}}', $landingpage->url, $html);
			
			$insertData[] = array(
				'to' => $retrieved_data->email,
				'email' => $html,
				'subject' => $subject,
				'created_at' => date('Y-m-d H:i:s'),
				'created_by' => $auth->id,
			);
		}
		
		$update = LandingPage::where('id', $id)->update(['status' => 1]);
		
		if (!empty($insertData)) {
			$newary = array_chunk($insertData, 500);
			foreach ($newary as $inskey) {
				$insert = LandingPageEmails::insert($inskey);
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
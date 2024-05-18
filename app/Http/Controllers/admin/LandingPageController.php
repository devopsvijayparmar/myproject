<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\LandingPage;
use Illuminate\Support\Facades\Lang;
use JsValidator;
use DataTables;
use App\Models\Group;
use App\Models\GroupData;
use App\Models\AddressBook;
use App\Models\LandingPageEmails;
use App\Traits\PurchasePlan;
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
	use PurchasePlan; 
	 
	 
	protected $validationRules = [
		'title' => 'required|string|max:255',
		'url_name' => 'required|string|max:255',
		'description' => 'required|max:1000000',
    ];  
	
	protected $validationRulesSend = [
		'for' => 'required',
		'description' => 'required',
		'subject' => 'required|string|max:255',
    ]; 
	 
	 
	function __construct()
    {
		$this->middleware('permission:landing_page', ['only' => ['index','create','store','edit','update','show','destroy','editor','editEditor','exitTitle','exitTitleEdit','sendLandingPage']]);
		
    }
	
	public function index(Request $request)
    {    
	 
	    $auth = Auth::user(); 
		if ($request->ajax()) {
		  
			$data = LandingPage::getLangingPageList();
			return DataTables::of($data)
			->addIndexColumn()
			
		     ->addColumn('url', function ($row) {
				return '<label style="text-align: left;" class="btn btn-default"><p class="m-0"> <a href="'.$row['url'].'" target="_blank"><i class="fas fa-external-link-alt"></i> '.$row->url.'</a></p></label>';
			})
			 ->addColumn('status', function ($row) {
				 
				if($row['status'] == 0)
				{
					$class = 'warning';
					$status = '<i class="fas fa-info-circle"></i> pending';
					$sendname = 'send';
				}
				else
				{
					$class = 'success';
					$status = '<i class="fas fa-check-circle"></i> sent';
					$sendname = 'send again';
				}
				return '<span class="badge badge-'.$class.'">'.$status.'</span>';
			})
			->editColumn('action', function ($row)
			{
				
				if($row['status'] == 0)
				{
					$sendname = 'send';
				}
				else
				{
					$sendname = 'send again';
				}
				
				$send_link = Crypt::encrypt($row['id']);
			    $send_link = "'" . $send_link . "'";
				
				$btn = '<a href="javascript:void(0)" onclick="sendLandingPage('.$send_link.')"><span class="badge badge-info mr-2"><i class="fas fa-share-square"></i> '.$sendname.'</span></a>';
				
			   $btn .= '<a title="Edit" class="mr-2" href="' . route('landing-page.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('landing-page.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   $btn .= '<a title="Details" target="_blank" href="' .$row->url. '" data-popup="tooltip"><i class="fas fa-eye text-info font-16"></i></a>';
			   
			   return $btn;
			})
			->rawColumns(['url','status','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'title','name' => 'title', 'title' => __("Title"),'searchable'=>false,'orderable' => false],
				['data' => 'url','name' => 'url', 'title' => __("Url"),'searchable'=>true,'orderable' => true],
				['data' => 'status','name' => 'status.name', 'title' => __("Status"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('landing-page.index');
			$data['dateTableTitle'] = "Landing Page";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('landing-page.create');
			$data['auth'] = Auth::user();
			$data['group'] = Group::groupListData();	
			$data['address_book'] = AddressBook::addressBookList();	
			return view('admin.pages.landing_page.index',$data);
		
		}
		
		
    }

	public function create(Request $request)
    { 	
	    $data['validator'] = JsValidator::make($this->validationRules);
	    $data['auth'] = Auth::user();
		return view('admin.pages.landing_page.create',$data);
    }
	
	public function store(Request $request)
    {
		
		$landing_page_count = LandingPage::getLangingPageCount(); 
		if($landing_page_count >= $this->userPurchasePlan()->no_of_landing_page){
			return redirect()->route('landing-page.index')->with('error', Lang::get('messages.limit'));
		}
		
    	$auth = Auth::user(); 
		$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }
			
		$exitdata = LandingPage::checkExitTitle($request->url_name);
		
        if($exitdata)	
		{
			return redirect()->back()->with('error', __('messages.url_name_already_been_taken'));
		}

		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		$input['url'] = config('enum.ssh').$auth->title.'.'.config('enum.website').'/landing-page/'.$request->url_name;
	   
		$landingpage = LandingPage::create($input);
		
		$count = LandingPage::getLangingPageCount();
		$this->updatePurchasePlan('used_landing_page',$count);
		
		if($landingpage){
			return redirect()->route('landing-page.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}

    }
	
	public function edit($id)
    { 		
	     $data['validator'] = JsValidator::make($this->validationRules);
	     $data['auth'] = Auth::user();
	     $id = Crypt::decrypt($id);
		 $data['data'] = LandingPage::find($id);
		 return view('admin.pages.landing_page.edit',$data);
        
    }
	
	public function update(Request $request,$id)
    {
		
		$id = Crypt::decrypt($id);
    	$auth = Auth::user(); 
		$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }
			
		$exitdata = LandingPage::checkExitTitleWithId($request->url_name,$id);
		
        if($exitdata)	
		{
			return redirect()->back()->with('error', __('messages.url_name_already_been_taken'));
		}	
			
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		$input['url'] = config('enum.ssh').$auth->title.'.'.config('enum.website').'/landing-page/'.$request->url_name;
		
		$landingpage = LandingPage::where('created_by', Auth::user()->id)->where('id',$id)->first();
		
		if($landingpage){
			$landingpage->update($input);
			return redirect()->route('landing-page.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $data['data'] = LandingPage::find($id);
        return view('admin.pages.landing_page.show',$data);
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
	    $delete = LandingPage::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
	public function editor(){
		
		return view('admin.pages.landing_page.editor');
	}
	
	public function editEditor($id){
	    $data['data'] = LandingPage::find($id);
		return view('admin.pages.landing_page.edit_editor',$data);
	}
	
	public function exitTitle(Request $request)
    {
		$exitdata = LandingPage::checkExitTitle($request->url_name);
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
		$exitdata = LandingPage::checkExitTitleWithId($request->url_name,$request->id);
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
		
		$auth = Auth::user();
        $input = $request->all();
    	$validator = Validator::make($input, $this->validationRulesSend);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }
			
		
		$id = Crypt::decrypt($request->landing_page_id);
		$landingpage = LandingPage::find($id);
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
	
	    if($request->for == 1)
		{
			$groupdata = GroupData::getRecordByGroupId($request->group);
			$addressdata = AddressBook::getRecordForLandingPage($groupdata);
		}
		else{
			if(isset($request->users)){
				$addressdata = AddressBook::getRecordForLandingPage($request->users);
			}else{
				return redirect()->back()->with('error', Lang::get('messages.error'));
			}
		}
		
		
		if(count($addressdata) > $this->userPurchasePlan()->remaining_emails){
			return redirect()->route('landing-page.index')->with('error', Lang::get('messages.email_limit'));
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
				$remaining_emails = $this->userPurchasePlan()->remaining_emails;
				$count = $remaining_emails - count($addressdata);
				$this->updatePurchasePlan('remaining_emails',$count);
				
				Session::flash('success', __('messages.landingpage_sent'));
				return redirect()->back();
			} else {
				Session::flash('error', __('messages.error'));
				 return redirect()->back();
			}
		} else {
			Session::flash('error',  __('messages.error'));
			 return redirect()->back();
		}
		
    }
	
	
	
}
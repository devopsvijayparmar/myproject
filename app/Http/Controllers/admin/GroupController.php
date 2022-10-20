<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use JsValidator;
use DataTables;
use DB;
use Validator;
use App\Models\Group;
use App\Models\GroupData;
use App\Models\AddressBook;
use Illuminate\Support\Facades\Lang;
use Auth;
use Hash;
use Crypt;


class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $validationRules = [
		'name' => 'required|string|max:255',
		'for' => 'required|max:11',
    ]; 
	 
	function __construct()
    {
		$this->middleware('permission:group', ['only' => ['index','create','store','edit','update','show','destroy']]);
    }
	
	public function index(Request $request)
    {    
	    if ($request->ajax()) {
		  
			$data = Group::groupList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="' . route('group.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('group.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   $btn .= '<a title="Details" href="' . route('group.show', Crypt::encrypt($row['id'])) . '" data-popup="tooltip"><i class="fas fa-eye text-info font-16"></i></a>';
			   
			   return $btn;
			})
			->rawColumns(['image','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'name','name' => 'name', 'title' => __("Name"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('group.index');
			$data['dateTableTitle'] = "Group";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('group.create');
			return view('admin.pages.group.index',$data);
		
		}
	}

	public function create(Request $request)
    { 	
	    $data['validator'] = JsValidator::make($this->validationRules);
	    $data['address_book'] = AddressBook::addressBookList();	
		return view('admin.pages.group.create',$data);
    }
	
	public function store(Request $request)
    {
		$address_book = AddressBook::addressBookIdArray();	
    	$auth = Auth::user(); 
		$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        } 
			
			
		$exitdata = Group::getRecordByName($request->name);	
		if($exitdata)	
		{
			return redirect()->back()->with('error', __('messages.name_already_been_taken'));
		}	
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		$group = Group::create($input);
		
		if($request->for == 1)
		{
			if(isset($request->users)){
				$users = $request->users;
			}else{
				return redirect()->back()->with('error', Lang::get('messages.error'));
			}
		
		}
		else{
			$users = $address_book;
		}
		if(count($users) >0 )
		{
			$insertData = array();
			foreach($users as $data)
			{
				$insertData[] = array('address_book_id'=>$data,
				'group_id'=>$group->id,'created_at'=>date('Y-m-d H:i:s'),'created_by'=>$auth->id);
			}

			if (!empty($insertData)) {
				$newary = array_chunk($insertData, 500);
				foreach ($newary as $inskey) {
					$insert = GroupData::insert($inskey);
				}
			}			
		}
		if($group){
			return redirect()->route('group.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}

    }
	
	public function edit($id)
    { 		
	    $id = Crypt::decrypt($id);
		$data['data'] = Group::find($id);
		$data['groupdata'] = GroupData::getRecordByGroupId($id);
		$data['address_book'] = AddressBook::addressBookList();	
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.group.edit',$data);
        
    }
	
	public function update(Request $request,$id)
    {
		$address_book = AddressBook::addressBookIdArray();	
		$id = Crypt::decrypt($id);
		$auth = Auth::user();
    	$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }  
			
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		
		$group = Group::where('created_by', Auth::user()->id)->where('id',$id)->first();
		$group->update($input);
		$delete = GroupData::where('group_id',$id)->delete();
		if($request->for == 1)
		{
			if(isset($request->users)){
				$users = $request->users;
			}else{
				return redirect()->back()->with('error', Lang::get('messages.error'));
			}
		}
		else{
			$users = $address_book;
		}
		if(count($users) >0 )
		{
			$insertData = array();
			foreach($users as $data)
			{
				$insertData[] = array('address_book_id'=>$data,
				'group_id'=>$id,'created_at'=>date('Y-m-d H:i:s'),'created_by'=>$auth->id);
			}

			if (!empty($insertData)) {
				$newary = array_chunk($insertData, 500);
				foreach ($newary as $inskey) {
					$insert = GroupData::insert($inskey);
				}
			}			
		}
		if($group){
			return redirect()->route('group.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
    }
	
	public function show(Request $request, $id)
    {    
	    $id = Crypt::decrypt($id);
		
	 
		if ($request->ajax()) {
		  
			$data = GroupData::getGroupDataList($id);
			return DataTables::of($data)
			->addIndexColumn()
			->addColumn('name', function ($row) {
				return $row->address_book->name;
			})
			->addColumn('email', function ($row) {
				return $row->address_book->email;
			})
			->addColumn('mobile', function ($row) {
				return $row->address_book->mobile;
			})
			->rawColumns(['address_book'])
			->make(true);

		} else {
		
		    
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'name','name' => 'address_book.name', 'title' => __("Name"),'searchable'=>true,'orderable' => true],
				['data' => 'email','name' => 'address_book.email', 'title' => __("Email"),'searchable'=>true,'orderable' => true],
				['data' => 'mobile','name' => 'address_book.mobile', 'title' => __("Mobile"),'searchable'=>true,'orderable' => true]];
		     
			 
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('group.show',Crypt::encrypt($id));
			$data['dateTableTitle'] = "Group";
			$data['dataTableId'] = time();
			return view('admin.pages.group.show',$data);
		
		}
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
	    $delete = Group::where('id', $id)->delete();
	    $delete = GroupData::where('group_id', $id)->delete();
		return $delete;
    }
	
}
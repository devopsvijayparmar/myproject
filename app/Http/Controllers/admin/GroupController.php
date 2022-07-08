<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Group;
use App\Models\GroupData;
use App\Models\AddressBook;
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
	 
	function __construct()
    {
		$this->middleware('permission:group', ['only' => ['index','create','store','edit','update','show','destroy']]);
		$this->data['title'] = 'Group';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['group'] = Group::groupList();	
		return view('admin.group.index',$this->data);
    }

	public function create(Request $request)
    { 	
	
	    $this->data['address_book'] = AddressBook::addressbookList();	
		return view('admin.group.create',$this->data);
    }
	
	public function store(Request $request)
    {
		 $this->data['address_book'] = AddressBook::addressbookListArray();	
    	 $validator = Validator::make($request->all(), [
			'for' => 'required',
			'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'Group')
                            ->withInput();
        } else {
			
			
		$exitdata = Group::getrecordbynme($request->name);	
		 if($exitdata)	
		{
			 Session::flash('error', "This name is already been taken");
			 return redirect()->back();
		}	
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		$group = Group::create($input);
		
		if($request->for == 1)
		{
			$users = $request->users;
		}
		else{
			$users = $this->data['address_book'];
		}
		if(count($users) >0 )
		{
			$insertData = array();
			foreach($users as $data)
			{
				$insertData[] = array('address_book_fk'=>$data,
				'group_fk'=>$group->id,'created_at'=>date('Y-m-d H:i:s'),'created_by'=>$auth->id);
			}

			if (!empty($insertData)) {
			$newary = array_chunk($insertData, 500);
			foreach ($newary as $inskey) {
				$insert = GroupData::insert($inskey);
			}
			}			
		}
		if($group){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/group');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	    $id = Crypt::decrypt($id);
		$this->data['data'] = Group::getRecordById($id);
		$this->data['groupdata'] = GroupData::getRecordByGroupId($id);
		 $this->data['address_book'] = AddressBook::addressbookList();	
		return view('admin.group.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $this->data['address_book'] = AddressBook::addressbookList();	
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'for' => 'required',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Group')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		
		$group = Group::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($group){
			$group->update($input);
			
			$delete = GroupData::where('group_fk',$id)->delete();
			
			if($request->for == 1)
			{
				$users = $request->users;
			}
			else{
				$users = $this->data['address_book'];
			}
			
			if(count($users) >0 )
			{
				$insertData = array();
				foreach($users as $data)
				{
					$insertData[] = array('address_book_fk'=>$data,
					'group_fk'=>$id,'created_at'=>date('Y-m-d H:i:s'),'created_by'=>$auth->id);
				}

				if (!empty($insertData)) {
				$newary = array_chunk($insertData, 500);
				foreach ($newary as $inskey) {
					$insert = GroupData::insert($inskey);
				}
				}			
			}
			
		}
		else{
			abort(401);
		}
		
		if($group){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/group');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['groupdata'] = GroupData::getgroupdatalist($id);
        return view('admin.group.show',$this->data);
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
	    $delete = Group::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
	    $delete = GroupData::where('group_fk', $id)->delete();
		return $delete;
    }
	
}
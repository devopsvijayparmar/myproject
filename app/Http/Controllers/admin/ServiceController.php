<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Service;
use Auth;
use Hash;
use Crypt;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:service', ['only' => ['index','create','store','edit','update','show','destroy']]);
		$this->data['title'] = 'Service';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['service'] = Service::getServiceList();	
		return view('admin.service.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('admin.service.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'description' => 'required|max:5000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Service')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		$service = Service::create($input);
		
		if($service){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/service');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = Service::getRecordById($id);
		 return view('admin.service.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'description' => 'required|max:5000',
        ]);


        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'Service')
                            ->withInput();
        } else {
		$auth = Auth::user();
        $input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		
		$service = Service::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($service){
			$service->update($input);
		}
		else{
			abort(401);
		}
	  
		if($service){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/service');
		}else {
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = Service::getRecordById($id);
        return view('admin.service.show',$this->data);
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
	    $delete = Service::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		
		return $delete;
    }
	
}
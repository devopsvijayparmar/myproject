<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\System;
use App\Traits\ImageUpload;
use Auth;
use Hash;
use Crypt;


class SystemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	use ImageUpload;  
	 
	function __construct()
    {
		$this->data['title'] = 'System';
    }
	
	public function index(Request $request)
    {    
        $this->data['system'] = System::all();	
		return view('super_admin.front.system.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('super_admin.front.system.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'title' => 'required',
			'image' => 'required',
			'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect("super-admin/system/create")
                            ->withErrors($validator, 'System')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'front/system');
			$input['image'] = $image_name;
		}
		
		$system = System::create($input);
		
		if($system){
			Session::flash('success', 'Successfully Inserted');
			return redirect('super-admin/system');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = System::find($id);
		 return view('super_admin.front.system.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'title' => 'required',
			'description' => 'required',
        ]);


        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'System')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
	
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'front/system');
			$input['image'] = $image_name;
		}
		
		$system = System::find($id);
		$system->update($input);
		
		if($system){
			Session::flash('success', 'Successfully Updated');
			return redirect('super-admin/system');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = System::find($id);
        return view('super_admin.front.system.show',$this->data);
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
	    $delete = System::where('id', $id)->delete();
		return $delete;
    }
	
}
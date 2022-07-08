<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Category;
use App\Models\Plan;
use Auth;
use Hash;
use Crypt;


class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:plan', ['only' => ['index','create','store','edit','update','show','destroy']]);
		$this->data['title'] = 'Plan';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['plan'] = Plan::getPlanList();	
		return view('admin.plan.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('admin.plan.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'description' => 'required|max:5000',
			'image_1'=>'required|mimes:jpeg,jpg,png',
			'image_2'=>'mimes:jpeg,jpg,png',
			'image_3'=>'mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'Plan')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		if ($request->hasfile('image_1')) {
			$file = $request->file('image_1');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/plan/', $name_1);
			$input['image_1'] = $name_1;
		}
		
		if ($request->hasfile('image_2')) {
			$file = $request->file('image_2');
			$name_2 = $file->getClientOriginalName();
			$name_2 = str_replace(" ", "", date("Ymdhis")+1 . $name_2);
			$file->move(public_path() . '/uploads/plan/', $name_2);
			$input['image_2'] = $name_2;
		}
		if ($request->hasfile('image_3')) {
			$file = $request->file('image_3');
			$name_3 = $file->getClientOriginalName();
			$name_3 = str_replace(" ", "", date("Ymdhis")+1 . $name_3);
			$file->move(public_path() . '/uploads/plan/', $name_3);
			$input['image_3'] = $name_3;
		}
		
		$plan = Plan::create($input);
	
		if($plan){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/plan');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = Plan::getRecordById($id);
		 return view('admin.plan.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'description' => 'required|max:5000',
			'image_1'=>'mimes:jpeg,jpg,png',
			'image_2'=>'mimes:jpeg,jpg,png',
			'image_3'=>'mimes:jpeg,jpg,png',
        ]);


        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'Plan')
                            ->withInput();
        } else {
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        				
		if ($request->hasfile('image_1')) {
			$file = $request->file('image_1');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/plan/', $name_1);
			$input['image_1'] = $name_1;
		}
		
		if ($request->hasfile('image_2')) {
			$file = $request->file('image_2');
			$name_2 = $file->getClientOriginalName();
			$name_2 = str_replace(" ", "", date("Ymdhis")+1 . $name_2);
			$file->move(public_path() . '/uploads/plan/', $name_2);
			$input['image_2'] = $name_2;
		}
		if ($request->hasfile('image_3')) {
			$file = $request->file('image_3');
			$name_3 = $file->getClientOriginalName();
			$name_3 = str_replace(" ", "", date("Ymdhis")+1 . $name_3);
			$file->move(public_path() . '/uploads/plan/', $name_3);
			$input['image_3'] = $name_3;
		}
		
		$plan = Plan::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($plan){
			$plan->update($input);
		}
		else{
			abort(401);
		}
	  
		if($plan){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/plan');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = Plan::getRecordById($id);
        return view('admin.plan.show',$this->data);
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
	    $delete = Plan::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		return $delete;
    }
	
}
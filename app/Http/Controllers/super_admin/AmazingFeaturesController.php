<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\AmazingFeatures;
use Auth;
use Hash;
use Crypt;


class AmazingFeaturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->data['title'] = 'Amazing Features';
    }
	
	public function index(Request $request)
    {    
        $this->data['amazing_features'] = AmazingFeatures::all();	
		return view('super_admin.front.amazing_features.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('super_admin.front.amazing_features.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'title' => 'required',
			'image' => 'required',
			'description' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'AmazingFeatures')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/front/amazing_features/', $name_1);
			$input['image'] = $name_1;
		}
		
		$amazing_features = AmazingFeatures::create($input);
		
		if($amazing_features){
			Session::flash('success', 'Successfully Inserted');
			return redirect('super-admin/amazing-features');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = AmazingFeatures::find($id);
		 return view('super_admin.front.amazing_features.edit',$this->data);
        
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
                            ->withErrors($validator, 'AmazingFeatures')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/front/amazing_features/', $name_1);
			$input['image'] = $name_1;
		}
		
		$amazing_features = AmazingFeatures::find($id);
		$amazing_features->update($input);
		
		if($amazing_features){
			Session::flash('success', 'Successfully Updated');
			return redirect('super-admin/amazing-features');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = AmazingFeatures::find($id);
        return view('super_admin.front.amazing_features.show',$this->data);
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
	    $delete = AmazingFeatures::where('id', $id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		return $delete;
    }
	
}
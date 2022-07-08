<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Slider;
use Auth;
use Hash;
use Crypt;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:slider', ['only' => ['store','update','edit','destroy']]);
		$this->data['title'] = 'Settings';
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'image'=>'required|mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'slider_error')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name = $file->getClientOriginalName();
			$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
			$file->move(public_path() . '/uploads/slider/', $name);
			$input['image'] = $name;
		}
		
		$slider = Slider::create($input);
		
		if($slider){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/settings');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    {
		 $id = Crypt::decrypt($id);
		 $this->data['data'] = Slider::getRecordById($id);	
		 return view('admin.slider.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		
	 $validator = Validator::make($request->all(), [
			'image'=>'mimes:jpeg,jpg,png',
        ]);

        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'slider_error')
                            ->withInput();
        }
		
    	
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name = $file->getClientOriginalName();
			$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
			$file->move(public_path() . '/uploads/slider/', $name);
			$input['image'] = $name;
		}
		
		$slider = Slider::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($slider){
			$slider->update($input);
		}
		else{
			abort(401);
		}
		
		if($slider){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/settings');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
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
		/*Record Delete*/
		$auth = Auth::user(); 	
	    $update = Slider::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		return $update;
    }
	
}
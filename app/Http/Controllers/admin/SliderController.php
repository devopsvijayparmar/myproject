<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use App\Traits\ImageUpload;
use JsValidator;
use DataTables;
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
	use ImageUpload;
	
	protected $validationRules = [
		'image'=>'required|mimes:jpeg,jpg,png|max:20480'
    ]; 
	
	protected $validationRulesEdit = [
		'image'=>'mimes:jpeg,jpg,png|max:20480'
    ]; 
	 
	 
	function __construct()
    {
		$this->middleware('permission:slider', ['only' => ['store','update','edit','destroy']]);
    }
	
	public function store(Request $request)
    {
		
    	$auth = Auth::user(); 
		$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        } 
 
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'slider');
			$input['image'] = $image_name;
		}
		$slider = Slider::create($input);
		
		if($slider){
			return redirect()->route('user-settings')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function edit($id)
    {
		 $id = Crypt::decrypt($id);
		 $data['data'] = Slider::find($id);	
		 $data['validator'] = JsValidator::make($this->validationRulesEdit);
		 return view('admin.pages.slider.edit',$data);
        
    }
	
	public function update(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		$auth = Auth::user();
    	$input = $request->all();
    	$validator = Validator::make($input, $this->validationRulesEdit);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }  
		
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        
		
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'slider');
			$input['image'] = $image_name;
		}
		
		$slider = Slider::where('created_by', Auth::user()->id)->where('id',$id)->first();
		$slider->update($input);
		
		if($slider){
			return redirect()->route('user-settings')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }

	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		$auth = Auth::user(); 	
	    $delete = Slider::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
}
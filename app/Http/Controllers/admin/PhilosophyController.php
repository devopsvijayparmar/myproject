<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use JsValidator;
use Validator;
use App\Models\Philosophy;
use Auth;

class PhilosophyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	protected $validationRules = [
		'description' => 'required|max:200000',
    ];  
	 
	 
	function __construct()
    {
		$this->middleware('permission:philosophy', ['only' => ['index','update']]);
    }
	
	public function index(Request $request)
    {    
	    $data['validator'] = JsValidator::make($this->validationRules);
        $data['data'] = Philosophy::editRecordById();	
		return view('admin.pages.philosophy.index',$data);
    }

	public function update(Request $request,$id)
    {
		$auth = Auth::user();
    	$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        } 
		
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;

		$philosophy = Philosophy::editRecordById(Auth::user()->id);
		
		if($philosophy){
			$philosophy->update($input);
		}
		else {
			$philosophy = Philosophy::create($input);
		}
		
		if($philosophy){
			return redirect()->route('philosophy.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}

    }
	
}
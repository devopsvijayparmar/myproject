<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use JsValidator;
use Illuminate\Support\Facades\Lang;
use Validator;
use App\Models\Category;
use App\Models\ContactUs;
use Auth;
use DataTables;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $validationRules = [
		'email' => 'required|email|max:255',
		'address' => 'required|max:500',
		'contact_1' => 'min:10|numeric',
		'contact_2' => 'min:10|numeric',
    ];   
	 
	function __construct()
    {
		$this->middleware('permission:contact_us', ['only' => ['index','update']]);
    }
	
	public function index(Request $request)
    {    
        $data['data'] = ContactUs::getRecordByUserId();	
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.contact_us.index',$data);
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

        $contact_us = ContactUs::getRecordByUserId();
		
		if($contact_us){
			$contact_us->update($input);
			Session::flash('success', Lang::get('messages.updated'));
		}
		else {
			$contact_us = ContactUs::create($input);
			Session::flash('success', Lang::get('messages.created'));
		}

		if($contact_us){
			return redirect()->route('contact-us.index')->with('success', Lang::get('messages.updated'));
		}
		else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
    }
	
}
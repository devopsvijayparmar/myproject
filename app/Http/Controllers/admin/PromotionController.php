<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use Validator;
use App\Models\Promotion;
use JsValidator;
use Auth;
use Hash;


class PromotionController extends Controller
{
	
	protected $validationRules = [
        'description' => 'required|max:10000',
    ]; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:promotion', ['only' => ['index','update']]);
    }
	
	public function index(Request $request)
    {    
	   
	    $data['validator'] = JsValidator::make($this->validationRules);
        $data['data'] = Promotion::editRecordByUserId();	
		return view('admin.pages.promotion.index',$data);
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

		$promotion = Promotion::editRecordByUserId();
		
		if($promotion){
			$promotion->update($input);
			Session::flash('success', Lang::get('messages.updated'));
		}
		else {
			$promotion = Promotion::create($input);
			Session::flash('success', Lang::get('messages.created'));
		}
		return redirect()->back();
		
    }
}
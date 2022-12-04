<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use Validator;
use App\Models\User;
use JsValidator;
use Auth;
use Hash;


class MyAccountController extends Controller
{
	
	protected $validationRules = [
        'name' => 'required|max:255|min:4',
    ]; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		
    }
	
	public function index(Request $request)
    {    
	   
	    $data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.my_account.index',$data);
    }

	public function update(Request $request)
    {
		
		$auth = Auth::user();
    	$input = $request->all();
        $validator = Validator::make($input, $this->validationRules);

        if($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } 

		$input['updated_at'] = date('Y-m-d H:i:s');
		
		$user = User::find($auth->id);
		$user->update($input);
		
		if($user){
			Session::flash('success', Lang::get('messages.updated'));
		}
		else {
			Session::flash('error', Lang::get('messages.error'));
		}
		return redirect()->back();
		
    }
}
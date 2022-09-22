<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use DB;
use App\Models\Slider;
use App\Models\User;
use Validator;
use Auth;
use Hash;
use JsValidator;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $validationRules = [
        'current_password' => 'required|min:8',
        'new_password' => 'required|min:8',
        'confirm_new_password' => 'required|same:new_password|min:8',
    ];  
	 
	function __construct()
    {
		$this->middleware('permission:site_settings', ['only' => ['index','change_password','update']]);
    }
	
	public function index(Request $request)
    {    
		$data['slider'] = Slider::sliderList();	
		return view('admin.pages.slider.index',$this->data);
    }
	
	public function change_password(Request $request)
    {    
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.change_password.index',$data);
    }
	
    public function update(Request $request)
    {
		$auth = Auth::user();
        $input = $request->all();
		$validator = Validator::make($input, $this->validationRules);
  
		if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		} 

        if (Hash::check($request->current_password, Auth::user()->password)) {

            if (!Hash::check($request->new_password, Auth::user()->password)) {

                $user['password'] = Hash::make($request->new_password);
                User::whereId($auth->id)->update($user);

                return redirect()->back()
                    ->with('success', Lang::get('messages.password_updated'));
            } else {
                return redirect()->back()
                    ->with('error', Lang::get('messages.confirm_new_password'));
            }

        } else {
            return redirect()->back()
                ->with('error', Lang::get('messages.current_password_incorrect'));
        }
    }

}
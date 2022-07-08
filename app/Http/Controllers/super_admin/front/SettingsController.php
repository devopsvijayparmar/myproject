<?php

namespace App\Http\Controllers\super_admin\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\Settings;
use Auth;
use Hash;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->data['title'] = 'Settings';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['data'] = Settings::find(1);	
		return view('super_admin.front.settings.index',$this->data);
    }

	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'title' => 'required',
        ]);


        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'Settings')
                            ->withInput();
        } else {
			$auth = Auth::user();
			$input = $request->all();
			$input['updated_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth->id;
            
			
			if($request->hasfile('logo')) {
			$file = $request->file('logo');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/front/settings/', $name_1);
			$input['logo'] = $name_1;
		}
		
            
			$settings = Settings::find(1);
			$settings->update($input);
			
			if($settings) {
				$request->session()->flash('success', 'Successfully Updated');
			}
			else {
				$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
			}
			return redirect()->back();
		}
    }
}
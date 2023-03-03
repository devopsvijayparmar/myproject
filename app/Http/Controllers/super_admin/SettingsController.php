<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use App\Traits\ImageUpload;
use DB;
use Validator;
use App\Models\AdminSitesettings;
use Auth;
use Hash;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	use ImageUpload; 
	 
	function __construct()
    {
		$this->data['title'] = 'Settings';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['data'] = AdminSitesettings::find(1);	
		return view('super_admin.front.settings.index',$this->data);
    }

	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'title' => 'required',
			'fav_icon'=>'mimes:jpeg,jpg,png,svg|max:20480',
			'site_logo'=>'mimes:jpeg,jpg,png,svg|max:20480'
        ]);


        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'Settings')
                            ->withInput();
		}
       
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		
		if ($request->hasfile('fav_icon')) {
			$image_name = $this->imageUpload($request->file('fav_icon'),'front/settings');
			$input['fav_icon'] = $image_name;
		} 
		
		if ($request->hasfile('site_logo')) {
			$image_name = $this->imageUpload($request->file('site_logo'),'front/settings');
			$input['site_logo'] = $image_name;
		}
		 
		$settings = AdminSitesettings::find(1);
		$settings->update($input);
	
		return redirect()->back()->with('success', 'Successfully Updated');
		
	}
}
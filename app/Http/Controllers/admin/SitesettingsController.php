<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\Lang;
use App\Traits\ImageUpload;
use JsValidator;
use DataTables;
use App\Models\Sitesettings;
use App\Models\Currency;
use Validator;
use Auth;
use Hash;


class SitesettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	use ImageUpload;
	
	protected $validationRules = [
		'footer_about_us' => 'required|string|max:500',
		'title' => 'max:255',
		'currency_id' => 'required|max:11',
		'site_logo'=>'mimes:jpeg,jpg,png,svg|max:2048',
		'fav_icon'=>'mimes:jpeg,jpg,png,svg|max:2048'
		
    ]; 
	
	
	function __construct()
    {
		$this->middleware('permission:site_settings', ['only' => ['index','update']]);
    }
	
	public function index(Request $request)
    {    
		$data['data'] = Sitesettings::getRecordByUserId();	
		$data['currency'] = Currency::all();	
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.site_settings.index',$data);
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
		$input['updated_by'] = $auth->id;

        if ($request->hasfile('site_logo')) {
			$image_name = $this->imageUpload($request->file('site_logo'),'site_settings');
			$input['site_logo'] = $image_name;
		}
		
		if ($request->hasfile('fav_icon')) {
			$fav_icon = $this->imageUpload($request->file('fav_icon'),'site_settings');
			$input['fav_icon'] = $fav_icon;
		}

		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;

		$site_settings = Sitesettings::where('created_by', Auth::user()->id)->first();
		
		if($site_settings){
			$site_settings->update($input);
		}
		else {
			$site_settings = Sitesettings::create($input);
		}
		
		if($site_settings){
			return redirect()->route('site-settings.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }

	
	
}
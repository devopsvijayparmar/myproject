<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
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
	 
	function __construct()
    {
		$this->middleware('permission:site_settings', ['only' => ['index','update']]);
		$this->data['title'] = 'Settings';
    }
	
	public function index(Request $request)
    {    
		$this->data['data'] = Sitesettings::getRecordById();	
		$this->data['currency'] = Currency::getcurrencylist();	
		return view('admin.site_settings.index',$this->data);
    }
	
	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'title' => 'required|max:255',
			'currency_fk' => 'required|max:11',
			'site_logo'=>'mimes:jpeg,jpg,png',
			'fav_icon'=>'mimes:jpeg,jpg,png',
        ]);


        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'Sitesettings')
                            ->withInput();
        } else {
			$auth = Auth::user();
			$input = $request->all();
			$input['updated_at'] = date('Y-m-d H:i:s');
			$input['updated_by'] = $auth->id;

			if ($request->hasfile('site_logo')) {
				$file = $request->file('site_logo');
				$name = $file->getClientOriginalName();
				$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
				$file->move(public_path() . '/uploads/site_settings/', $name);
				$input['site_logo'] = $name;
			}
			if ($request->hasfile('fav_icon')) {
				$file = $request->file('fav_icon');
				$name = $file->getClientOriginalName();
				$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
				$file->move(public_path() . '/uploads/site_settings/', $name);
				$input['fav_icon'] = $name;
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
			
			
			if($site_settings) {
				$request->session()->flash('success', 'Successfully Updated');
			}
			else {
				$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
			}
			return redirect('/admin/site-settings');
		}
    }

	
	
}
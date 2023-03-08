<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\CMS;
use Auth;
use Hash;


class CMSController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->data['title'] = 'About Us';
    }
	
	public function index(Request $request,$type)
    {    
	   
        $this->data['data'] = CMS::where('type',$type)->first();	
		return view('super_admin.front.cms.index',$this->data);
    }

	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'description' => 'required',
        ]);


        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'AboutUS')
                            ->withInput();
        } else {
			$auth = Auth::user();
			$input = $request->all();
			$input['updated_at'] = date('Y-m-d H:i:s');
			
			$cms = CMS::find($id);
			$cms->update($input);
			
			if($cms) {
				$request->session()->flash('success', 'Successfully Updated');
			}
			else {
				$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
			}
			return redirect()->back();
		}
    }
}
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use App\Models\Slider;
use App\Models\User;
use Validator;
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
		$this->middleware('permission:site_settings', ['only' => ['index','change_password','update']]);
		$this->data['title'] = 'Settings';
    }
	
	public function index(Request $request)
    {    
		$this->data['slider'] = Slider::sliderList();	
		return view('admin.slider.index',$this->data);
    }
	
	public function change_password(Request $request)
    {    
	    $this->data['title'] = 'Change Password';
		return view('admin.change_password.index',$this->data);
    }
	
    public function update(Request $request)
    {
		if(Hash::check($request->old_password, Auth::user()->password))
		{
			$validator = Validator::make($request->all(), [
						'new_password' => 'required|min:8',
						'confirm_password' => 'required_with:new_password|same:new_password|min:8'
			]);
			if ($validator->fails()) {
				return redirect()->back()
								->withErrors($validator, 'Changepassword')
								->withInput();
			}
			else
			{
				$data_array = array(
					'password' => Hash::make($request->new_password),
					'updated_at' => date('Y-m-d H:i:s')
				   
				);
				$update = User::where('id', Auth::user()->id)->update($data_array);
				if($update)
				{
					$request->session()->flash('success', 'Successfully Updated');
				}
				else
				{
					$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
				}
				return redirect()->back();
			}
		}
		else
		{
			$request->session()->flash('notmatchpassword', "Old password does not Match");
			return redirect()->back();
		}
    }

}
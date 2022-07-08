<?php

namespace App\Http\Controllers\super_admin\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\ContactUs;
use Auth;
use Hash;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->data['title'] = 'Contact Us';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['data'] = ContactUs::find(1);	
		return view('super_admin.front.contact_us.index',$this->data);
    }

	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'email' => 'required',
			'address' => 'required',
			'contact_1' => 'min:11|numeric',
			'contact_2' => 'min:11|numeric',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'ContactUS')
                            ->withInput();
        } else {
			
			   $auth = Auth::user();
				$input = $request->all();
				$input['updated_at'] = date('Y-m-d H:i:s');
				$input['created_by'] = $auth->id;

				$contactus = ContactUs::find(1);
				$contactus->update($input);
				
				
				if($contactus){
					$request->session()->flash('success', 'Successfully Updated');
				}
				else{
					$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
				}
				return redirect()->back();
		}
    }
	
	
	
}
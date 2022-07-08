<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Category;
use App\Models\ContactUs;
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
		$this->middleware('permission:contact_us', ['only' => ['index','update']]);
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['data'] = ContactUs::editRecordById();	
		return view('admin.contact_us.index',$this->data);
    }

	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'email' => 'required|email|max:255',
			'address' => 'required|max:500',
			'contact_1' => 'min:10|numeric',
			'contact_2' => 'min:10|numeric',
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

				$contactus = ContactUs::editRecordById(Auth::user()->id);
				
				if($contactus){
					$contactus->update($input);
				}
				else {
					$contactus = ContactUs::create($input);
				}
				
				if($contactus){
					$request->session()->flash('success', 'Successfully Updated');
				}
				else{
					$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
				}
				return redirect('/admin/contact-us');
		}
    }
	
	
	
}
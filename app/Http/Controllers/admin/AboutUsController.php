<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Category;
use App\Models\AboutUs;
use Auth;
use Hash;


class AboutUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:about_us', ['only' => ['index','update']]);
		$this->data['title'] = 'About Us';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['data'] = AboutUs::editRecordById();	
		return view('admin.about_us.index',$this->data);
    }

	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'description' => 'required|max:5000',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'AboutUS')
                            ->withInput();
        } else {
			$auth = Auth::user();
			$input = $request->all();
			$input['updated_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth->id;

			$aboutus = AboutUs::editRecordById(Auth::user()->id);
			
			if($aboutus){
				$aboutus->update($input);
			}
			else {
				$aboutus = AboutUs::create($input);
			}
			
			if($aboutus) {
				$request->session()->flash('success', 'Successfully Updated');
			}
			else {
				$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
			}
			return redirect()->back();
		}
    }
}
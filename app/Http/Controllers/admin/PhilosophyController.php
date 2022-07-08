<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Philosophy;
use Auth;
use Hash;


class PhilosophyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:philosophy', ['only' => ['index','update']]);
		$this->data['title'] = 'Philosophy';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['data'] = Philosophy::editRecordById();	
		return view('admin.philosophy.index',$this->data);
    }

	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'description' => 'required|max:20000',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Philosophy')
                            ->withInput();
        } else {
			$auth = Auth::user();
			$input = $request->all();
			$input['updated_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth->id;

			$philosophy = Philosophy::editRecordById(Auth::user()->id);
			
			if($philosophy){
				$philosophy->update($input);
			}
			else {
				$philosophy = Philosophy::create($input);
			}

			if($philosophy) {
				$request->session()->flash('success', 'Successfully Updated');
			}
			else {
				$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
			}
			return redirect()->back();
		}
    }
	
}
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Promotion;
use Auth;
use Hash;


class PromotionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:promotion', ['only' => ['index','update']]);
		$this->data['title'] = 'Promotion';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['data'] = Promotion::editRecordById();	
		return view('admin.promotion.index',$this->data);
    }

	public function update(Request $request,$id)
    {
		
    	 $validator = Validator::make($request->all(), [
			'description' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Promotion')
                            ->withInput();
        } else {
			$auth = Auth::user();
			$input = $request->all();
			$input['updated_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth->id;

			$promotion = Promotion::editRecordById(Auth::user()->id);
		
			if($promotion){
				$promotion->update($input);
			}
			else {
				$promotion = Promotion::create($input);
			}
			
			if($promotion) {
				$request->session()->flash('success', 'Successfully Updated');
			}
			else {
				$request->session()->flash('error', "we're sorry,but something went wrong.Please try again");
			}
			return redirect()->back();
		}
    }
	
	
	
}
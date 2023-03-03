<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\Pricing;
use Auth;
use Hash;
use Crypt;


class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->data['title'] = 'Pricing';
    }
	
	public function index(Request $request)
    {    
        $this->data['pricing'] = Pricing::getlist();	
		return view('super_admin.front.pricing.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('super_admin.front.pricing.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'plan_name' => 'required',
			'price' => 'required',
			'description' => 'required',
			'price_text' => 'required',
			'no_of_landing_page' => 'required',
			'no_of_address_book' => 'required',
			'emails' => 'required',
			'duration' => 'required',
			'duration_in_days' => 'required',
			'button_name' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Pricing')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		
		$pricing = Pricing::create($input);
		
		if($pricing){
			Session::flash('success', 'Successfully Inserted');
			return redirect('super-admin/pricing');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = Pricing::find($id);
		 return view('super_admin.front.pricing.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'plan_name' => 'required',
			'price' => 'required',
			'description' => 'required',
			'price_text' => 'required',
			'no_of_landing_page' => 'required',
			'no_of_address_book' => 'required',
			'emails' => 'required',
			'duration' => 'required',
			'duration_in_days' => 'required',
			'button_name' => 'required',
        ]);


        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'Pricing')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		
		$pricing = Pricing::find($id);
		$pricing->update($input);
		
		if($pricing){
			Session::flash('success', 'Successfully Updated');
			return redirect('super-admin/pricing');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = Pricing::find($id);
        return view('super_admin.front.pricing.show',$this->data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		/*Record Delete*/
		$auth = Auth::user(); 	
	    $delete = Pricing::where('id', $id)->delete();
		return $delete;
    }
	
}
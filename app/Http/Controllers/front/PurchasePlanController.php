<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use App\Models\PurchasePlan;
use App\Models\PurchasePlanHistory;
use App\Models\front\Pricing;
use Validator;
use Auth;
use Hash;
use Crypt;


class PurchasePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('auth');
		$this->data['title'] = 'Purchase Plan';
    }
	
	public function index(Request $request, $id)
    {  
	
		$auth = Auth::user();
        $id = Crypt::decrypt($id);
		$pricing = Pricing::find($id);
		
		if($pricing){
			
			$purchaseplan = PurchasePlan::userPurchasePlan($auth->id);
			if($purchaseplan){
				if($pricing->plan_type == 'free'){
					Session::flash('error', "we're sorry,but something went wrong.Please try again");
					return redirect()->back();
				}
			}
			
			$startdate = date('Y-m-d');
			$expiry_date = date('Y-m-d', strtotime($startdate. ' + '.$pricing->duration_in_days.' days'));
			
			
			$input = array('user_id'=>$auth->id,
				'plan_id'=>$id,
				'plan_name'=>$pricing->plan_name,
				'plan_type'=>$pricing->plan_type,
				'price'=>$pricing->price,
				'price_text'=>$pricing->price_text,
				'description'=>$pricing->description,
				'start_date'=>$startdate,
				'expiry_date'=>$expiry_date,
				'duration'=>$pricing->duration,
				'duration_in_days'=>$pricing->duration_in_days,
				'page_builder'=>$pricing->page_builder,
				'no_of_emails'=>$pricing->emails,
				'no_of_page_builder'=>$pricing->no_of_page_builder,
				'no_of_landing_page'=>$pricing->no_of_landing_page,
				'no_of_address_book'=>$pricing->no_of_address_book,
				
			);
			
			$input['created_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth->id;
			
			if($purchaseplan){
				$input['updated_at'] = date('Y-m-d H:i:s');
				$input['updated_by'] = $auth->id;
				$purchaseplan->update($input);
				
			}else{
				PurchasePlan::create($input);
			}
			
			/*Purchase Order History*/ 
			$purchase_plan = PurchasePlanHistory::create($input);
			/*Purchase Order History*/ 
			
			
			if($purchase_plan){
				Session::flash('success', 'Successfully Inserted');
				return redirect('/admin/home');
			}else{
				 Session::flash('error', "we're sorry,but something went wrong.Please try again");
				 return redirect()->back();
			}
		
		}else{
			Session::flash('error', "we're sorry,but something went wrong.Please try again");
			return redirect()->back();
		}

    }
	
} 
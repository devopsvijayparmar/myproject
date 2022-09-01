<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\PurchasePlan;
use App\Models\PurchasePlanHistory;
use App\Models\front\TopUp;
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
	
		$this->data['title'] = 'Purchase Plan';
    }
	
	public function index(Request $request)
    {    
	    $user = Auth::user();
	    $this->data['purchaseplan'] = PurchasePlan::userPurchasePlan($user->id);
	    $this->data['purchaseplanhistory'] = PurchasePlanHistory::userPurchasePlan($user->id);
	    $this->data['topup'] = TopUp::find(1);
		return view('admin.purchase_plan.index',$this->data);
    }
	
	
	public function upgradePlan(Request $request,$type)
    {    
	    $auth = Auth::user();
		$purchaseplan = PurchasePlan::userPurchasePlan($auth->id);
		$topup = TopUp::find(1);
		if($purchaseplan){
			
			$input = array('updated_at'=>date('Y-m-d H:i:s'));
			
			if($type == 'emails'){
				$input['no_of_emails'] = $topup->no_of_emails + (int)$purchaseplan->no_of_emails;
				$price = $topup->no_of_emails_price;
			}elseif($type == 'landingpage'){
				$input['no_of_landing_page'] = (int)$topup->no_of_landing_page + (int)$purchaseplan->no_of_landing_page;
				$price = $topup->no_of_landing_page_price;
			}
			elseif($type == 'pagebuilder'){
				$input['no_of_page_builder'] = (int)$topup->no_of_page_builder + (int)$purchaseplan->no_of_page_builder;
				$price = $topup->no_of_page_builder_price;
			}else{
				$input['no_of_address_book'] = (int)$topup->no_of_address_book + (int)$purchaseplan->no_of_address_book;
				$price = $topup->no_of_address_book_price;
			}
			$purchaseplan->update($input);
			
			$input['created_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth->id;
			$input['user_id'] = $auth->id;
			$input['plan_name'] = $topup->plan_name;
			$input['price'] = $price;
			/*Purchase Order History*/ 
			if($type == 'emails'){
				$input['no_of_emails'] = 0;
				$input['no_of_emails'] = $topup->no_of_emails;
				$price = $topup->no_of_emails_price;
			}elseif($type == 'landingpage'){
				$input['no_of_landing_page'] = 0;
				$input['no_of_landing_page'] = (int)$topup->no_of_landing_page;
				$price = $topup->no_of_landing_page_price;
			}
			elseif($type == 'pagebuilder'){
				$input['no_of_page_builder'] = 0;
				$input['no_of_page_builder'] = (int)$topup->no_of_page_builder;
				$price = $topup->no_of_page_builder_price;
			}else{
				$input['no_of_address_book'] =0;
				$input['no_of_address_book'] = (int)$topup->no_of_address_book;
				$price = $topup->no_of_address_book_price;
			}
			$purchase_plan = PurchasePlanHistory::create($input);
			/*Purchase Order History*/ 
			
			Session::flash('success', "Successfully Inserted");
			return redirect()->back();
			
			
		}else{
			Session::flash('error', "we're sorry,but something went wrong.Please try again");
			return redirect()->back();
		}
	   
    }

	
	
}
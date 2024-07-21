<?php
namespace App\Traits;
use App\Models\PurchasePlan;
use App\Models\front\Pricing;
use Illuminate\Support\Facades\Auth;
use App\Models\PurchasePlanHistory;

trait PurchasePlanStore{
	
   
	public function purchasePlanUpdate($plan_name,$auth_id){
	
	$pricing = Pricing::getPlanByName($plan_name);
		
		if($pricing){
			
			$purchaseplan = PurchasePlan::userPurchasePlan($auth_id);
			if($purchaseplan){
				if($pricing->plan_type == 'free'){
					return false;
				}
			}
			
			$startdate = date('Y-m-d');
			$expiry_date = date('Y-m-d', strtotime($startdate. ' + '.$pricing->duration_in_days.' days'));
			
			
			$input = array('user_id'=>$auth_id,
				'plan_id'=>$pricing->id,
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
				'remaining_emails'=>$pricing->emails,
				'no_of_page_builder'=>$pricing->no_of_page_builder,
				'no_of_landing_page'=>$pricing->no_of_landing_page,
				'no_of_address_book'=>$pricing->no_of_address_book,
				
			);
			
			$input['created_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth_id;
			
			if($purchaseplan){
				$input['updated_at'] = date('Y-m-d H:i:s');
				$input['updated_by'] = $auth_id;
				$purchaseplan->update($input);
				
			}else{
				PurchasePlan::create($input);
			}
			
			/*Purchase Order History*/ 
			$purchase_plan = PurchasePlanHistory::create($input);
			/*Purchase Order History*/ 
			
			
			if($purchase_plan){
				return true;
			}else{
				 return false;
			}
		
		}else{
			 return false;
		}
    }
	
}

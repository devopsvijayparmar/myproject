<?php
namespace App\Traits;
use App\Models\PurchasePlan as PurchasePlanModel;
use Illuminate\Support\Facades\Auth;

trait PurchasePlan{
	
    public function userPurchasePlan(){
        
		$user = Auth::user();
	    return PurchasePlanModel::userPurchasePlan($user->id);
		
    }
	
	 public function updatePurchasePlan($field,$count){
        $user = Auth::user();
		$update = PurchasePlanModel::where('user_id',$user->id)->update([$field=>$count]);
	    return $update;
		
    }
	
}

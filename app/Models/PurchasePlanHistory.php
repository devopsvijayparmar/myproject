<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class PurchasePlanHistory extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'purchase_plan_history';
     protected $fillable = ['user_id','plan_id','plan_name','price','description','start_date','expiry_date','duration','duration_in_days','page_builder','price_text','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','no_of_emails','no_of_page_builder','no_of_landing_page','no_of_address_book','plan_type'];
	
	public static function userPurchasePlan($user_id){
		return PurchasePlanHistory::where('user_id',$user_id);
	}
	
}
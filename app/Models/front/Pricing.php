<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Pricing extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'front_pricing';
    protected $fillable = ['plan_name','price','description','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','duration','duration_in_days','emails','page_builder','button_name','price_text','no_of_page_builder','no_of_landing_page','no_of_address_book','plan_type'];
	
	public static function getlist(){
		$query = Pricing::get();
	    return $query;
	}
	public static function getPlanByName($plan_name){
		$query = Pricing::where('plan_name',$plan_name)->first();
	    return $query;
	}
	

}
<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class Orders extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = ['user_id','product_fk','quantity','name','mobile','email','pincode','company','area','landmark','city','state','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','type'];
	
	
	public static function orderslist(){
		
		$query = Orders::select('orders.*','products.name as product_name','products.image_1')
		->leftjoin('products', function($join) {
			$join->on('orders.product_fk', '=', 'products.id');
		})
		->where('user_id',Auth::user()->id)->orderBy("orders.id", 'desc')
		->get();
	    return $query;

	} 
	public static function orderslistformobile(){
		
		$query = Orders::select('orders.*','mobile.name as product_name','mobile.image_1')
		->leftjoin('mobile', function($join) {
			$join->on('orders.product_fk', '=', 'mobile.id');
		})
		->where('user_id',Auth::user()->id)->orderBy("orders.id", 'desc')
		->get();
	    return $query;

	} 
	
	
}
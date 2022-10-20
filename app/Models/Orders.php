<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use Crypt;

class Orders extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'orders';
    protected $fillable = ['user_id','product_id','quantity','name','mobile','email','pincode','company','area','landmark','city','state','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','type','product_name','product_image','price','currency_symbol','currency_code','product_description','product_category','product_brand','product_type','mobile_image'];
	
	
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
	
	/*New*/	
	
	
	public static function getOrderslist(){
		$query = Orders::where('user_id',Auth::user()->id);
	    return $query;
	} 
	
	public function getStatusBadgeAttribute(){
		if($this->status == 0)
		{
			$status = 'Pending';
		}
		else if($this->status == 1)
		{
			$status = 'Delivered';
		}
		else{
			$status = 'Rejected'; 
		}
		return $status;
	}
	
	public function getClassBadgeAttribute(){
		if($this->status == 0)
		{
			$class = 'warning';
		}
		else if($this->status == 1)
		{
			$class = 'success';
		}
		else{
			$class = 'danger';
		}
		return $class;
	}
	
	public static function getRecordById($id){
		return Orders::where('user_id',Auth::user()->id)->first();
	}
	
	function getProductImageAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/products/'.$image);
	}
	function getMobileImageAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/mobile/'.$image);
	}
	
	public function getChangeStatusAttribute(){
		if($this->status == 0)
		{
			$delivered = "'Indicate as Delivered'";
			$rejected = "'Indicate as Rejected'";
			
			$smg = "'Delivered'";
			$smg = "'Rejected'";
			
			$status_link = "'" . Crypt::encrypt($this->id) . "'";
			
			$status = '<a title="Deliver" class="mr-2" href="javascript:void(0)" onclick="changestatus('.$status_link.',1,'.$delivered.','.$smg.')"><i class="fas fa-check font-16 text-info "></i></a>';
							 
			$status .= '<a href="javascript:void(0)" class="mr-2" onclick="changestatus('.$status_link.',2,'.$rejected.','.$smg.')" title="Reject"><i class="fas fa-times font-16 text-info "></i></a>';
			
			
		}
		else 
		{
			if($this->status == 0)
			{
				  $tooltip = 'Pending';
			}
			if($this->status == 1)
			{
				  $tooltip = 'Already Delivered';
			}
			if($this->status == 2)
			{
				  $tooltip = 'Already Rejected';
			}
			
			$status  = '<a style="cursor: no-drop;" title="'.$tooltip.'" class="mr-2" href="javascript:void(0)"><i class="fas fa-check font-16 text-info"></i></a>';
							  
			$status .='<a class="mr-2" style="cursor: no-drop;" title="'.$tooltip.'" ><i class="fas fa-times font-16 text-info"></i></a>';
			
		}
		
		return $status;
	}
	
	
	
}
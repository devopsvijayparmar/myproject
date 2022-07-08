<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Products extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['category_fk','name','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','price'];
	
	
	public static function getProductsList(){
	
		$query = Products::select('products.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('products.category_fk', '=', 'category.id');
		})
		->where('products.created_by',Auth::user()->id)->orderBy("products.id", 'desc')
		->get();
	    return $query;
	} 
	
	public static function getRecordById($id){
		
		$query = Products::select('products.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('products.category_fk', '=', 'category.id');
		})
		->where('products.id',$id)->orderBy("products.id", 'desc')
		->first();
	    return $query;
	} 
	
	public static function getRecordForIndex($user_id){
		
		$query = Products::select('products.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('products.category_fk', '=', 'category.id');
		})
		->where('products.created_by',$user_id)->orderBy("products.id", 'desc')
		->take(6)->get();
	    return $query;
	} 
	
	public static function getRecordForIndex20($user_id,$cat,$search){
		
		$TEMP = "products.created_by = '$user_id'";
		IF($cat != "category"){
			$TEMP .= " AND category.slug like '%$cat%' ";
		}
		
		if($search)
		{
			$TEMP .=" AND  (category.name LIKE '%".$search."%' OR products.name LIKE '%".$search."%' OR products.price LIKE '%".$search."%' )";
		}
		$query = Products::select('products.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('products.category_fk', '=', 'category.id');
		})
		->whereRaw($TEMP)->where('products.created_by',$user_id)->orderBy("products.id", 'desc')
		->paginate(12);
	    return $query;
		
	} 
	
	public static function getRecordForIndexByCategory($user_id,$category,$id){
		
		$query = Products::select('products.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('products.category_fk', '=', 'category.id');
		})
		->where('products.id','!=',$id)->where('products.created_by',$user_id)->where('category.name',$category)->orderBy("products.id", 'desc')
		->paginate(12);
	    return $query;

	} 
	
}
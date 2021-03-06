<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Mobile extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'mobile';
    protected $fillable = ['category_fk','brand_fk','name','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','price'];
	
	
	public static function getProductsList(){
	
		$query = Mobile::select('mobile.*','brand.name as brand_name','category.name as category_name')
		->leftjoin('brand', function($join) {
			$join->on('mobile.brand_fk', '=', 'brand.id');
		})
		->leftjoin('category', function($join) {
			$join->on('mobile.category_fk', '=', 'category.id');
		})
		->where('mobile.created_by',Auth::user()->id)->orderBy("mobile.id", 'desc')
		->get();
	    return $query;

	} 
	public static function getRecordById($id){
		
		$query = Mobile::select('mobile.*','brand.name as brand_name','category.name as category_name')
		->leftjoin('brand', function($join) {
			$join->on('mobile.brand_fk', '=', 'brand.id');
		})
		->leftjoin('category', function($join) {
			$join->on('mobile.category_fk', '=', 'category.id');
		})
		->where('mobile.id',$id)->orderBy("mobile.id", 'desc')
		->first();
	    return $query;

	} 
	public static function getRecordForIndex($user_id){
		
		$query = Mobile::select('mobile.*','category.name as category_name','brand.name as brand_name')
		->leftjoin('category', function($join) {
			$join->on('mobile.category_fk', '=', 'category.id');
		})
		->leftjoin('brand', function($join) {
			$join->on('mobile.brand_fk', '=', 'brand.id');
		})
		->where('mobile.created_by',$user_id)->orderBy("mobile.id", 'desc')
		->paginate(12);
	    return $query;

	} 
	public static function getRecordForIndex20($user_id,$cat,$search){
		$TEMP = "mobile.created_by = '$user_id'";
		IF($cat != "category"){
			$TEMP .= " AND category.slug like '%$cat%' ";
		}
		
		if($search)
		{
			$TEMP .=" AND  (category.slug LIKE '%".$search."%' OR mobile.name LIKE '%".$search."%' OR mobile.description LIKE '%".$search."%'  OR brand.name LIKE '%".$search."%' OR mobile.price LIKE '%".$search."%' )";
		}
		
		
		$query = Mobile::select('mobile.*','category.name as category_name','brand.name as brand_name')
		->leftjoin('category', function($join) {
			$join->on('mobile.category_fk', '=', 'category.id');
		})
		->leftjoin('brand', function($join) {
			$join->on('mobile.brand_fk', '=', 'brand.id');
		})
		->whereRaw($TEMP)->where('mobile.created_by',$user_id)->orderBy("mobile.id", 'desc')
		->paginate(20);
	    return $query;

	} 
	public static function getRecordForIndexByCategory($user_id,$category){
		
		$query = Mobile::select('mobile.*','category.name as category_name','brand.name as brand_name')
		->leftjoin('category', function($join) {
			$join->on('mobile.category_fk', '=', 'category.id');
		})
		->leftjoin('brand', function($join) {
			$join->on('mobile.brand_fk', '=', 'brand.id');
		})
		->where('mobile.created_by',$user_id)->where('category.name',$category)->orderBy("mobile.id", 'desc')
		->paginate(12);
	    return $query;

	} 

}
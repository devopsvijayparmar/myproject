<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Electric extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'electric';
    protected $fillable = ['category_fk','type_fk','name','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','price'];
	
	
	public static function getProductsList(){
	
		$query = Electric::select('electric.*','category.name as category_name','type.name as type_name')
		->leftjoin('category', function($join) {
			$join->on('electric.category_fk', '=', 'category.id');
		})
		->leftjoin('type', function($join) {
			$join->on('electric.type_fk', '=', 'type.id');
		})
		->where('electric.created_by',Auth::user()->id)->orderBy("electric.id", 'desc')
		->get();
	    return $query;

	} 
	public static function getRecordById($id){
		
		$query = Electric::select('electric.*','category.name as category_name','type.name as type_name')
		->leftjoin('category', function($join) {
			$join->on('electric.category_fk', '=', 'category.id');
		})
		->leftjoin('type', function($join) {
			$join->on('electric.type_fk', '=', 'type.id');
		})
		->where('electric.id',$id)->orderBy("electric.id", 'desc')
		->first();
	    return $query;

	} 
	
	public static function getRecordForIndex($user_id){
		
		$query = Electric::select('electric.*','category.name as category_name','type.name as type_name')
		->leftjoin('category', function($join) {
			$join->on('electric.category_fk', '=', 'category.id');
		})
		->leftjoin('type', function($join) {
			$join->on('electric.type_fk', '=', 'type.id');
		})
		->where('electric.created_by',$user_id)->orderBy("electric.id", 'desc')
		->paginate(12);
	    return $query;

	} 
	
	public static function getRecordForIndex20($user_id,$cat,$search){
		
		$TEMP = "electric.created_by = '$user_id'";
		IF($cat != "category"){
			$TEMP .= " AND category.name like '%$cat%' ";
		}
		
		if($search)
		{
			$TEMP .=" AND  (category.name LIKE '%".$search."%' OR electric.name LIKE '%".$search."%' OR electric.description LIKE '%".$search."%' OR electric.price LIKE '%".$search."%' )";
		}
		
		$query = Electric::select('electric.*','category.name as category_name','type.name as type_name')
		->leftjoin('category', function($join) {
			$join->on('electric.category_fk', '=', 'category.id');
		})
		->leftjoin('type', function($join) {
			$join->on('electric.type_fk', '=', 'type.id');
		})
		->whereRaw($TEMP)->where('electric.created_by',$user_id)->orderBy("electric.id", 'desc')
		->paginate(20);
	    return $query;

	} 
	
	public static function getRecordForIndexByCategory($user_id,$category){
		
		$query = Electric::select('electric.*','category.name as category_name','type.name as type_name')
		->leftjoin('category', function($join) {
			$join->on('electric.category_fk', '=', 'category.id');
		})
		->leftjoin('type', function($join) {
			$join->on('electric.type_fk', '=', 'type.id');
		})
		->where('electric.created_by',$user_id)->where('category.name',$category)->orderBy("electric.id", 'desc')
		->paginate(12);
	    return $query;

	} 
	
}
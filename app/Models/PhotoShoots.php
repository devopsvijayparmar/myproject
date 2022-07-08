<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class PhotoShoots extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'photo_shoots';
    protected $fillable = ['category_fk','name','image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	public static function getPhotoShootsList(){
	
		$query = PhotoShoots::select('photo_shoots.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('photo_shoots.category_fk', '=', 'category.id');
		})
		->where('photo_shoots.created_by',Auth::user()->id)->orderBy("photo_shoots.id", 'desc')
		->get();
	    return $query;

	} 
	public static function getRecordById($id){
		
		$query = PhotoShoots::select('photo_shoots.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('photo_shoots.category_fk', '=', 'category.id');
		})
		->where('photo_shoots.id',$id)->orderBy("photo_shoots.id", 'desc')
		->first();
	    return $query;

	} 
	public static function getPhotoShootsListForIndex($id){
	
		$query = PhotoShoots::select('photo_shoots.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('photo_shoots.category_fk', '=', 'category.id');
		})
		->where('photo_shoots.created_by',$id)->orderBy("photo_shoots.id", 'desc')
		->paginate(12);
	    return $query;
	} 
	public static function getPhotoShootsListForIndexByCat($id,$cat){
	
		$query = PhotoShoots::select('photo_shoots.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('photo_shoots.category_fk', '=', 'category.id');
		})
		->where('photo_shoots.created_by',$id)->where('photo_shoots.category_fk',$cat)->orderBy("photo_shoots.id", 'desc')
		->paginate(20);
	    return $query;
	} 
	public static function getRecordForIndex20($user_id,$cat){
		$TEMP = "photo_shoots.created_by = '$user_id'";
		IF($cat != "category"){
			$TEMP .= " AND category.name like '%$cat%' ";
		}
		$query = PhotoShoots::select('photo_shoots.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('photo_shoots.category_fk', '=', 'category.id');
		})
		->whereRaw($TEMP)->where('photo_shoots.created_by',$user_id)->orderBy("photo_shoots.id", 'desc')
		->paginate(20);
	    return $query;

	} 
	
}
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
    protected $fillable = ['category_id','name','image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];

	public function category(){
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
	
	public static function getPhotoShootList(){
		$query = PhotoShoots::where('created_by',Auth::user()->id)->with('category');
	    return $query;
	}
	
	function getImageUrlAttribute(){
		return $this->image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/photo_shoots/'.$this->image);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = PhotoShoots::where('created_by',$id)->with('category')->take($node)->get();
	    return $query;
	}
	
	function getPhotoShootCategoryLink(){
		return url('photo-shoots/category');
	}
	
	public static function getRecordForWebsiteByCategory($user_id,$cat,$node){
		$TEMP = "photo_shoots.created_by = '$user_id'";
		IF($cat != "category"){
			$TEMP .= " AND category.name like '%$cat%' ";
		}
		$query = PhotoShoots::select('photo_shoots.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('photo_shoots.category_id', '=', 'category.id');
		})
		->whereRaw($TEMP)->where('photo_shoots.created_by',$user_id)->orderBy("photo_shoots.id", 'desc')
		->paginate($node);
	    return $query;
	} 
	
	
}
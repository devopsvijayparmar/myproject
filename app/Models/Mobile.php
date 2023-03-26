<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Brand;

class Mobile extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'mobile';
    protected $fillable = ['category_id','brand_id','name','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','price'];
	
	public function category(){
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
	
	public function brand(){
		return $this->belongsTo(Brand::class, 'brand_id', 'id');
	}
	
	public static function getMobileList(){
		$query = Mobile::where('created_by',Auth::user()->id)->with('category','brand');
	    return $query;
	}
	
	public static function getRecordById($id){
		$query = Mobile::where('id',$id)->with('category','brand')->first();
	    return $query;
	}
	
	function getImage1Attribute($image){
		return $image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/mobile/'.$image);
	}
	function getImage2Attribute($image){
		return $image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/mobile/'.$image);
	}
	function getImage3Attribute($image){
		return $image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/mobile/'.$image);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = Mobile::where('created_by',$id)->with('category','brand')->take($node)->get();
	    return $query;
	}
	function getDetailPageLink(){
		return url('/'.Crypt::encrypt($this->id).'/single-mobile');
	}
	function getMobileCategoryLink(){
		return url('products/category');
	}
	
	public static function getRecordForWebsite($user_id,$cat,$search,$node){
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
			$join->on('mobile.category_id', '=', 'category.id');
		})
		->leftjoin('brand', function($join) {
			$join->on('mobile.brand_id', '=', 'brand.id');
		})
		->whereRaw($TEMP)->where('mobile.created_by',$user_id)->orderBy("mobile.id", 'desc')
		->paginate($node);
	    return $query;

	} 
	
	public static function getRecordForWebsiteByCategory($user_id,$category,$node){
		
		$query = Mobile::select('mobile.*','category.name as category_name','brand.name as brand_name')
		->leftjoin('category', function($join) {
			$join->on('mobile.category_id', '=', 'category.id');
		})
		->leftjoin('brand', function($join) {
			$join->on('mobile.brand_id', '=', 'brand.id');
		})
		->where('mobile.created_by',$user_id)->where('category.name',$category)->orderBy("mobile.id", 'desc')
		->paginate($node);
	    return $query;

	} 
	
	public static function mobileCount(){
		$query = Mobile::where('created_by',Auth::user()->id)->count();
	    return $query;
	}
	

}
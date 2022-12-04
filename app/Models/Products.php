<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use Crypt;

class Products extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'products';
    protected $fillable = ['category_id','name','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','price'];
	
	public function category(){
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
	
	public static function getProductList(){
		$query = Products::where('created_by',Auth::user()->id)->with('category');
	    return $query;
	}
	
	function getImage1Attribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/products/'.$image);
	}
	function getImage2Attribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/products/'.$image);
	}
	function getImage3Attribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/products/'.$image);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = Products::where('created_by',$id)->with('category')->take($node)->get();
	    return $query;
	}
	
	function getDetailPageLink($title){
		return url('/'.$title.'/'.Crypt::encrypt($this->id).'/single-product');
	}
	function getProjectCategoryLink($title){
		return url('/'.$title.'/products/category');
	}
	
	public static function getRecordForWebsite($user_id,$cat,$search,$node){
		
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
			$join->on('products.category_id', '=', 'category.id');
		})
		->whereRaw($TEMP)->where('products.created_by',$user_id)->orderBy("products.id", 'desc')
		->paginate($node);
	    return $query;
		
	} 
	public static function getRecordForWebsiteByCategory($user_id,$category,$id,$node){
		
		$query = Products::select('products.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('products.category_id', '=', 'category.id');
		})
		->where('products.id','!=',$id)->where('products.created_by',$user_id)->where('category.name',$category)->orderBy("products.id", 'desc')
		->paginate($node);
	    return $query;

	} 
	
	public static function getRecordById($id){
		$query = Products::with('category')->where('id',$id)->first();
	    return $query;
	} 
	
	public static function productCount(){
		$query = Products::where('created_by',Auth::user()->id)->count();
	    return $query;
	}
	
}
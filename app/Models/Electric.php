<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Type;
use Crypt;

class Electric extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'electric';
    protected $fillable = ['category_id','type_id','name','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','price'];
	
	public function category(){
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
	
	public function type(){
		return $this->belongsTo(Type::class, 'type_id', 'id');
	}
	
	public static function getElectricList(){
		$query = Electric::where('created_by',Auth::user()->id)->with('category','type');
	    return $query;
	}
	
	public static function getRecordById($id){
		$query = Electric::where('id',$id)->with('category','type')->first();
	    return $query;
	}
	
	function getImageUrl1Attribute(){
		return $this->image_1 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/electric/'.$this->image_1);
	}
	function getImageUrl2Attribute(){
		return $this->image_2 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/electric/'.$this->image_2);
	}
	function getImageUrl3Attribute(){
		return $this->image_3 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/electric/'.$this->image_3);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = Electric::where('created_by',$id)->with('category','type')->take($node)->get();
	    return $query;
	}
	function getDetailPageLink(){
		return url('/'.Crypt::encrypt($this->id).'/single-electric');
	}
	function getProjectCategoryLink(){
		return url('products/category');
	}
	public static function getRecordForWebsite($user_id,$cat,$search,$node){
		
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
			$join->on('electric.category_id', '=', 'category.id');
		})
		->leftjoin('type', function($join) {
			$join->on('electric.type_id', '=', 'type.id');
		})
		->whereRaw($TEMP)->where('electric.created_by',$user_id)->orderBy("electric.id", 'desc')
		->paginate($node);
	    return $query;

	} 
	
	public static function getRecordForWebsiteByCategory($user_id,$category,$node){
		
		$query = Electric::select('electric.*','category.name as category_name','type.name as type_name')
		->leftjoin('category', function($join) {
			$join->on('electric.category_id', '=', 'category.id');
		})
		->leftjoin('type', function($join) {
			$join->on('electric.type_id', '=', 'type.id');
		})
		->where('electric.created_by',$user_id)->where('category.name',$category)->orderBy("electric.id", 'desc')
		->paginate($node);
	    return $query;

	} 
	
	
	
}
<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class Type extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'type';
    protected $fillable = ['category_fk','name','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public static function getRecordById($id){
			$query = Type::where('id',$id)->orderBy('id','desc')->where('created_by',Auth::user()->id)->first();
		   return $query;
	} 
	/* public static function getRecordByCategoryFk($id){
			$query = Type::where('category_fk',$id)->orderBy('id','desc')->where('created_by',Auth::user()->id)->get();
		   return $query;
	} 
	 */
	public static function categoryList(){
	
		$query = Type::select('type.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('type.category_fk', '=', 'category.id');
		})
		->where('type.created_by',Auth::user()->id)->orderBy("type.id", 'desc')
		->get();
	    return $query;

	} 
	
	
	/*New Routes*/
	public static function getRecordByCategoryId($id){
		$query = Type::where('category_fk',$id)->orderBy('name','asc')->where('created_by',Auth::user()->id)->get();
		return $query;
	}
	
}
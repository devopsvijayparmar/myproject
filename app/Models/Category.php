<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class Category extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'category';
    protected $fillable = ['name','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','slug'];
	
	public static function getRecordById($id){
			$query = Category::where('id',$id)->orderBy('id','desc')->where('created_by',Auth::user()->id)->first();
		   return $query;
	} 
	/* public static function categoryList(){
			$query = Category::orderBy('id','desc')->where('created_by',Auth::user()->id)->get();
		   return $query;
	}  */
	public static function categorylistbyid($id){
			$query = Category::orderBy('name','desc')->where('created_by',$id)->get();
		   return $query;
	} 
	
	/*New */
	public static function categoryList(){
		$query = Category::orderBy('name','asc')->where('created_by',Auth::user()->id)->get();
		return $query;
	} 
	public static function getCategoryList(){
		$query = Category::where('created_by',Auth::user()->id);
		return $query;
	} 
	
	public static function getCategoryForWebsite($id){
		$query = Category::orderBy('name','asc')->where('created_by',$id)->get();
		return $query;
	} 
	public static function getCategoryByUserId($id){
			$query = Category::orderBy('name','desc')->where('created_by',$id)->get();
		   return $query;
	}
	
}
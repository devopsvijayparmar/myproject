<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Blog extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'blog';
    protected $fillable = ['title','description','image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	
	public static function getRecordById($id){
		$query = Blog::where('id',$id)->first();
	    return $query;
	} 
	
	public static function getRecordForIndex($id){
		$query = Blog::where('created_by',$id)->orderBy('id','desc')->take(6)->get();
	    return $query;
	}
	public static function getRecordForIndexList($id){
		$query = Blog::where('created_by',$id)->orderBy('id','desc')->paginate(12);
	    return $query;
	}
	public static function getRecordForIndexLast3($id){
		$query = Blog::where('created_by',$id)->orderBy('id','desc')->take(3)->get();
	    return $query;
	}
	
	/*New Routes*/
	public static function getBlogList(){
		$query = Blog::where('created_by',Auth::user()->id);
	    return $query;
	}
	
	function getImageAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/blog/'.$image);
	}

}
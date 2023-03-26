<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Crypt;

class Blog extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'blog';
    protected $fillable = ['title','description','image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	public static function getBlogList(){
		$query = Blog::where('created_by',Auth::user()->id);
	    return $query;
	}
	
	function getImageAttribute($image){
		return $image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/blog/'.$image);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = Blog::where('created_by',$id)->orderBy('id','desc')->take(6)->get();
	    return $query;
	}
	
	public static function getRecordForWebsite($id,$paginate){
		$query = Blog::where('created_by',$id)->orderBy('id','desc')->paginate($paginate);
	    return $query;
	}
	
	function getDetailPageLink(){
		return url('/'.Crypt::encrypt($this->id).'/single-blog');
	}
	
	function getBlogPageLink(){
		return url('blog');
	}

}
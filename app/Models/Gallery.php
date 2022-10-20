<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Gallery extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'gallery';
    protected $fillable = ['image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	public static function editRecordById(){
		$query = Gallery::where('created_by',Auth::user()->id)->first();
		return $query;
	}
	public static function getRecordById(){
		$query = Gallery::where('created_by',Auth::user()->id)->orderBy('id','desc')->get();
		return $query;
	}
	/* public static function getRecordByIdArray(){
		$query = Gallery::where('created_by',Auth::user()->id)->pluck('image')->toArray();
		return $query;
	} */
	public static function getRecordByIdForIndex($id){
		$query = Gallery::where('created_by',$id)->orderBy('id','desc')->paginate(16);
		return $query;
	}
	
	public static function getRecordByIdForIndex6($id){
		$query = Gallery::where('created_by',$id)->orderBy('id','desc')->take(6)->get();
		return $query;
	}
	
	/*New*/
	
	public static function getGalleryList(){
		$query = Gallery::where('created_by',Auth::user()->id)->get();
		return $query;
	}
	
	public static function getGalleryCount(){
		$query = Gallery::where('created_by',Auth::user()->id)->count();
		return $query;
	}
	
	public static function getGalleryImageArray(){
		$query = Gallery::where('created_by',Auth::user()->id)->pluck('image')->toArray();
		return $query;
	}
	
	function getImagePathAttribute(){
		return $this->image == null ? url('/images/image_not_found.jpg') : asset('/uploads/gallery/'.$this->image);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = Gallery::where('created_by',$id)->orderBy('id','desc')->take($node)->get();
		return $query;
	}
	
	public static function getRecordForWebsite($id,$paginate){
		$query = Gallery::where('created_by',$id)->orderBy('id','desc')->paginate($paginate);
		return $query;
	}
	
}
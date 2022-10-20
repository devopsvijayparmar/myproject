<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class Slider extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'slider';
    protected $fillable = ['image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public static function getRecordById($id){
			$query = Slider::where('id',$id)->orderBy('id','desc')->where('created_by',Auth::user()->id)->first();
		   return $query;
	} 
	public static function sliderList(){
			$query = Slider::orderBy('id','desc')->where('created_by',Auth::user()->id)->get();
		   return $query;
	} 
	public static function sliderListById($id){
			$query = Slider::orderBy('id','desc')->where('created_by',$id)->get();
		   return $query;
	}
	
	
	/*New*/
	public static function getSliderList(){
		$query = Slider::where('created_by',Auth::user()->id)->get();
		return $query;
	} 
	function getImageAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/slider/'.$image);
	}
	
	public static function getSlidersByUserId($id){
		$query = Slider::orderBy('id','desc')->where('created_by',$id)->get();
		return $query;
	}
	
	
}
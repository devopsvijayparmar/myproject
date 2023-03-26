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
	
	
	public static function getSliderList(){
		$query = Slider::where('created_by',Auth::user()->id)->get();
		return $query;
	} 
	function getImageAttribute($image){
		return $image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/slider/'.$image);
	}
	
	public static function getSlidersByUserId($id){
		$query = Slider::orderBy('id','asc')->where('created_by',$id)->get();
		return $query;
	}
	
	
}
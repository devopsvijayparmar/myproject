<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Plan extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'plan';
    protected $fillable = ['name','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public static function getPlansList(){
		$query = Plan::where('created_by',Auth::user()->id);
	    return $query;
	}
	function getImageUrl1Attribute(){
		return $this->image_1 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/plan/'.$this->image_1);
	}
	function getImageUrl2Attribute(){
		return $this->image_2 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/plan/'.$this->image_2);
	}
	function getImage3UrlAttribute(){
		return $this->image_3 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/plan/'.$this->image_3);
	}
	public static function takeRecordForWebsite($id,$node){
		$query = Plan::where('created_by',$id)->orderBy('id','desc')->take($node)->get();
	    return $query;
	}
	public static function getRecordForWebsite($id,$node){
		$query = Plan::where('created_by',$id)->paginate($node);
	    return $query;
	}
	function getDetailPageLink(){
		return url('/'.Crypt::encrypt($this->id).'/single-plan');
	}
	
	
	
}
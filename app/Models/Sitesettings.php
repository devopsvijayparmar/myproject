<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use App\Models\Currency;

class Sitesettings extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'site_settings';
    protected $fillable = ['title','fav_icon','site_logo','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','currency_id'];
	
	public function currency(){
		return $this->belongsTo(Currency::class, 'currency_id', 'id');
	}
	
	public static function getRecordByUserId(){
		$query = Sitesettings::where('created_by',Auth::user()->id)->with('currency')->first();
		return $query;
	} 
	
	public static function getRecordByUserIdForWebsite($id){
		$query = Sitesettings::where('created_by',$id)->with('currency')->first();
		return $query;
	}
	
	function getSiteLogoAttribute($image){
		return $image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/site_settings/'.$image);
	}
	
	function getFavIconAttribute($image){
		return $image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/site_settings/'.$image);
	}
	
	
	
	
}
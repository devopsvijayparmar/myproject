<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class Sitesettings extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'site_settings';
    protected $fillable = ['title','fav_icon','site_logo','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','currency_fk'];
	
	public static function getRecordById(){
			$query = Sitesettings::where('created_by',Auth::user()->id)->first();
		   return $query;
	} 
	public static function editRecordByuserId($id){
		$query = Sitesettings::select('site_settings.*','currency.symbol as currency_symbol')
		->leftjoin('currency', function($join) {
			$join->on('site_settings.currency_fk', '=', 'currency.id');
		})
		->where('site_settings.created_by',$id)->first();
	    return $query;
	}
	
	
	
}
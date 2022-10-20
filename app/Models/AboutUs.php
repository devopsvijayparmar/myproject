<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class AboutUs extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'about_us';
    protected $fillable = ['description','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	/* public static function editRecordByUserId(){
		$query = AboutUs::where('created_by',Auth::user()->id)->first();
		return $query;
	} */
	public static function editRecordByIdforindex($id){
		$query = AboutUs::where('created_by',$id)->first();
		return $query;
	}
	
	/*New*/
	public static function editRecordByUserId(){
		$query = AboutUs::where('created_by',Auth::user()->id)->first();
		return $query;
	}	
	public static function getRecordForWebsite($id){
		$query = AboutUs::where('created_by',$id)->first();
		return $query;
	}
}
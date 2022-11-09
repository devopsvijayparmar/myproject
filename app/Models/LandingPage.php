<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class LandingPage extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'landing_page';
    protected $fillable = ['title','description','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','url','url_name','status'];
	
	
	public static function getLangingPageList(){
		$query = LandingPage::where('created_by',Auth::user()->id);
		return $query;
	}
	
	public static function checkExitTitle($url_name){
		$query = LandingPage::where('created_by',Auth::user()->id)->where('url_name',$url_name)->first();
		return $query;
	}
	public static function checkExitTitleWithId($url_name,$id){
		$query = LandingPage::where('created_by',Auth::user()->id)->where('url_name',$url_name)->where('id','!=',$id)->first();
		return $query;
	}
	public static function getRecordByUser($id,$url_name){
		$query = LandingPage::where('created_by',$id)->where('url_name',$url_name)->first();
		return $query;
	}
	
	
}
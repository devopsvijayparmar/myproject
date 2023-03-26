<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class OurTeam extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'our_team';
    protected $fillable = ['name','email','mobile','address','image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public static function getTeamList(){
		$query = OurTeam::where('created_by',Auth::user()->id);
	    return $query;
	}
	
	function getImageUrlAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/our_team/'.$image);
	}
	
	function getImageAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/our_team/'.$image);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = OurTeam::where('created_by',$id)->orderBy('id','desc')->take($node)->get();
		return $query;
	}
	
	function getOurTeamPageLink(){
		return url('ourteam');
	}
	
	public static function getOurTeamListForIndex($id,$node){
		$query = OurTeam::where('created_by',$id)->orderBy('id','desc')->paginate($node);
		return $query;
	}
	
	
	
}
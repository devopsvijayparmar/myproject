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
	
	public static function getRecordById($id){
			$query = OurTeam::where('id',$id)->orderBy('id','desc')->where('created_by',Auth::user()->id)->first();
		   return $query;
	} 
	public static function ourteamlist(){
			$query = OurTeam::orderBy('id','desc')->where('created_by',Auth::user()->id)->orderBy('id','desc')->get();
		   return $query;
	} 
	public static function ourteamlistforindex20($id){
			$query = OurTeam::orderBy('id','desc')->where('created_by',$id)->orderBy('id','desc')->paginate(8);
		   return $query;
	}
	public static function ourteamlistforindex($id){
			$query = OurTeam::orderBy('id','desc')->where('created_by',$id)->orderBy('id','desc')->paginate(20);
		   return $query;
	}
	
}
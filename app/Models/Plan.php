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
	
	
	public static function getPlanList(){
		$query = Plan::where('created_by',Auth::user()->id)->get();
	    return $query;

	} 
	
	public static function getRecordForIndexList($id){
		$query = Plan::where('created_by',$id)->paginate(12);
	    return $query;
	}
	
	public static function getRecordForIndexLast3($id){
		$query = Plan::where('created_by',$id)->take(5)->get();
	    return $query;
	}
	
	public static function getRecordForIndexLast6($id){
		$query = Plan::where('created_by',$id)->take(6)->get();
	    return $query;
	}
	
	public static function getRecordById($id){
		$query = Plan::where('id',$id)->first();
	    return $query;
	}
	
	
}
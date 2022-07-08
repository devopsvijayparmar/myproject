<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Service extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'service';
    protected $fillable = ['name','description','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	public static function getServiceList(){
		$query = Service::where('created_by',Auth::user()->id)->get();
	    return $query;
	}
	public static function getServiceListByIdFirst4($id,$node){
		$query = Service::where('created_by',$id)->orderBy('id','desc')->take($node)->get();
	    return $query;
	} 
    public static function getServiceListById($id){
		$query = Service::where('created_by',$id)->orderBy('id','desc')->get();
	    return $query;
	} 

	public static function getRecordById($id){
		$query = Service::where('id',$id)->first();
	    return $query;
	} 	
	
	public static function getServiceListByIdPaginate($id){
		$query = Service::where('created_by',$id)->orderBy('id','desc')->paginate(8);
	    return $query;
	}
	
	
}
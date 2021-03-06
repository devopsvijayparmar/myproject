<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Event extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'event';
    protected $fillable = ['title','description','location','start_date','end_date','image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public static function getEventList(){
		$query = Event::where('created_by',Auth::user()->id)->get();
	    return $query;
	}
	
	public static function getEventListForIndex($id){
		
		$currentdate = date('Y-m-d');
		$query = Event::where('created_by',$id)->where('end_date','>=',$currentdate)->take(6)->get();
	    return $query;
	}
	
	public static function getEventList12($id){
		
		$currentdate = date('Y-m-d');
		$query = Event::where('created_by',$id)->where('end_date','>=',$currentdate)->paginate(12);
	    return $query;
	}
	
	public static function getRecordById($id){
		$query = Event::where('id',$id)->first();
	    return $query;
	}
	
	

}
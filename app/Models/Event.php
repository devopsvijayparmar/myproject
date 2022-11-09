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
		$query = Event::where('created_by',Auth::user()->id);
	    return $query;
	}
	
	function getImageAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/event/'.$image);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = Event::where('created_by',$id)->where('end_date','>=',date('Y-m-d'))->orderBy('start_date','asc')->take($node)->get();
	    return $query;
	}
	
	function getDetailPageLink($title){
		return url('/'.$title.'/'.Crypt::encrypt($this->id).'/single-event');
	}
	
	function getEventPageLink($title){
		return url('/'.$title.'/events');
	}
	
	public static function getRecordForWebsite($id,$node){
		$query = Event::where('created_by',$id)->where('end_date','>=',date('Y-m-d'))->paginate($node);
	    return $query;
	}
	
}
<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Group extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'group';
    protected $fillable = ['name','created_by','for','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	public static function editRecordById(){
		$query = Group::where('created_by',Auth::user()->id)->first();
		return $query;
	}
	
	public static function groupList(){
		$query = Group::where('created_by',Auth::user()->id)->orderBy('id','desc')->get();
		return $query;
	}
	
	public static function getrecordbynme($name){
			$query = Group::where('name',$name)->where('created_by',Auth::user()->id)->first();
		   return $query;
	} 
	
}
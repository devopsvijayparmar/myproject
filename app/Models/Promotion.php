<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Promotion extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'promotion';
    protected $fillable = ['description','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
/* 	public static function editRecordById(){
		$query = Promotion::where('created_by',Auth::user()->id)->first();
		return $query;
	} */
	
	public static function getRecordById($id){
		$query = Promotion::where('created_by',$id)->first();
		return $query;
	}
	
	/*New*/
	public static function editRecordByUserId(){
		$query = Promotion::where('created_by',Auth::user()->id)->first();
		return $query;
	}
	public static function getRecordByUserId($id){
		$query = Promotion::where('created_by',$id)->first();
		return $query;
	}	
	
}
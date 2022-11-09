<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Philosophy extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'philosophy';
    protected $fillable = ['description','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public static function editRecordById(){
		$query = Philosophy::where('created_by',Auth::user()->id)->first();
		return $query;
	}
	public static function getRecordByUserId($id){
		$query = Philosophy::where('created_by',$id)->first();
		return $query;
	}
	
}
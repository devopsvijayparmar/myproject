<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class EmailMarketing extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'email_marketing';
    protected $fillable = ['subject','email','image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	public static function getemails(){
		$query = EmailMarketing::where('created_by',Auth::user()->id)->get();
	    return $query;
	}
	
	public static function getRecordById($id){
		$query = EmailMarketing::where('id',$id)->first();
	    return $query;
	}
	
}
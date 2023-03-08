<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Business extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'front_business';
    protected $fillable = ['user_id','send_by','message','is_read','created_at','updated_at','deleted_at','name','phone','email','about','project_detail','country'];
	
	
	public static function getChatByUser($id){
		$query = Business::where('user_id',$id)->get();
		return $query;
	}
	
	public static function getLastMessageBySupport($id){
		$query = Business::where('send_by',1)->where('user_id',$id)->orderBy('id','desc')->first();
		return $query;
	}
	
	
}
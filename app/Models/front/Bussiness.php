<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Bussiness extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'front_bussiness';
    protected $fillable = ['user_id','send_by','message','is_read','created_at','updated_at','deleted_at','name','phone','email','about','project_detail','country'];
	
	
	public static function getChatByUser($id){
		$query = Bussiness::where('user_id',$id)->get();
		return $query;
	}
	
	public static function getLastMessageBySupport($id){
		$query = Bussiness::where('send_by',1)->where('user_id',$id)->orderBy('id','desc')->first();
		return $query;
	}
	
	
}
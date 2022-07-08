<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class WebTemplates extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'front_web_templates';
    protected $fillable = ['title','description','image','url','preview','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','slug'];
	
	public static function getlist(){
		$query = WebTemplates::get();
	    return $query;
	}
	
	public static function getRecordBySlug($slug){
		$query = WebTemplates::where('slug',$slug)->first();
	    return $query;
	}
	

}
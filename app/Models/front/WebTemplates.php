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
    protected $fillable = ['title','description','image','image_1','site_name','preview','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','slug','type'];
	
	public static function getlist(){
		$query = WebTemplates::get();
	    return $query;
	}
	
	public static function getWebTemplates($type){
		$query = WebTemplates::where('type',$type)->get();
	    return $query;
	}
	
	function getImageUrlAttribute(){
		return $this->image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/front/web_templates/'.$this->image);
	}
	
	function getImageUrl1Attribute(){
		return $this->image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/front/web_templates/'.$this->image_1);
	}
	
	public static function getRecordBySlug($slug){
		$query = WebTemplates::where('slug',$slug)->first();
	    return $query;
	}
	

}
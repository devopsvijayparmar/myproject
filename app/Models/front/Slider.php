<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use App\Models\front\Sites;

class Slider extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'front_slider';
    protected $fillable = ['image','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','description','title','url'];
	
	function getImageAttribute($image){
		return $image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/slider/'.$image);
	}
	
	function getSiteUrlAttribute(){
		$site_name =  Sites::where('site_name',$this->url)->value('site_name');
		return url('/signup/?site='.$site_name);
	}
	
}
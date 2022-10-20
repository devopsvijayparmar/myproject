<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class AdminSitesettings extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'admin_site_settings';
    protected $fillable = ['title','fav_icon','site_logo','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','landing_page_email'];
	
	
	function getSiteLogoAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/front/settings/'.$image);
	}
	
	function getFavIconAttribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/front/settings/'.$image);
	}
	
	
}
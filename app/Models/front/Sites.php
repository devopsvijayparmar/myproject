<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Sites extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'sites';
    protected $fillable = ['site_name','name','created_at','updated_at','deleted_at'];
	
	public static function getSites(){
		$query = Sites::orderBy('site_name','asc')->get();
	    return $query;
	}
	
}
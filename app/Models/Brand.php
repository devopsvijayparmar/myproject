<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class Brand extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'brand';
    protected $fillable = ['name','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];

	public static function brandList(){
		$query = Brand::where('created_by',Auth::user()->id);
		return $query;
	} 
	public static function getBrandListForDropdown(){
		$query = Brand::orderBy('name','asc')->where('created_by',Auth::user()->id)->get();
		return $query;
	} 
	
}
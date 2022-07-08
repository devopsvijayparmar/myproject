<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Currency extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'currency';
    protected $fillable = ['name','symbol','code','created_at','updated_at','deleted_at'];
	
	
	public static function getcurrencylist(){
		$query = Currency::get();
		return $query;
	}
	
}
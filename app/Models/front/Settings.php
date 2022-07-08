<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Settings extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'front_settings';
    protected $fillable = ['title','logo','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
}
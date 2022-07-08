<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class FrontContactUs extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'contact_us_inquiry';
    protected $fillable = ['name','email','mobile','message','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
}
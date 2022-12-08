<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Crypt;

class PageBuilder extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'page_builder';
    protected $fillable = ['title','description','name','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	

}
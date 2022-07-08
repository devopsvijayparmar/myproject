<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class PurchasePlan extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'purchase_plan';
    protected $fillable = ['user_id','plan_id','plan_name','price','description','start_date','expiry_date','duration','duration_in_days','emails','page_builder','price_text','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	
}
<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class Type extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'type';
    protected $fillable = ['category_id','name','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public static function getRecordByCategoryId($id){
		$query = Type::where('category_id',$id)->orderBy('name','asc')->where('created_by',Auth::user()->id)->get();
		return $query;
	}
	
		public function category(){
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
	
	public static function getTypeList(){
		$query = Type::where('created_by',Auth::user()->id)->with('category');
		return $query;
	} 
	
}
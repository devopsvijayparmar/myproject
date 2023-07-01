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
    protected $fillable = ['title','description','name','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','url','url_name','reposition'];
	
	public static function getPageBuilderList(){
		$query = PageBuilder::where('created_by',Auth::user()->id)->orderBy('reposition','asc')->get();
		return $query;
	}
	public static function getPageBuilderCount(){
		$query = PageBuilder::where('created_by',Auth::user()->id)->count();
		return $query;
	}
	public static function getRecordByUser($id,$url_name){
		$query = PageBuilder::where('created_by',$id)->where('url_name',$url_name)->first();
		return $query;
	}
	public static function getPageBuilderListForWebsite($id){
		$query = PageBuilder::where('created_by',$id)->orderBy('reposition','asc')->get();
		return $query;
	}

}
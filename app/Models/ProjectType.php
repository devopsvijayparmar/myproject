<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class ProjectType extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'project_type';
    protected $fillable = ['name','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at','slug'];
	
	/* public static function projectTypeList(){
			$query = ProjectType::where('created_by',Auth::user()->id)->get();
		   return $query;
	} 
	public static function getListById($id){
			$query = ProjectType::where('created_by',$id)->get();
		   return $query;
	} 
	public static function getRecordById($id){
			$query = ProjectType::where('id',$id)->first();
		   return $query;
	}  */
	
	
	/*New */
	public static function projectTypeList(){
		$query = ProjectType::orderBy('name','asc')->where('created_by',Auth::user()->id)->get();
		return $query;
	} 
	public static function getPojectTypeList(){
		$query = ProjectType::where('created_by',Auth::user()->id);
		return $query;
	} 
	public static function getProjectTypeForWebsite($id){
		$query = ProjectType::orderBy('name','asc')->where('created_by',$id)->get();
		return $query;
	} 
	
	
}
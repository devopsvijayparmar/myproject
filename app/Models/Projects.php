<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\ProjectType;
use Crypt;

class Projects extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'projects';
    protected $fillable = ['project_type_id','name','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	public static function getProductsList(){
	
		$query = Projects::select('projects.*','project_type.name as project_type_name')
		->leftjoin('project_type', function($join) {
			$join->on('projects.project_type_fk', '=', 'project_type.id');
		})
		->where('projects.created_by',Auth::user()->id)->orderBy("projects.id", 'desc')
		->get();
	    return $query;

	} 
	/* public static function getRecordById($id){
		
		$query = Projects::select('projects.*','project_type.name as project_type_name')
		->leftjoin('project_type', function($join) {
			$join->on('projects.project_type_fk', '=', 'project_type.id');
		})
		->where('projects.id',$id)->orderBy("projects.id", 'desc')
		->first();
	    return $query;
	}  */
	
	public static function getRecordForIndex($user_id){
		$query = Projects::select('projects.*','project_type.name as project_type_name')
		->leftjoin('project_type', function($join) {
			$join->on('projects.project_type_fk', '=', 'project_type.id');
		})
		->where('projects.created_by',$user_id)->orderBy("projects.id", 'desc')
		->take(6)->get();
	    return $query;

	} 
	public static function getRecordForIndex20($user_id,$cat){
		$TEMP = "projects.created_by = '$user_id'";
		IF($cat != "category"){
			$TEMP .= " AND project_type.slug like '%$cat%' ";
		}
		$query = Projects::select('projects.*','project_type.name as project_type_name')
		->leftjoin('project_type', function($join) {
			$join->on('projects.project_type_fk', '=', 'project_type.id');
		})
		->whereRaw($TEMP)->where('projects.created_by',$user_id)->orderBy("projects.id", 'desc')
		->paginate(20);
	    return $query;

	} 
	
	/*New*/
	public function project_type(){
		return $this->belongsTo(ProjectType::class, 'project_type_id', 'id');
	}
	
	public static function getProjectList(){
		$query = Projects::where('created_by',Auth::user()->id)->with('project_type');
	    return $query;
	}
	
	function getImage1Attribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/projects/'.$image);
	}
	function getImage2Attribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/projects/'.$image);
	}
	function getImage3Attribute($image){
		return $image == null ? url('/images/image_not_found.jpg') : asset('/uploads/projects/'.$image);
	}
	
	public static function takeRecordForWebsite($id,$node){
		$query = Projects::where('created_by',$id)->with('project_type')->take($node)->get();
	    return $query;
	}
	
	function getDetailPageLink($title){
		return url('/'.$title.'/'.Crypt::encrypt($this->id).'/single-project');
	}
	
	function getProjectCategoryLink($title){
		return url('/'.$title.'/projects/category');
	}
	public static function getRecordForWebsite($user_id,$cat,$node){
		$TEMP = "projects.created_by = '$user_id'";
		IF($cat != "category"){
			$TEMP .= " AND project_type.slug like '%$cat%' ";
		}
		$query = Projects::select('projects.*','project_type.name as project_type_name')
		->leftjoin('project_type', function($join) {
			$join->on('projects.project_type_id', '=', 'project_type.id');
		})
		->whereRaw($TEMP)->where('projects.created_by',$user_id)->orderBy("projects.id", 'desc')
		->paginate($node);
	    return $query;

	}
	
	public static function getRecordById($id){
		$query = Projects::with('project_type')->where('id',$id)->first();
	    return $query;
	} 
	
}
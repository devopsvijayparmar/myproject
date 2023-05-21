<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class Books extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'books';
    protected $fillable = ['category_id','name','author','date_released','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public function category(){
		return $this->belongsTo(Category::class, 'category_id', 'id');
	}
	
	public static function getBooksList(){
		$query = Books::where('created_by',Auth::user()->id)->with('category');
	    return $query;
	}
	
	public static function getRecordById($id){
		$query = Books::where('id',$id)->with('category')->first();
	    return $query;
	}
	
	function getImageUrl1Attribute(){
		return $this->image_1 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/books/'.$this->image_1);
	}
	function getImageUrl2Attribute(){
		return $this->image_2 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/books/'.$this->image_2);
	}
	function getImageUrl3Attribute(){
		return $this->image_3 == null ? asset('/images/image_not_found.jpg') : asset('/uploads/books/'.$this->image_3);
	}
	
}
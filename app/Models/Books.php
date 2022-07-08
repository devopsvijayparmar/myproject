<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class Books extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'books';
    protected $fillable = ['category_fk','name','author','date_released','description','image_1','image_2','image_3','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	
	public static function getbookslist(){
	
		$query = Books::select('books.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('books.category_fk', '=', 'category.id');
		})
		->where('books.created_by',Auth::user()->id)->orderBy("books.id", 'desc')
		->get();
	    return $query;

	} 
	public static function getRecordById($id){
		
		$query = Books::select('books.*','category.name as category_name')
		->leftjoin('category', function($join) {
			$join->on('books.category_fk', '=', 'category.id');
		})
		->where('books.id',$id)->orderBy("books.id", 'desc')
		->first();
	    return $query;

	} 
	
}
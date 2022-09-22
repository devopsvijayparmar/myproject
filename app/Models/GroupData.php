<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class GroupData extends Authenticatable
{
    use Notifiable;
    protected $table = 'group_data';
    protected $fillable = ['group_fk','address_book_fk','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	/* public static function getRecordByGroupId($id){
		$query = GroupData::where('group_fk',$id)->pluck('address_book_fk')->toArray();
		return $query;
	} */
	
	public static function getgroupdatalist($id){
	
		$query = GroupData::select('group_data.*','address_book.name','address_book.email','address_book.mobile')
		->leftjoin('address_book', function($join) {
			$join->on('group_data.address_book_fk', '=', 'address_book.id');
		})
		->where('group_data.group_fk',$id)
		->get();
	    return $query;

	} 
	
	/*New*/
	public static function getRecordByGroupId($id){
		$query = GroupData::where('group_fk',$id)->pluck('address_book_fk')->toArray();
		return $query;
	}
	
}
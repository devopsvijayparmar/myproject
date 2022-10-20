<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use App\Models\Group;
use App\Models\AddressBook;

class GroupData extends Authenticatable
{
    use Notifiable;
    protected $table = 'group_data';
    protected $fillable = ['group_id','address_book_id','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	/* public static function getRecordByGroupId($id){
		$query = GroupData::where('group_id',$id)->pluck('address_book_id')->toArray();
		return $query;
	} */
	
	/* public static function getgroupdatalist($id){
	
		$query = GroupData::select('group_data.*','address_book.name','address_book.email','address_book.mobile')
		->leftjoin('address_book', function($join) {
			$join->on('group_data.address_book_id', '=', 'address_book.id');
		})
		->where('group_data.group_id',$id)
		->get();
	    return $query;

	}  */
	
	/*New*/
	public static function getRecordByGroupId($id){
		$query = GroupData::where('group_id',$id)->pluck('address_book_id')->toArray();
		return $query;
	}
	
	public function group(){
		return $this->belongsTo(Group::class, 'group_id', 'id');
	}
	
	public function address_book(){
		return $this->belongsTo(AddressBook::class, 'address_book_id', 'id');
	}
	
	public static function getGroupDataList($id){
		$query = GroupData::where('group_id',$id)->with('address_book')->get();
		return $query;
	}
	
}
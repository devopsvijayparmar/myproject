<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class AddressBook extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'address_book';
    protected $fillable = ['name','email','mobile','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	public static function getAddressBookList(){
		$query = AddressBook::where('created_by',Auth::user()->id);
		return $query;
	} 
	
	public static function getAddressBookCount(){
		$query = AddressBook::where('created_by',Auth::user()->id)->count();
		return $query;
	} 
	
	public static function addressBookList(){
			$query = AddressBook::orderBy('name','asc')->where('created_by',Auth::user()->id)->get();
		   return $query;
	} 
	
	public static function getRecordForLandingPage($ids){
		$query = AddressBook::whereIn('id',$ids)->get();
	    return $query;
	} 
	
	public static function addressBookIdArray(){
			$query = AddressBook::where('created_by',Auth::user()->id)->pluck('id')->toArray();
		   return $query;
	} 
	
}
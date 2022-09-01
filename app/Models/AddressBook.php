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
	
	public static function getRecordById($id){
		$query = AddressBook::where('id',$id)->orderBy('id','desc')->where('created_by',Auth::user()->id)->first();
		return $query;
	} 
	
	public static function addressbookList(){
			$query = AddressBook::orderBy('id','desc')->where('created_by',Auth::user()->id)->get();
		   return $query;
	} 
	
	public static function addressbookListArray(){
			$query = AddressBook::where('created_by',Auth::user()->id)->pluck('id')->toArray();
		   return $query;
	} 
	
	public static function getRecordForLandingPage($ids){
		$query = AddressBook::whereIn('id',$ids)->get();
	    return $query;
	} 
	public static function addressbookListCount(){
			$query = AddressBook::orderBy('id','desc')->where('created_by',Auth::user()->id)->count();
		   return $query;
	} 
	
}
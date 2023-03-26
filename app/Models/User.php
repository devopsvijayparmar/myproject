<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use App\Notifications\ResetPasswordNotification;
use Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable ,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name','email','password','site','title','site_name','email_verified','profile',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
	
	
	public static function getRecordByTitle($title){
		$query = User::where('title',$title)->first();
	    return $query;
	} 
	
	public static function getRecordByEmail($email){
		$query = User::where('email',$email)->first();
	    return $query;
	} 
	
	function getProfileAttribute($image){
		return $image == null ? asset('/images/boxed-bg.jpg') : asset('/uploads/profile/'.$image);
	}
	
	function getMyWebsiteAttribute(){
		return Auth::user()->title.'.'.config('enum.website');
	}
	
	function getMyWebsiteLinkAttribute(){
		return 'http://'.Auth::user()->title.'.'.config('enum.website');
	}
	
	public function sendPasswordResetNotification($token)
	{
		$this->notify(new ResetPasswordNotification($token));
	}
}

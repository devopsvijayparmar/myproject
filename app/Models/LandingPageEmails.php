<?php
namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Auth;

class LandingPageEmails extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'landing_page_emails';
    protected $fillable = ['to','from','subject','email','is_send','created_by','created_at','updated_at','deleted_at'];
	
}
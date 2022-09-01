<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class TopUp extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'front_top_up';
    protected $fillable = ['no_of_emails','	no_of_emails_price','no_of_page_builder','no_of_page_builder_price','no_of_landing_page','no_of_landing_page_price','no_of_address_book','no_of_address_book_price','created_at','updated_at','deleted_at'];
	

}
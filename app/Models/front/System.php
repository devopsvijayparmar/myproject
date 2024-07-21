<?php
namespace App\Models\front;

use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;

class System extends Authenticatable
{
    use Notifiable;
	use SoftDeletes;
    protected $table = 'front_system';
    protected $fillable = ['title','image','description','created_by','created_at','updated_by','updated_at','deleted_by','deleted_at'];
	
	function getImageUrlAttribute(){
		return $this->image == null ? asset('/images/image_not_found.jpg') : asset('/uploads/front/system/'.$this->image);
	}
	
}
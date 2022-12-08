<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Category;
use App\Models\Type;
use App\Models\User;
use App\Models\LandingPage;
use App\Traits\ImageUpload;
use Auth;
use Hash;
use URL;


class CommanController extends Controller
{
	
	use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		
    }
	
	public function getTypeByCategory(Request $request)
    {    
		 $data = Type::getRecordByCategoryId($request->id);
		 $type_array = '';
		 if(isset($data) && $data !=''){
			 ?><option value="">select type</option><?php
			 foreach($data as $val){
				  $selected = "";
			 if($request->type == $val->id){
				 $selected = "selected";
			 }
				 $type_array .='<option value="'.$val->id.'" '.$selected.'>'.$val->name.'</option>';
			 }
		 }
		 echo $type_array;
    }
	
	public function preview($title,$url_name){
		$user = User::getRecordByTitle($title);
		$this->data['landing_page'] = LandingPage::getRecordByUser($user->id,$url_name);
		return view('admin.pages.landing_page.preview',$this->data);
	}
	
	public function summerNoteImage(Request $request){
		/*Image Upload Trait*/
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'summernotes');
			return url("/uploads/summernotes/$image_name");
		}
	}
	
	
	
}
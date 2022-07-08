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
use Auth;
use Hash;


class CommanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		
    }
	
	public function gettypebycategory(Request $request)
    {    
		 $data = Type::getRecordByCategoryFk($request->id);
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
	
	public function checkoldpassword(Request $request)
    {    
		$password = Auth::user()->password;
		
		if(Hash::check($request->password, $password))
		{
			echo 1;
		}
		else
		{
			echo 0;
		}
		
    }
    
	public function preview($title,$url_name){
		$user = User::getRecordByTitle($title);
		$this->data['landing_page'] = LandingPage::getRecordByUser($user->id,$url_name);
		return view('admin.landing_page.preview',$this->data);
	}
	
}
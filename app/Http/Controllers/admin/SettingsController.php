<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use DB;
use App\Models\Slider;
use App\Models\User;
use Validator;
use DataTables;
use Auth;
use Hash;
use Crypt;
use JsValidator;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $validationRulesSlider = [
		'image'=>'required|mimes:jpeg,jpg,png,PNG,svg|max:20480'
    ];  
	 
	protected $validationRules = [
        'current_password' => 'required|min:8',
        'new_password' => 'required|min:8',
        'confirm_new_password' => 'required|same:new_password|min:8',
    ];  
	 
	function __construct()
    {
		$this->middleware('permission:site_settings', ['only' => ['index','change_password','update']]);
    }
	
	public function index(Request $request)
    {    
	   
		if ($request->ajax()) {
		  
			$data = Slider::getSliderList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('image', function ($row)
			{
			   return '<img class="rp-img" src="'.$row['image'].'">';
			})
			->editColumn('action', function ($row)
			{
				
			   $edit_link = "'" . Crypt::encrypt($row['id']) . "'";	
			   $btn = '<a title="Edit" class="mr-2" href="javascript:void(0);" onclick="functionedit('.$edit_link.');" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('slider.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   return $btn;
			})
			->rawColumns(['image','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'image','name' => 'image', 'title' => __("Image"),'searchable'=>false,'orderable' => false],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['validator'] = JsValidator::make($this->validationRulesSlider);
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('user-settings');
			$data['dateTableTitle'] = "Home Slider";
			$data['dataTableId'] = time();
			return view('admin.pages.slider.index',$data);
		
		}
		
    }
	
	public function change_password(Request $request)
    {    
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.change_password.index',$data);
    }
	
    public function update(Request $request)
    {
		$auth = Auth::user();
        $input = $request->all();
		$validator = Validator::make($input, $this->validationRules);
  
		if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
		} 

        if (Hash::check($request->current_password, Auth::user()->password)) {

            if (!Hash::check($request->new_password, Auth::user()->password)) {

                $user['password'] = Hash::make($request->new_password);
                User::whereId($auth->id)->update($user);

                return redirect()->back()
                    ->with('success', Lang::get('messages.password_updated'));
            } else {
                return redirect()->back()
                    ->with('error', Lang::get('messages.confirm_new_password'));
            }

        } else {
            return redirect()->back()
                ->with('error', Lang::get('messages.current_password_incorrect'));
        }
    }

}
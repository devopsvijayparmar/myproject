<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use App\Traits\ImageUpload;
use JsValidator;
use DataTables;
use Validator;
use App\Models\OurTeam;
use Auth;
use Crypt;


class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	use ImageUpload;
	
	protected $validationRules = [
		'name' => 'required|string|max:255',
		'email' => 'required|max:255|email',
		'mobile' => 'required|digits:10',
		'image'=>'required|mimes:jpeg,jpg,png,PNG,svg|max:20480'
    ];  
	
	protected $validationRulesEdit = [
		'name' => 'required|string|max:255',
		'email' => 'required|max:255|email',
		'mobile' => 'required|digits:10',
		'image'=>'mimes:jpeg,jpg,png,PNG,svg|max:20480'
    ]; 
	 
	function __construct()
    {
		$this->middleware('permission:our_team', ['only' => ['index','create','store','edit','update','show','destroy']]);
    }
	
	public function index(Request $request)
    {    
        if ($request->ajax()) {
		  
			$data = OurTeam::getTeamList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('image', function ($row)
			{
			   return '<img class="rp-img" src="'.$row['image_url'].'">';
			})
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="' . route('our-team.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('our-team.destroy', Crypt::encrypt($row['id']));
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
				['data' => 'name','name' => 'name', 'title' => __("Name"),'searchable'=>true,'orderable' => true],
				['data' => 'email','name' => 'email', 'title' => __("Email"),'searchable'=>true,'orderable' => true],
				['data' => 'mobile','name' => 'mobile', 'title' => __("Mobile"),'searchable'=>true,'orderable' => true],
				['data' => 'address','name' => 'address', 'title' => __("Address"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('our-team.index');
			$data['dateTableTitle'] = "Our Teams";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('our-team.create');
			return view('admin.pages.our_team.index',$data);
		
		}
    }

	public function create(Request $request)
    { 	
	    $data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.our_team.create',$data);
    }
	
	public function store(Request $request)
    {
    	$auth = Auth::user(); 
		$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        } 
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		/*Image Upload Trait*/
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'our_team');
			$input['image'] = $image_name;
		}
		
		$ourteam = OurTeam::create($input);
		if($ourteam){
			return redirect()->route('our-team.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function edit($id)
    { 		
	    $id = Crypt::decrypt($id);
		$data['data'] = OurTeam::find($id);
		$data['validator'] = JsValidator::make($this->validationRulesEdit);
		return view('admin.pages.our_team.edit',$data);
        
    }
	
	public function update(Request $request,$id)
    {
	
		$id = Crypt::decrypt($id);
		$auth = Auth::user();
    	$input = $request->all();
    	$validator = Validator::make($input, $this->validationRulesEdit);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }  
		
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
     				
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'our_team');
			$input['image'] = $image_name;
		}

		$ourteam = OurTeam::where('created_by', Auth::user()->id)->where('id',$id)->first();
		
		if($ourteam){
			$ourteam->update($input);
			return redirect()->route('our-team.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $data['data'] = OurTeam::find($id);
        return view('admin.pages.our_team.show',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	 
	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		$auth = Auth::user(); 	
	    $delete = OurTeam::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    } 
	 
}
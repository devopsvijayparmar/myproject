<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use Illuminate\Support\Facades\Lang;
use App\Traits\ImageUpload;
use JsValidator;
use DataTables;
use App\Models\Service;
use Auth;
use Hash;
use Crypt;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	protected $validationRules = [
		'name' => 'required|string|max:255',
		'description' => 'required|max:5000'
    ]; 
	
	
	function __construct()
    {
		$this->middleware('permission:service', ['only' => ['index','create','store','edit','update','show','destroy']]);
    }
	
	public function index(Request $request)
    {    
	   
       
		if ($request->ajax()) {
		  
			$data = Service::getServiceList();
			return DataTables::of($data)
			->addIndexColumn()
			->editColumn('description', function ($row)
			{
			   return $row->description;
			})
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="' . route('service.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('service.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   return $btn;
			})
			->rawColumns(['description','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'name','name' => 'name', 'title' => __("Name"),'searchable'=>true,'orderable' => true],
				['data' => 'description','name' => 'description', 'title' => __("Description"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('service.index');
			$data['dateTableTitle'] = "Service";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('service.create');
			return view('admin.pages.service.index',$data);
		
		}
		
		
    }

	public function create(Request $request)
    { 	
	    $data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.service.create',$data);
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
		
		$service = Service::create($input);
		if($service){
			return redirect()->route('service.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $data['data'] = Service::getRecordById($id);
		 $data['validator'] = JsValidator::make($this->validationRules);
		 return view('admin.pages.service.edit',$data);
        
    }
	
	public function update(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		$auth = Auth::user();
    	$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }  
		
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		
		$service = Service::where('created_by', Auth::user()->id)->where('id',$id)->first();
		$service->update($input);
		
		if($service){
			return redirect()->route('service.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		$auth = Auth::user(); 	
	    $delete = Service::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
}
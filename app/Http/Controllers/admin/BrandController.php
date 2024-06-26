<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use Validator;
use JsValidator;
use App\Models\Brand;
use Auth;
use Hash;
use Crypt;
use DataTables;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	protected $validationRules = [
		'name' => 'required|string|max:255'
    ];  
	 
	function __construct()
    {
		$this->middleware('permission:brand', ['only' => ['index','store','edit','update','destroy']]);
    }
	
	public function index(Request $request)
    {    
        if ($request->ajax()) {
		  
			$data = Brand::brandList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('action', function ($row)
			{
				
			   $edit_link = "'" . Crypt::encrypt($row['id']) . "'";	
			   $btn = '<a title="Edit" class="mr-2" href="javascript:void(0);" onclick="functionEdit('.$edit_link.');" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('brand.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   return $btn;
			})
			->rawColumns(['action'])
			->make(true);

		} else {
		
		    
			$columns = [
				
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'name','name' => 'name', 'title' => __("Name"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('brand.index');
			$data['dateTableTitle'] = "Brands";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('brand.create');
			$data['validator'] = JsValidator::make($this->validationRules);
			return view('admin.pages.brand.index',$data);
		
		}
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
		
		$brand = Brand::create($input);
	
		if($brand){
			return redirect()->route('brand.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}

    }
	
	public function edit($id)
    {
		$id = Crypt::decrypt($id);
		$data['data'] = Brand::find($id);	
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.brand.edit', $data);
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
        
		$brand = Brand::where('created_by',$auth->id)->where('id',$id)->first();
		
		if($brand){
			$brand->update($input);
			return redirect()->route('brand.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
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
	    $delete = Brand::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
}
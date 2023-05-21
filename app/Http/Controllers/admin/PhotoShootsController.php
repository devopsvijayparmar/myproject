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
use App\Models\Category;
use App\Models\PhotoShoots;
use Auth;
use Hash;
use Crypt;


class PhotoShootsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	use ImageUpload;
	
	protected $validationRules = [
		'category_id' => 'required|max:11',
		'name' => 'required|string|max:255',
		'image'=>'required|mimes:jpeg,jpg,png|max:20480'
    ]; 
	
	protected $validationRulesEdit = [
		'category_id' => 'required|max:11',
		'name' => 'required|string|max:255',
		'image'=>'mimes:jpeg,jpg,png|max:20480'
    ];  
	 
	 
	function __construct()
    {
		$this->middleware('permission:photo_shoots', ['only' => ['index','create','store','edit','update','show','destroy']]);
    }
	
	public function index(Request $request)
    {    
        if ($request->ajax()) {
		  
			$data = PhotoShoots::getPhotoShootList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('image', function ($row)
			{
			   return '<img class="rp-img" src="'.$row['image_url'].'">';
			})
			
			->addColumn('category', function ($row) {
				return $row->category->name;
			})
			
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="' . route('photo-shoots.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('photo-shoots.destroy', Crypt::encrypt($row['id']));
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
				['data' => 'category','name' => 'category.name', 'title' => __("Category"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('photo-shoots.index');
			$data['dateTableTitle'] = "Photo Shoots";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('photo-shoots.create');
			return view('admin.pages.photo_shoots.index',$data);
		
		}
    }

	public function create(Request $request)
    { 	
	    $data['category'] = Category::categoryList();
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.photo_shoots.create',$data);
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
		
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'photo_shoots');
			$input['image'] = $image_name;
		}
		
		$photoshoots = PhotoShoots::create($input);
	
		if($photoshoots){
			return redirect()->route('photo-shoots.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
	     $data['category'] = Category::categoryList();
		 $data['data'] = PhotoShoots::find($id);
		 $data['validator'] = JsValidator::make($this->validationRulesEdit);
		 return view('admin.pages.photo_shoots.edit',$data);
		
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
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        				
		if ($request->hasfile('image')) {
			$image_name = $this->imageUpload($request->file('image'),'photo_shoots');
			$input['image'] = $image_name;
		}
		
		$photoshoots = PhotoShoots::where('created_by', Auth::user()->id)->where('id',$id)->first();
		$photoshoots->update($input);
		
		if($photoshoots){
			return redirect()->route('photo-shoots.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = PhotoShoots::find($id);
        return view('admin.pages.photo_shoots.show',$this->data);
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
	    $delete = PhotoShoots::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
}
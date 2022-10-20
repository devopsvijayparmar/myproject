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
use App\Models\Products;
use Auth;
use Hash;
use Crypt;


class ProductsController extends Controller
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
		'price' => 'max:9|regex:/^\d+(\.\d{1,2})?$/',
		'description' => 'required|max:500',
		'image_1'=>'required|mimes:jpeg,jpg,png|max:20480',
		'image_2'=>'mimes:jpeg,jpg,png|max:20480',
		'image_3'=>'mimes:jpeg,jpg,png|max:20480',
    ]; 
	
	protected $validationRulesEdit = [
		'category_id' => 'required|max:11',
		'name' => 'required|string|max:255',
		'price' => 'max:9|regex:/^\d+(\.\d{1,2})?$/',
		'description' => 'required|max:500',
		'image_1'=>'mimes:jpeg,jpg,png|max:20480',
		'image_2'=>'mimes:jpeg,jpg,png|max:20480',
		'image_3'=>'mimes:jpeg,jpg,png|max:20480',
    ];   
	 
	 
	 
	function __construct()
    {
		$this->middleware('permission:products', ['only' => ['index','create','store','edit','update','show','destroy']]);
    }
	
	public function index(Request $request)
    {    
	   
		if ($request->ajax()) {
		  
			$data = Products::getProductList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('image', function ($row)
			{
			   return '<img class="rp-img" src="'.$row['image_1'].'">';
			})
		     ->addColumn('category', function ($row) {
				return $row->category->name;
			})
			
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="' . route('products.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('products.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   $btn .= '<a title="Details" href="' . route('products.show', Crypt::encrypt($row['id'])) . '" data-popup="tooltip"><i class="fas fa-eye text-info font-16"></i></a>';
			   
			   return $btn;
			})
			->rawColumns(['image','category','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'image','name' => 'image', 'title' => __("Image"),'searchable'=>false,'orderable' => false],
				['data' => 'name','name' => 'name', 'title' => __("Name"),'searchable'=>true,'orderable' => true],
				['data' => 'price','name' => 'price', 'title' => __("Price"),'searchable'=>true,'orderable' => true],
				['data' => 'category','name' => 'category.name', 'title' => __("Category"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('products.index');
			$data['dateTableTitle'] = "Products";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('products.create');
			return view('admin.pages.products.index',$data);
		}
		
		
    }

	public function create(Request $request)
    { 	
	    $data['category'] = Category::categoryList();
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.products.create',$data);
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
		
		if ($request->hasfile('image_1')) {
			$image_name_1 = $this->imageUpload($request->file('image_1'),'products');
			$input['image_1'] = $image_name_1;
		}
		
		if ($request->hasfile('image_2')) {
			$image_name_2 = $this->imageUpload($request->file('image_2'),'products');
			$input['image_2'] = $image_name_2;
		}
		if ($request->hasfile('image_3')) {
			$image_name_3 = $this->imageUpload($request->file('image_3'),'products');
			$input['image_3'] = $image_name_3;
		}
		
		$products = Products::create($input);
	
		if($products){
			return redirect()->route('products.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
	     $data['category'] = Category::categoryList();
		 $data['data'] = Products::find($id);
		 $data['validator'] = JsValidator::make($this->validationRulesEdit);
		 return view('admin.pages.products.edit',$data);
        
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
        				
		if ($request->hasfile('image_1')) {
			$image_name_1 = $this->imageUpload($request->file('image_1'),'products');
			$input['image_1'] = $image_name_1;
		}
		
		if ($request->hasfile('image_2')) {
			$image_name_2 = $this->imageUpload($request->file('image_2'),'products');
			$input['image_2'] = $image_name_2;
		}
		if ($request->hasfile('image_3')) {
			$image_name_3 = $this->imageUpload($request->file('image_3'),'products');
			$input['image_3'] = $image_name_3;
		}
		
		$products = Products::where('created_by', Auth::user()->id)->where('id',$id)->first();
		$products->update($input);
		
		if($products){
			return redirect()->route('products.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
	
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $data['data'] = Products::find($id);
        return view('admin.pages.products.show',$data);
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
	    $delete = Products::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
}
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
use App\Models\Books;
use Auth;
use Crypt;



class BooksController extends Controller
{
	use ImageUpload;
	
	protected $validationRules = [
		'category_id' => 'required|max:11',
		'name' => 'required|string|max:255',
		'author' => 'required|max:255',
		'date_released' => 'required',
		'description' => 'required|max:2000',
		'image_1'=>'required|mimes:jpeg,jpg,svg,png|max:20480',
		'image_2'=>'mimes:jpeg,jpg,svg,png|max:20480',
		'image_3'=>'mimes:jpeg,jpg,svg,png|max:20480',
    ]; 
	
	protected $validationRulesEdit = [
		'category_id' => 'required|max:11',
		'name' => 'required|string|max:255',
		'author' => 'required|max:255',
		'date_released' => 'required',
		'description' => 'required|max:2000',
		'image_1'=>'mimes:jpeg,jpg,svg,png|max:20480',
		'image_2'=>'mimes:jpeg,jpg,svg,png|max:20480',
		'image_3'=>'mimes:jpeg,jpg,svg,png|max:20480',
    ]; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:books', ['only' => ['index','create','store','edit','update','destroy','show']]);
    }
	
	public function index(Request $request)
    {    
	    
		 if ($request->ajax()) {
		  
			$data = Books::getBooksList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('image', function ($row)
			{
			   return '<img class="rp-img" src="'.$row['image_url_1'].'">';
			})
		     ->addColumn('category', function ($row) {
				return $row->category->name;
			})
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="' . route('books.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('books.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   $btn .= '<a title="Details" href="' . route('books.show', Crypt::encrypt($row['id'])) . '" data-popup="tooltip"><i class="fas fa-eye text-info font-16"></i></a>';
			   
			   return $btn;
			})
			->rawColumns(['image','category','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'image','name' => 'image', 'title' => __("Image"),'searchable'=>false,'orderable' => false],
				['data' => 'name','name' => 'name', 'title' => __("Name"),'searchable'=>true,'orderable' => true],
				['data' => 'category','name' => 'category.name', 'title' => __("Category"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('books.index');
			$data['dateTableTitle'] = "Books";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('books.create');
			return view('admin.pages.books.index',$data);
		
		}
    }

	public function create(Request $request)
    { 	
	    $data['category'] = Category::categoryList();
		$data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.books.create',$data);
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
			$image_name_1 = $this->imageUpload($request->file('image_1'),'books');
			$input['image_1'] = $image_name_1;
		}
		
		if ($request->hasfile('image_2')) {
			$image_name_2 = $this->imageUpload($request->file('image_2'),'books');
			$input['image_2'] = $image_name_2;
		}
		if ($request->hasfile('image_3')) {
			$image_name_3 = $this->imageUpload($request->file('image_3'),'books');
			$input['image_3'] = $image_name_3;
		}
		
		$books = Books::create($input);
		
		if($books){
			return redirect()->route('books.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}

    }
	
	public function edit($id)
    { 		
	    $id = Crypt::decrypt($id);
	    $data['category'] = Category::categoryList();
		$data['data'] = Books::find($id);
		$data['validator'] = JsValidator::make($this->validationRulesEdit);
		return view('admin.pages.books.edit',$data);
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
			$image_name_1 = $this->imageUpload($request->file('image_1'),'books');
			$input['image_1'] = $image_name_1;
		}
		
		if ($request->hasfile('image_2')) {
			$image_name_2 = $this->imageUpload($request->file('image_2'),'books');
			$input['image_2'] = $image_name_2;
		}
		if ($request->hasfile('image_3')) {
			$image_name_3 = $this->imageUpload($request->file('image_3'),'books');
			$input['image_3'] = $image_name_3;
		}
		
		$books = Books::where('created_by', $auth->id)->where('id',$id)->first();
		$books->update($input);
		
		if($books){
			return redirect()->route('books.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $data['data'] = Books::getRecordById($id);
        return view('admin.pages.books.show',$data);
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
	    $delete = Books::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
}
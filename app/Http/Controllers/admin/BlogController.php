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
use DB;
use Validator;
use App\Models\Blog;
use Auth;
use Hash;
use Crypt;



class BlogController extends Controller
{
	use ImageUpload;
	
	protected $validationRules = [
		'title' => 'required|string|max:255',
		'description' => 'required|max:5000',
		'image'=>'required|mimes:jpeg,jpg,png|max:20480'
    ]; 
	
	protected $validationRulesEdit = [
		'title' => 'required|string|max:255',
		'description' => 'required|max:5000',
		'image'=>'mimes:jpeg,jpg,png|max:20480'
    ]; 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:blog', ['only' => ['index','create','store','edit','update','destroy','show']]);
    }
	
	public function index(Request $request)
    {    
	    if ($request->ajax()) {
		  
			$data = Blog::getBlogList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('image', function ($row)
			{
			   return '<img class="rp-img" src="'.$row['image'].'">';
			})
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="' . route('blog.edit', Crypt::encrypt($row['id'])) . '" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			  
			   $delete_link = route('blog.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   $btn .= '<a title="Details" href="' . route('blog.show', Crypt::encrypt($row['id'])) . '" data-popup="tooltip"><i class="fas fa-eye text-info font-16"></i></a>';
			   
			   return $btn;
			})
			->rawColumns(['image','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'image','name' => 'image', 'title' => __("Image"),'searchable'=>false,'orderable' => false],
				['data' => 'title','name' => 'title', 'title' => __("Title"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('blog.index');
			$data['dateTableTitle'] = "Blog";
			$data['dataTableId'] = time();
			$data['createUrl'] = route('blog.create');
			return view('admin.pages.blog.index',$data);
		
		}
	
    }

	public function create(Request $request)
    { 	
	    $data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.blog.create',$data);
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
			$image_name = $this->imageUpload($request->file('image'),'blog');
			$input['image'] = $image_name;
		}
		
		$blog = Blog::create($input);
		
		if($blog){
			return redirect()->route('blog.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}

    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $data['data'] = Blog::find($id);
		 $data['validator'] = JsValidator::make($this->validationRulesEdit);
		 return view('admin.pages.blog.edit',$data);
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
			$image_name = $this->imageUpload($request->file('image'),'blog');
			$input['image'] = $image_name;
		}
        
		$blog = Blog::where('created_by', $auth->id)->where('id',$id)->first();
		$blog->update($input);
		
		if($blog){
			return redirect()->route('blog.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $data['data'] = Blog::find($id);
        return view('admin.pages.blog.show',$data);
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
	    $delete = Blog::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
}
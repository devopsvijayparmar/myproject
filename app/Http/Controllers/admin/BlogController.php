<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Blog;
use Auth;
use Hash;
use Crypt;


class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:blog', ['only' => ['index','create','store','edit','update','destroy','show']]);
		$this->data['title'] = 'Blog';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['blog'] = Blog::getBlogList();	
		return view('admin.blog.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('admin.blog.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'title' => 'required|max:255',
			'description' => 'required|max:5000',
			'image'=>'required|mimes:jpeg,jpg,png'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Blog')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/blog/', $name_1);
			$input['image'] = $name_1;
		}
		
		$blog = Blog::create($input);
		
		if($blog){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/blog');
		}else{
			Session::flash('error', "we're sorry,but something went wrong.Please try again");
			return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = Blog::getRecordById($id);
		 return view('admin.blog.edit',$this->data);
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'title' => 'required|max:255',
			'description' => 'required|max:5000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Blog')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/blog/', $name_1);
			$input['image'] = $name_1;
		}
        
		$blog = Blog::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($blog){
			$blog->update($input);
		}
		else{
			abort(401);
		}
		
		if($blog){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/blog');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = Blog::getRecordById($id);
        return view('admin.blog.show',$this->data);
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
		/*Record Delete*/
		$auth = Auth::user(); 	
	    $delete = Blog::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		
		return $delete;
    }
	
}
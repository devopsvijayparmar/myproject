<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Category;
use App\Helpers\SlugHelper;
use Auth;
use Hash;
use Crypt;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:category', ['only' => ['index','store','edit','update','destroy']]);
		$this->data['title'] = 'Category';
    }
	
	public function index(Request $request)
    {    
        $this->data['category'] = Category::categoryList();	
		return view('admin.category.index',$this->data);
    }

	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'category_error')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		$slug = SlugHelper::slug($request->name,'category',$auth->id);
		$input['slug'] = $slug;
		$category = Category::create($input);
		
		if($category){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/category');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    {
		$id = Crypt::decrypt($id);
		$this->data['data'] = Category::getRecordById($id);	
		return view('admin.category.edit',$this->data);
    }
	
	public function update(Request $request,$id)
    {
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'category_error')
                            ->withInput();
        } else {
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        
		$category = Category::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($category){
			$category->update($input);
		}
		else{
			abort(401);
		}
	
		if($category){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/category');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
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
		/*Record Delete*/
		$auth = Auth::user(); 	
	    $delete = Category::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		return $delete;
    }
	
}
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Brand;
use Auth;
use Hash;
use Crypt;


class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:brand', ['only' => ['index','store','edit','update','destroy']]);
		$this->data['title'] = 'Brand';
    }
	
	public function index(Request $request)
    {    
        $this->data['brand'] = Brand::categoryList();	
		return view('admin.brand.index',$this->data);
    }

	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
            return redirect("admin/brand")
                            ->withErrors($validator, 'category_error')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		$brand = Brand::create($input);
	
		if($brand){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/brand');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    {
		 $id = Crypt::decrypt($id);
		 $this->data['data'] = Brand::getRecordById($id);	
		 return view('admin.brand.edit',$this->data);
        
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
        
		
		$brand = Brand::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($brand){
			$brand->update($input);
		}
		else{
			abort(401);
		}
		
		if($brand){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/brand');
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
	    $delete = Brand::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		return $delete;
    }
	
}
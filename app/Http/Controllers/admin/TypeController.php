<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Type;
use App\Models\Category;
use Auth;
use Hash;
use Crypt;


class TypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:type', ['only' => ['index','store','edit','update','destroy']]);
		$this->data['title'] = 'Type';
    }
	
	public function index(Request $request)
    {    
        $this->data['type'] = Type::categoryList();	
		$this->data['category'] = Category::categoryList();
		return view('admin.type.index',$this->data);
    }

	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'category_fk' => 'required|max:11',
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
		
		$type = Type::create($input);
		
		if($type){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/type');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    {
		 $id = Crypt::decrypt($id);
		 $this->data['data'] = Type::getRecordById($id);
		 $this->data['category'] = Category::categoryList();		 
		 return view('admin.type.edit',$this->data);
    }
	
	public function update(Request $request,$id)
    {
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'category_fk' => 'required|max:11',
			'name' => 'required|max:255',
        ]);


        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'type_error')
                            ->withInput();
        } else {
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        
		$type = Type::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($type){
			$type->update($input);
		}
		else{
			abort(401);
		}
		
		if($type){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/type');
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
	    $delete = Type::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		
		return $delete;
    }
	
}
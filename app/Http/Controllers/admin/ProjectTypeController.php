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
use App\Models\ProjectType;
use Auth;
use Hash;
use Crypt;
use App\Helpers\SlugHelper;


class ProjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:project_type', ['only' => ['index','store','edit','update','destroy']]);
		$this->data['title'] = 'Project Type';
    }
	
	public function index(Request $request)
    {    
        $this->data['type'] = ProjectType::projectTypeList();	
		return view('admin.project_type.index',$this->data);
    }

	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
        ]);

        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'project_type_error')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		$slug = SlugHelper::slug($request->name,'project_type',$auth->id);
		$input['slug'] = $slug;
		
		$project_type = ProjectType::create($input);
		
		if($project_type){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/project_type');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    {
		 $id = Crypt::decrypt($id);
		 $this->data['data'] = ProjectType::getRecordById($id);
		 return view('admin.project_type.edit',$this->data);
    }
	
	public function update(Request $request,$id)
    {
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
        ]);


        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'project_type_error')
                            ->withInput();
        } else {
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        
		$project_type = ProjectType::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($project_type){
			$project_type->update($input);
		}
		else{
			abort(401);
		}
		
		if($project_type){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/project_type');
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
	    $delete = ProjectType::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		return $delete;
    }
	
}
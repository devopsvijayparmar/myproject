<?php

namespace App\Http\Controllers\super_admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\WebTemplates;
use App\Helpers\SlugHelper;
use App\Models\front\Sites;
use Auth;
use Hash;
use Crypt;


class WebTemplatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->data['title'] = 'Web Templates';
    }
	
	public function index(Request $request)
    {    
	   
        $this->data['web_templates'] = WebTemplates::getlist();	
		return view('super_admin.front.web_templates.index',$this->data);
    }

	public function create(Request $request)
    { 	
	    $this->data['sites'] = Sites::getSites(); 
		return view('super_admin.front.web_templates.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'title' => 'required',
			'site_name' => 'required',
			'description' => 'required',
			'image'=>'required'
			'image_1'=>'required'
        ]);

        if ($validator->fails()) {
            return redirect("super-admin/web-templates/create")
                            ->withErrors($validator, 'WebTemplates')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['slug'] = SlugHelper::slug($request->title,'front_web_templates');
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/front/web_templates/', $name_1);
			$input['image'] = $name_1;
		}
		
		if ($request->hasfile('image_1')) {
			$file_1 = $request->file('image_1');
			$name_2 = $file_1->getClientOriginalName();
			$name_2 = str_replace(" ", "", date("Ymdhis")+1 . $name_2);
			$file_1->move(public_path() . '/uploads/front/web_templates/', $name_2);
			$input['image_1'] = $name_2;
		}
		
		$web_templates = WebTemplates::create($input);
		
		if($web_templates){
			Session::flash('success', 'Successfully Inserted');
			return redirect('super-admin/web-templates');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	    $id = Crypt::decrypt($id);
		$this->data['data'] = WebTemplates::find($id);
		$this->data['sites'] = Sites::getSites(); 
		return view('super_admin.front.web_templates.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'title' => 'required',
			'site_name' => 'required',
			'description' => 'required',
			'image'=>'required'
			'image_1'=>'required'
        ]);

        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'WebTemplates')
                            ->withInput();
        } 
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/front/web_templates/', $name_1);
			$input['image'] = $name_1;
		}
        
		if ($request->hasfile('image_1')) {
			$file_1 = $request->file('image_1');
			$name_2 = $file_1->getClientOriginalName();
			$name_2 = str_replace(" ", "", date("Ymdhis")+1 . $name_2);
			$file_1->move(public_path() . '/uploads/front/web_templates/', $name_2);
			$input['image_1'] = $name_2;
		}
		
		
		$web_templates = WebTemplates::find($id);
		$web_templates->update($input);
		
		if($web_templates){
			Session::flash('success', 'Successfully Updated');
			return redirect('super-admin/web-templates');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = WebTemplates::find($id);
        return view('super_admin.front.web_templates.show',$this->data);
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
	    $delete = WebTemplates::where('id', $id)->delete();
		return $delete;
    }
	
}
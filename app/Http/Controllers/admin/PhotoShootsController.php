<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
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
	 
	function __construct()
    {
		$this->middleware('permission:photo_shoots', ['only' => ['index','create','store','edit','update','show','destroy']]);
		$this->data['title'] = 'Photo Shoots';
    }
	
	public function index(Request $request)
    {    
        $this->data['photoshoots'] = PhotoShoots::getPhotoShootsList();	
		return view('admin.photo_shoots.index',$this->data);
    }

	public function create(Request $request)
    { 	
	    $this->data['category'] = Category::categoryList();
		return view('admin.photo_shoots.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'category_fk' => 'required|max:11',
			'name' => 'required|max:255',
			'image'=>'required|mimes:jpeg,jpg,png'
        ]);

        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'PhotoShoots')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
        $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name = $file->getClientOriginalName();
			$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
			$file->move(public_path() . '/uploads/photo_shoots/', $name);
			$input['image'] = $name;
		}
		
		$photoshoots = PhotoShoots::create($input);
	
		if($photoshoots){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/photo-shoots');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
	     $this->data['category'] = Category::categoryList();
		 $this->data['data'] = PhotoShoots::getRecordById($id);
		 return view('admin.photo_shoots.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'category_fk' => 'required|max:11',
			'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'PhotoShoots')
                            ->withInput();
        } else {
			
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        				
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name = $file->getClientOriginalName();
			$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
			$file->move(public_path() . '/uploads/photo_shoots/', $name);
			$input['image'] = $name;
		}
		
		$photoshoots = PhotoShoots::where('created_by', Auth::user()->id)->where('id',$id)->first();
		
		if($photoshoots){
			$photoshoots->update($input);
		}
		else{
			abort(401);
		}
	  
		if($photoshoots){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/photo-shoots');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = PhotoShoots::getRecordById($id);
        return view('admin.photo_shoots.show',$this->data);
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
	    $delete = PhotoShoots::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		return $delete;
    }
	
}
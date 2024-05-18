<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Lang;
use JsValidator;
use DataTables;
use DB;
use Validator;
use App\Models\PageBuilder;
use App\Traits\PurchasePlan;
use App\Models\User;
use Auth;
use Hash;
use Crypt;


class PageBuilderController extends Controller
{
	use PurchasePlan;
	
	protected $validationRules = [
		'title' => 'required|string|max:255',
		'url_name' => 'required|alpha_num|min:4|max:255',
		'description' => 'required|min:1000|max:500000',
    ]; 
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:page_builder', ['only' => ['index','create','store','edit','update','destroy','show']]);
    }
	
	public function index(Request $request)
    {    
		$data['page'] = PageBuilder::getPageBuilderList();
		return view('admin.pages.page_builder.index',$data);
    }
	
	public function create(Request $request)
    { 	
	    $data['auth'] = Auth::user();
	    $data['validator'] = JsValidator::make($this->validationRules);
		return view('admin.pages.page_builder.create',$data);
    }
	
	public function store(Request $request)
    {
		
		$page_builder_count = PageBuilder::getPageBuilderCount(); 
		if($page_builder_count >= $this->userPurchasePlan()->no_of_page_builder){
			return redirect()->route('page-builder.index')->with('error', Lang::get('messages.limit'));
		}
		$auth = Auth::user(); 
		$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        } 
		
		$last_data = PageBuilder::where('created_by',$auth->id)->count();
		$reposition = 1;
		if($last_data > 0){
			$reposition = $last_data + 1;
		}
 
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $auth->id;
		$input['reposition'] = $reposition;
		$input['url'] = 'http://'.$auth->title.'.'.config('enum.website').'/page/'.$request->url_name;
		
		$page_builder = PageBuilder::create($input);
		
		$count = PageBuilder::getPageBuilderCount();
		$this->updatePurchasePlan('used_page_builder',$count);
		
		if($page_builder){
			return redirect()->route('page-builder.index')->with('success', Lang::get('messages.created'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}

    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $data['auth'] = Auth::user();
		 $data['data'] = PageBuilder::find($id);
		 $data['validator'] = JsValidator::make($this->validationRules);
		 return view('admin.pages.page_builder.edit',$data);
    }
	
	public function update(Request $request,$id)
    {
		 
		$id = Crypt::decrypt($id);
		$auth = Auth::user();
    	$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			return redirect()->back()->withErrors($validator)->withInput();
        }  
			
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
		$input['url'] = 'http://'.$auth->title.'.'.config('enum.website').'/page/'.$request->url_name;
		
		$page_builder = PageBuilder::where('created_by', $auth->id)->where('id',$id)->first();
		
		if($page_builder){
			$page_builder->update($input);
			return redirect()->route('page-builder.index')->with('success', Lang::get('messages.updated'));
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
		
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $data['data'] = PageBuilder::find($id);
        return view('admin.pages.page_builder.show',$data);
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
	    $delete = PageBuilder::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
	public function changeMenuName(Request $request)
    {
		$auth = Auth::user();
    	$user = User::find($auth->id);
		$user->update(['page_name'=>$request->page_name]);
		
		if($user){
			return true;
		}else{
			return false;
		}
		
    }
	
	public function reposition(Request $request)
    {
		$repostion = $request->id;
		$i=1;
		foreach($repostion as $data)
		{
			$update_array = array(
			'reposition'=>$i,
			);
			$where = array('id'=>$data);
			$update =  PageBuilder::where($where)->update($update_array);
			$i++;
		}
		return 1;
    }
	
}
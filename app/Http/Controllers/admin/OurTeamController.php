<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Category;
use App\Models\OurTeam;
use Auth;
use Hash;
use Crypt;


class OurTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:our_team', ['only' => ['index','create','store','edit','update','show','destroy']]);
		$this->data['title'] = 'Our Team';
    }
	
	public function index(Request $request)
    {    
        $this->data['our_team'] = OurTeam::ourteamlist();	
		return view('admin.our_team.index',$this->data);
    }

	public function create(Request $request)
    { 	
		return view('admin.our_team.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'email' => 'required|max:255|email',
			'mobile' => 'required|digits:10',
			'image'=>'required|mimes:jpeg,jpg,png'
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Our_Team')
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
			$file->move(public_path() . '/uploads/our_team/', $name_1);
			$input['image'] = $name_1;
		}
		
		$ourteam = OurTeam::create($input);
		
		if($ourteam){
			Session::flash('success', 'Successfully Inserted');
			return redirect('admin/our-team');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    { 		
	     $id = Crypt::decrypt($id);
		 $this->data['data'] = OurTeam::getRecordById($id);
		 return view('admin.our_team.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		 $request_id = $id;
		 $id = Crypt::decrypt($id);
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255',
			'mobile' => 'required|digits:10',
        ]);


        if ($validator->fails()) {
           return redirect()->back()
                            ->withErrors($validator, 'Our_Team')
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
			$file->move(public_path() . '/uploads/our_team/', $name_1);
			$input['image'] = $name_1;
		}

		$ourteam = OurTeam::where('created_by', Auth::user()->id)->where('id',$id)->first();
		if($ourteam){
			$ourteam->update($input);
		}
		else{
			abort(401);
		}
		
		if($ourteam){
			Session::flash('success', 'Successfully Updated');
			return redirect('admin/our-team');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}
		}
    }
	
	public function show($id)
    {    
	    $id = Crypt::decrypt($id);
	    $this->data['data'] = OurTeam::getRecordById($id);
        return view('admin.our_team.show',$this->data);
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
	    $delete = OurTeam::where('id', $id)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		
		return $delete;
    }
	
}
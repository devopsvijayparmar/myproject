<?php

namespace App\Http\Controllers\super_admin\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\front\Slider;
use Auth;
use Hash;
use Crypt;


class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->data['title'] = 'Slider';
    }
	
	public function index(Request $request)
    {    
	   
		$this->data['slider'] = Slider::all();	
		return view('super_admin.front.slider.index',$this->data);
    }
	
	public function create(Request $request)
    {    
		return view('super_admin.front.slider.create',$this->data);
    }
	
	public function store(Request $request)
    {
    	 $validator = Validator::make($request->all(), [
			'image' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'Slider')
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
			$file->move(public_path() . '/uploads/slider/', $name);
			$input['image'] = $name;
		}
		
		$slider = Slider::create($input);
		
		if($slider){
			Session::flash('success', 'Successfully Inserted');
			return redirect('super-admin/admin-slider');
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function edit($id)
    {
		 $id = Crypt::decrypt($id);
		 $this->data['data'] = Slider::find($id);	
		 return view('super_admin.front.slider.edit',$this->data);
        
    }
	
	public function update(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
    	
		$auth = Auth::user();
		$input = $request->all();
		$input['updated_at'] = date('Y-m-d H:i:s');
		$input['updated_by'] = $auth->id;
        
		
		if ($request->hasfile('image')) {
			$file = $request->file('image');
			$name = $file->getClientOriginalName();
			$name = str_replace(" ", "", date("Ymdhis")+1 . $name);
			$file->move(public_path() . '/uploads/slider/', $name);
			$input['image'] = $name;
		}
		
		$slider = Slider::find($id);
		$slider->update($input);
	
		if($slider){
			Session::flash('success', 'Successfully Updated');
			return redirect('super-admin/admin-slider');
		}else{
			
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
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
	    $update = Slider::where('id', $id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		return $update;
    }
	
}
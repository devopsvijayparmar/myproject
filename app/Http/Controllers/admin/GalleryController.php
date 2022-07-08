<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Gallery;
use Auth;
use Hash;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:gallery', ['only' => ['index','create','store','edit','update','show','destroy']]);
		$this->data['title'] = 'Service';
    }
	
	public function index(Request $request)
    {    
	    $this->data['gallery'] = Gallery::getRecordById();
	    $this->data['galleryarray'] = Gallery::getRecordByIdArray();
		return view('admin.gallery.index',$this->data);
    }

	
	public function update(Request $request)
    {
		$auth = Auth::user();
		if($request->hasFile('file')){
            $file = $request->file('file');
			$name_1 = $file->getClientOriginalName();
			$name_1 = str_replace(" ", "", date("Ymdhis")+1 . $name_1);
			$file->move(public_path() . '/uploads/gallery/', $name_1);
			$url = url('/uploads/gallery/'.$name_1);
        }
		
		$input = array(
		'image' => $name_1,
		'created_by' => $auth->id,
		'updated_at' => date('Y-m-d H:i:s'),
		'created_at' => date('Y-m-d H:i:s')
		);
		$gallery = Gallery::create($input);
		
		return response()->json(['status' => true, 'url' => $url]);
    }
	
	public function removeImage(Request $request)
    {
		
		$auth = Auth::user(); 	
	    $delete = Gallery::where('image', $request->fileurl)->where('created_by', Auth::user()->id)->update(['deleted_by' => $auth->id,'deleted_at'=>date('Y-m-d H:i:s')]);
		
		return $delete;
    }
	
	
	
	
	
}
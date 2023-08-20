<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Gallery;
use App\Traits\ImageUpload;
use Auth;
use Hash;
use DataTables;
use Crypt;


class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	use ImageUpload; 
	 
	protected $validationRules = [
		'file'=>'required|mimes:jpeg,jpg,png,svg,PNG|max:20480'
    ];  
	 
	 
	function __construct()
    {
		$this->middleware('permission:gallery', ['only' => ['index','update','removeImage']]);
    }
	
	public function index(Request $request)
    {    
	    $data['gallery'] = Gallery::getGalleryList();
	    $data['galleryarray'] = Gallery::getGalleryImageArray();
		return view('admin.pages.gallery.index',$data);
    }

	
	public function update(Request $request)
    {
		$gallery = Gallery::getGalleryCount();
		
		if($gallery == 24){
			Session::flash('error', __('messages.limit'));
			return response()->json(['status' => false, 'url' => '']);
		}
		$auth = Auth::user();
		
		$input = $request->all();
    	$validator = Validator::make($input, $this->validationRules);
  
        if($validator->fails()) {
			Session::flash('error', __('messages.error'));
			return response()->json(['status' => false, 'url' => '']);
        } 
		
		if($request->hasFile('file')){
			
			$image_name = $this->imageUpload($request->file('file'),'gallery');
			$url = asset('/uploads/gallery/'.$image_name);
        }
		
		$input = array(
		'image' => $image_name,
		'created_by' => $auth->id,
		'updated_at' => date('Y-m-d H:i:s'),
		'created_at' => date('Y-m-d H:i:s')
		);
		$gallery = Gallery::create($input);
		
		return response()->json(['status' => true, 'url' => $url]);
    }
	
	
	public function show(Request $request)
    {   
	
	
	
	    if ($request->ajax()) {
		  
			$data = Gallery::getGalleryList();
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('image', function ($row)
			{
			   return '<a target="_blank" class="preview" href="'.$row->image_path.'" rel="prettyPhoto"><img class="rp-img" src="'.$row->image_path.'"></a>';
			})
			->editColumn('action', function ($row)
			{
			   
			   $delete_link = route('gallery.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn = '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			   
			   
			   return $btn;
			})
			->rawColumns(['image','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'image','name' => 'image', 'title' => __("Image"),'searchable'=>false,'orderable' => false],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('gallery.show',1);
			$data['dateTableTitle'] = "List View";
			$data['dataTableId'] = time();
			return view('admin.pages.gallery.show',$data);
		
		}
	
    }
	
	public function removeImage(Request $request)
    {
		$auth = Auth::user(); 	
	    $delete = Gallery::where('image', $request->fileurl)->where('created_by', Auth::user()->id)->delete();
		return $delete;
    }
	
	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		$auth = Auth::user(); 	
	    $delete = Gallery::where('created_by', $auth->id)->where('id', $id)->delete();
		return $delete;
    }
	
	
	
	
	
}
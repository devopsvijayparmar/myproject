<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\Blog;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Mobile;
use App\Models\Sitesettings;
use DataTables;
use Auth;
use Hash;
use Crypt;


class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('permission:orders', ['only' => ['index','show']]);
    }
	
	public function index(Request $request)
    {   
	   
	
	   if ($request->ajax()) {
		  
			$data = Orders::getOrderslist();
			return DataTables::of($data)
			->addIndexColumn()
			->editColumn('order_id', function ($row)
			{
				return '<a title="Details" class="mr-2" href="'.route('orders.show', Crypt::encrypt($row['id'])).'" data-popup="tooltip">'.$row->order_id.'</a>';
			})
			->editColumn('image', function ($row)
			{
				if($row->product_type == 'product'){
					return '<img class="rp-img" src="'.$row->product_image.'">';
				}else{
					return '<img class="rp-img" src="'.$row->mobile_image.'">';
				}
			})
			
			->editColumn('status', function ($row)
			{
			   return '<span class="badge badge-'.$row->class_badge.'">'.$row->status_badge.'</span>';
			})
			
			->editColumn('action', function ($row)
			{
			   $btn = '<a title="Edit" class="mr-2" href="'.route('orders.edit', Crypt::encrypt($row['id'])).'" class="mr-2"><i class="fas fa-edit text-info font-16"></i></a>';
			   
			   $btn .= '<a title="Details" class="mr-2" href="'.route('orders.show', Crypt::encrypt($row['id'])).'" data-popup="tooltip"><i class="fas fa-eye text-info font-16"></i></a>';
			   
			   $btn .= $row->change_status;
			   
			   $delete_link = route('orders.destroy', Crypt::encrypt($row['id']));
			   $delete_link = "'" . $delete_link . "'";
			   $btn .= '<a class="mr-2" title="Delete" href="javascript:void(0);" onclick="deleteRecord('.$delete_link.');" data-popup="tooltip"><i class="fas fa-trash-alt text-info font-16"></i></a>';
			  
			   return $btn;
			})
			->rawColumns(['order_id','status','image','action'])
			->make(true);

		} else {
		
		    
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'image','name' => 'image', 'title' => __("Image"),'searchable'=>false,'orderable' => false],
				['data' => 'order_id','name' => 'order_id', 'title' => __("Order Id"),'searchable'=>true,'orderable' => true],
				['data' => 'product_name','name' => 'product_name', 'title' => __("Product Name"),'searchable'=>true,'orderable' => true],
				['data' => 'quantity','name' => 'quantity', 'title' => __("Quantity"),'searchable'=>true,'orderable' => true],
				['data' => 'name','name' => 'name', 'title' => __("Customer Name"),'searchable'=>true,'orderable' => true],
				['data' => 'mobile','name' => 'mobile', 'title' => __("Customer Mobile"),'searchable'=>true,'orderable' => true],
				['data' => 'email','name' => 'email', 'title' => __("Customer Email"),'searchable'=>true,'orderable' => true],
				['data' => 'status','name' => 'status', 'title' => __("Status"),'searchable'=>true,'orderable' => true],
				['data' => 'action', 'name' => 'action', 'title' => "Action", 'searchable' => false, 'orderable' => false]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('orders.index');
			$data['dateTableTitle'] = "Orders";
			$data['dataTableId'] = time();
			return view('admin.pages.orders.index',$data);
		
		}
	
    }
	public function show(Request $request,$id)
    {    
	    $id = Crypt::decrypt($id);
        $data['order'] = Orders::getRecordById($id);
        $data['site_setting'] = Sitesettings::getRecordByUserId();
		return view('admin.pages.orders.show',$data);
    }
	
	
	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		$auth = Auth::user(); 	
		if(isset($request->status)){
			$update = Orders::where('id',$id)->update(['status'=>$request->status]);
		}else{
			 $update = Orders::where('id', $id)->delete();
		}
		return $update;
    }


	
}
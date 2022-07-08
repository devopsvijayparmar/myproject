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
use App\Models\MobileOrders;
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
		$this->middleware('permission:mobile_orders', ['only' => ['mobile','mobiles_show']]);
		$this->data['title'] = 'Orders';
    }
	
	public function index(Request $request)
    {    
        $this->data['orders'] = Orders::orderslist();	
		return view('admin.orders.index',$this->data);
    }
	public function show(Request $request,$id)
    {    
	    $id = Crypt::decrypt($id);
        $this->data['order'] = Orders::getRecordById($id);	
        $this->data['product'] = Products::getRecordById($this->data['order']->product_fk);	
		return view('admin.orders.show',$this->data);
    }
	
	public function mobile(Request $request)
    {    
        $this->data['orders'] = Orders::orderslistformobile();	
		return view('admin.mobile_orders.index',$this->data);
    }
	public function mobiles_show(Request $request,$id)
    {    
	    $id = Crypt::decrypt($id);
        $this->data['order'] = Orders::getRecordById($id);	
        $this->data['product'] = Mobile::getRecordById($this->data['order']->product_fk);	
		return view('admin.mobile_orders.show',$this->data);
    }
	
	public function destroy(Request $request,$id)
    {
		$id = Crypt::decrypt($id);
		/*Record Delete*/
		$auth = Auth::user(); 	
		$delete = Orders::where('id', $id)->where('user_id', Auth::user()->id)->update(['status' => $request->status]);
		
		Session::flash('success', 'Successfully '.$request->smg);
		return $delete;
    }


	
}
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\Lang;
use Validator;
use App\Models\PurchasePlan;
use App\Models\PurchasePlanHistory;
use App\Models\front\TopUp;
use Auth;
use Hash;
use Crypt;
use DataTables;


class PurchasePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
	     $this->middleware('permission:purchase_plan', ['only' => ['index','upgradePlan']]);
    }
	
	public function index(Request $request)
    {    
	    $user = Auth::user();
	    
		if ($request->ajax()) {
		  
		    $data = PurchasePlanHistory::userPurchasePlan($user->id);
			return DataTables::of($data)
			->addIndexColumn()
			
			->editColumn('price', function ($row)
			{
				if($row->price_text) { $price = $row->price_text; } elseif($row->price) { $price = $row->price; } else $price = '-';
			  
			   return $price;
			})
			->editColumn('created_at', function ($row)
			{
			   return date('d-m-Y',strtotime($row->created_at));
			})
			
			->editColumn('page_builder', function ($row)
			{
				if($row->page_builder) { $pagebuilder = $row->page_builder.' - '.$row->no_of_page_builder; } elseif($row->no_of_page_builder) { $pagebuilder = $row->no_of_page_builder; } else $pagebuilder= '-';
			  
			   return $pagebuilder;
			})
			
			
			->rawColumns(['created_at'])
			->make(true);

		} else {
		
			$columns = [
				['data' => 'DT_RowIndex', 'name' => 'id', 'title' => "Id"],
				['data' => 'plan_name','name' => 'plan_name', 'title' => __("Plan Name"),'searchable'=>true,'orderable' => true],
				['data' => 'price','name' => 'price', 'title' => __("Price(USD)"),'searchable'=>true,'orderable' => true],
				['data' => 'no_of_emails','name' => 'no_of_emails', 'title' => __("Emails"),'searchable'=>true,'orderable' => true],
				['data' => 'page_builder','name' => 'page_builder', 'title' => __("Page Builder"),'searchable'=>true,'orderable' => true],
				['data' => 'no_of_landing_page','name' => 'no_of_landing_page', 'title' => __("Landing Page"),'searchable'=>true,'orderable' => true],
				['data' => 'no_of_address_book','name' => 'no_of_address_book', 'title' => __("Address Book"),'searchable'=>true,'orderable' => true],
				['data' => 'start_date','name' => 'start_date', 'title' => __("Start Date"),'searchable'=>true,'orderable' => true],
				['data' => 'expiry_date','name' => 'expiry_date', 'title' => __("Expiry Date"),'searchable'=>true,'orderable' => true],
				['data' => 'duration','name' => 'duration', 'title' => __("Duration"),'searchable'=>true,'orderable' => true],
				['data' => 'created_at','name' => 'created_at', 'title' => __("Date"),'searchable'=>true,'orderable' => true]];
		  
			$data['dateTableFields'] = $columns;
			$data['dateTableUrl'] = route('purchase-plan');
			$data['dateTableTitle'] = "Purchase Plan";
			$data['dataTableId'] = time();
			$data['purchaseplan'] = PurchasePlan::userPurchasePlan($user->id);
			$data['topup'] = TopUp::find(1);
			return view('admin.pages.purchase_plan.index',$data);
		
		}
		
		return view('admin.pages.purchase_plan.index',$data);
    }
	
	
	public function upgradePlan(Request $request,$type)
    {    
	    $auth = Auth::user();
		$purchaseplan = PurchasePlan::userPurchasePlan($auth->id);
		$topup = TopUp::find(1);
		if($purchaseplan){
			
			$input = array('updated_at'=>date('Y-m-d H:i:s'));
			
			if($type == 'emails'){
				$input['no_of_emails'] = $topup->no_of_emails + (int)$purchaseplan->no_of_emails;
				$price = $topup->no_of_emails_price;
			}elseif($type == 'landingpage'){
				$input['no_of_landing_page'] = (int)$topup->no_of_landing_page + (int)$purchaseplan->no_of_landing_page;
				$price = $topup->no_of_landing_page_price;
			}
			elseif($type == 'pagebuilder'){
				$input['no_of_page_builder'] = (int)$topup->no_of_page_builder + (int)$purchaseplan->no_of_page_builder;
				$price = $topup->no_of_page_builder_price;
			}else{
				$input['no_of_address_book'] = (int)$topup->no_of_address_book + (int)$purchaseplan->no_of_address_book;
				$price = $topup->no_of_address_book_price;
			}
			$purchaseplan->update($input);
			
			$input['created_at'] = date('Y-m-d H:i:s');
			$input['created_by'] = $auth->id;
			$input['user_id'] = $auth->id;
			$input['plan_name'] = $topup->plan_name;
			$input['price'] = $price;
			/*Purchase Order History*/ 
			if($type == 'emails'){
				$input['no_of_emails'] = 0;
				$input['no_of_emails'] = $topup->no_of_emails;
				$price = $topup->no_of_emails_price;
			}elseif($type == 'landingpage'){
				$input['no_of_landing_page'] = 0;
				$input['no_of_landing_page'] = (int)$topup->no_of_landing_page;
				$price = $topup->no_of_landing_page_price;
			}
			elseif($type == 'pagebuilder'){
				$input['no_of_page_builder'] = 0;
				$input['no_of_page_builder'] = (int)$topup->no_of_page_builder;
				$price = $topup->no_of_page_builder_price;
			}else{
				$input['no_of_address_book'] =0;
				$input['no_of_address_book'] = (int)$topup->no_of_address_book;
				$price = $topup->no_of_address_book_price;
			}
			$purchase_plan = PurchasePlanHistory::create($input);
			/*Purchase Order History*/ 
			
			return redirect()->back()->with('success', Lang::get('messages.created'));
			
			
		}else{
			return redirect()->back()->with('error', Lang::get('messages.error'));
		}
	   
    }

	
	
}
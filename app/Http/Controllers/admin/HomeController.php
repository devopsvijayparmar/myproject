<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PurchasePlan;
use App\Models\Orders;
use App\Models\Products;
use App\Models\Projects;
use App\Models\Blog;
use App\Models\Mobile;
use App\Models\PurchasePlanHistory;
use App\Models\front\TopUp;
use Illuminate\Support\Facades\Lang;
use DataTables;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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
			$data['dateTableUrl'] = route('home');
			$data['dateTableTitle'] = "Dashboard";
			$data['dataTableId'] = time();
			$data['purchaseplan'] = PurchasePlan::userPurchasePlan($user->id);
			$data['orders'] = Orders::takeOrders();
			$data['orders_count'] = Orders::orderCount();
			$data['products_count'] = Products::ProductCount();
			$data['projects_count'] = Projects::ProjectCount();
			$data['mobiles_count'] = Mobile::mobileCount();
			$data['blogs_count'] = Blog::getBlogList()->count();
			$data['topup'] = TopUp::find(1);
			return view('admin.pages.home',$data);
		
		}
		
    }
}

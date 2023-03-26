<?php

namespace App\Http\Controllers\websites;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use App\Models\User;
use App\Models\Products;
use App\Models\Category;
use App\Models\Slider;
use App\Models\Sitesettings;
use App\Models\ContactUs;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\Blog;
use App\Models\AboutUs;
use App\Models\FrontContactUs;
use App\Models\PhotoShoots;
use App\Models\Electric;
use App\Models\Philosophy;
use App\Models\OurTeam;
use App\Models\Mobile;
use App\Models\Projects;
use App\Models\ProjectType;
use App\Models\Promotion;
use App\Models\Orders;
use App\Models\Plan;
use App\Models\MobileOrders;
use App\Models\Event;
use Auth;
use Hash;
use Crypt;


class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
	 
	function __construct()
    {
		$this->middleware('CheckTitle');
		$this->data['title'] = 'Home';
    }
	
	public function index(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['slider'] = Slider::getSlidersByUserId($user->id);
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['service'] = Service::takeRecordForWebsite($user->id,4);
	    $this->data['service6'] = Service::takeRecordForWebsite($user->id,6);
	    $this->data['product'] = Products::takeRecordForWebsite($user->id,6);
	    $this->data['product8'] = Products::takeRecordForWebsite($user->id,8);
	    $this->data['projects'] = Projects::takeRecordForWebsite($user->id,6);
	    $this->data['mobile'] = Mobile::takeRecordForWebsite($user->id,12);
	    $this->data['electric'] = Electric::takeRecordForWebsite($user->id,12);
	    $this->data['blog'] = Blog::takeRecordForWebsite($user->id,6);
	    $this->data['photoshoots'] = PhotoShoots::takeRecordForWebsite($user->id,12);
	    $this->data['category'] = Category::getCategoryForWebsite($user->id);
	    $this->data['projecttype'] = ProjectType::getProjectTypeForWebsite($user->id);
	    $this->data['ourteam'] = OurTeam::takeRecordForWebsite($user->id,8);
		$this->data['gallery'] = Gallery::takeRecordForWebsite($user->id,6);
		$this->data['gallery8'] = Gallery::takeRecordForWebsite($user->id,8);
		$this->data['event'] = Event::takeRecordForWebsite($user->id,6);
		$this->data['plan'] = Plan::takeRecordForWebsite($user->id,6);
		return view('websites.'.$user->site_name.'.index',$this->data);
		
    }
	
	public function about_us(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['about_us'] = AboutUs::getRecordForWebsite($user->id);
		return view('websites.'.$user->site_name.'.about_us',$this->data);
		
    }
	
	public function service(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['service'] = Service::getRecordForWebsite($user->id,8);
		return view('websites.'.$user->site_name.'.service',$this->data);
    }
	
	public function gallery(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['gallery'] = Gallery::getRecordForWebsite($user->id,16);
		return view('websites.'.$user->site_name.'.gallery',$this->data);
    }
	
	public function blog(Request $request, $title)
    {     
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['blog'] = Blog::getRecordForWebsite($user->id,12);
		return view('websites.'.$user->site_name.'.blog',$this->data);
    }
	
	public function single_blog(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['blog'] = Blog::find($id);
		$this->data['bloglast3'] = Blog::takeRecordForWebsite($user->id,3);
		return view('websites.'.$user->site_name.'.single_blog',$this->data);
    }
	
	public function products(Request $request, $title,$cat)
    {   
     	$user = User::getRecordByTitle($title);
	    $this->data['search'] = $request->search;
	    $this->data['title'] = $title;
	    $this->data['cat'] = $cat;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		$this->data['products'] = Products::getRecordForWebsite($user->id,$cat,$request->search,12);
		$this->data['mobile'] = Mobile::getRecordForWebsite($user->id,$cat,$request->search,20);
		$this->data['electric'] = Electric::getRecordForWebsite($user->id,$cat,$request->search,20);
		$this->data['category'] = Category::getCategoryByUserId($user->id);
		return view('websites.'.$user->site_name.'.products',$this->data);
    }
	
	public function projects(Request $request, $title,$cat)
    {   
     	$user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['cat'] = $cat;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		$this->data['projects'] = Projects::getRecordForWebsite($user->id,$cat,20);
		$this->data['projecttype'] = ProjectType::getProjectTypeForWebsite($user->id);
		return view('websites.'.$user->site_name.'.projects',$this->data);
    }
	

	public function single_product(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		$this->data['product'] = Products::getRecordById($id);
		$this->data['products'] = Products::getRecordForWebsiteByCategory($user->id,$this->data['product']->category_name,$id,12);
		$this->data['category'] = Category::getCategoryByUserId($user->id);
		return view('websites.'.$user->site_name.'.single_product',$this->data);
    }
	
	public function single_project(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		$this->data['project'] = Projects::getRecordById($id);
		return view('websites.'.$user->site_name.'.single_project',$this->data);
    }
	
	public function single_electric(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		$this->data['electric'] = Electric::getRecordById($id);
		$this->data['electrics'] = Electric::getRecordForWebsiteByCategory($user->id,$this->data['electric']->category_name,12);
		$this->data['category'] = Category::getCategoryByUserId($user->id);
		return view('websites.'.$user->site_name.'.single_product',$this->data);
    }
	
	public function single_mobile(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		$this->data['mobile'] = Mobile::getRecordById($id);
		$this->data['mobiles'] = Mobile::getRecordForWebsiteByCategory($user->id,$this->data['mobile']->category_name,12);
		$this->data['category'] = Category::getCategoryByUserId($user->id);
		return view('websites.'.$user->site_name.'.single_product',$this->data);
    }
	
	public function contact_us(Request $request, $title)
    {  
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		return view('websites.'.$user->site_name.'.contact_us',$this->data);
    }
	
	public function contact_us_store(Request $request,$title)
    {
    	$validator = Validator::make($request->all(), [
			'name' => 'required|string|regex:/^[A-Za-z0-9\-\s]+$/|min:2|max:255',
			'email' => 'required|unique:users|email|regex:/(.+)@(.+)\.(.+)/i|string|max:255',
			'mobile' => 'required|max:12',
			'message' => 'required|max:5000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator, 'contact_us_error')
                            ->withInput();
        } 
			
        $input = $request->all();
		$user = User::getRecordByTitle($title);
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $user->id;
		
		$inser_id = FrontContactUs::create($input);
		
		if($inser_id){
			return redirect()->back()->with('success', 'Our Customer Service Representative will be in touch shortly');
		}else{
			return redirect()->back()->with('error', "we`re sorry,but something went wrong.Please try again");
		}

    }
	
	public function photo_shoots(Request $request, $title,$cat)
    {   
     	$user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['cat'] = $cat;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		$this->data['photoshoots'] = PhotoShoots::getRecordForWebsiteByCategory($user->id,$cat,20);
		$this->data['category'] = Category::getCategoryByUserId($user->id);
		return view('websites.'.$user->site_name.'.photo_shoots',$this->data);
    }
	
	public function ourteam(Request $request, $title)
    {   
     	$user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		$this->data['ourteam'] = OurTeam::getOurTeamListForIndex($user->id,20);
		return view('websites.'.$user->site_name.'.our_teams',$this->data);
    }

    public function philosophy(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['philosophy'] = Philosophy::getRecordByUserId($user->id);
		return view('websites.'.$user->site_name.'.philosophy',$this->data);
    }
	
	public function promotion(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['promotion'] = Promotion::getRecordByUserId($user->id);
		return view('websites.'.$user->site_name.'.promotion',$this->data);
		
    }
	
	public function addresses(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['quantity'] = $request->quantity;
	    $this->data['product_id'] = $request->product_id;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
		return view('websites.'.$user->site_name.'.addresses',$this->data);
    }
	
	public function order(Request $request,$title)
    {
    	$validator = Validator::make($request->all(), [
			'name' => 'required|string|regex:/^[A-Za-z0-9\-\s]+$/|min:2|max:255',
			'mobile' => 'min:10|numeric',	
			'email' => 'required|unique:users|email|regex:/(.+)@(.+)\.(.+)/i|string|max:255',
			'pincode' => 'required|max:255',
			'company' => 'required|max:255',
			'area' => 'required|min:5|max:255',
			'landmark' => 'required|min:5|max:255',
			'city' => 'required|min:5|max:255',
			'state' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            return redirect($request->product_id.'/'.$request->url)
                            ->withErrors($validator, 'addresses')
                            ->withInput();
        } 
			
		$user = User::getRecordByTitle($title);
		$site_setting = Sitesettings::getRecordByUserIdForWebsite($user->id);
		$currency_symbol="";$currency_code="";
		if($site_setting){
			$currency_symbol = $site_setting->currency_symbol;
			$currency_code = $site_setting->currency_code;
		}
        $input = $request->all();
		$order_id = $this->generateUniqueCode();
		$product_id = Crypt::decrypt($request->product_id);
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['product_id'] = $product_id;
		$input['order_id'] = $order_id;
		$input['user_id'] = $user->id;
		$input['currency_symbol'] = $currency_symbol;
		$input['currency_code'] = $currency_code;
		
		if($request->product_type == 'product')
		{
			$products = Products::getRecordById($product_id);
			$input['product_image'] = $products->image_1;
			$input['product_description'] = $products->description;
			$input['product_category'] = $products->category->name;
			$input['price'] = $products->price;
			
		}else{
			$products = Mobile::getRecordById($product_id);
			$input['mobile_image'] = $products->image_1;
			$input['product_description'] = $products->description;
			$input['product_category'] = $products->category->name;
			$input['product_brand'] = $products->brand->name;
			$input['price'] = $products->price;
		}
		
		$check_order_id = Orders::where("order_id", $order_id)->first();
		if(empty($check_order_id)){
			$order = Orders::create($input);
		}else{
			return redirect()->back()->with('error', "we`re sorry,but something went wrong.Please try again");
		}
		
		if($order){
			return redirect($request->product_id.'/'.$request->url)->with('success', 'Our customer service representative will be in touch shortly');
		}else{
			return redirect()->back()->with('error', "we`re sorry,but something went wrong.Please try again");
		}

    }
	
	public function plan(Request $request, $title)
    {     
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['plan'] = Plan::getRecordForWebsite($user->id,12);
		return view('websites.'.$user->site_name.'.plan',$this->data);
    }
	
	public function single_plan(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['plan'] = Plan::find($id);
		$this->data['planlast3'] = Plan::takeRecordForWebsite($user->id,3);
		return view('websites.'.$user->site_name.'.single_plan',$this->data);
    }
	
	public function events(Request $request, $title)
    {     
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['events'] = Event::getRecordForWebsite($user->id,12);
		return view('websites.'.$user->site_name.'.events',$this->data);
    }
	
	public function singleEvent(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::getRecordByUserIdForWebsite($user->id);
	    $this->data['contact_us'] = ContactUs::getContactUsForWebsite($user->id);
	    $this->data['event'] = Event::find($id);
		return view('websites.'.$user->site_name.'.single_event',$this->data);
    }
	
	public function generateUniqueCode()
    {
        do {
            $code = random_int(10000000000000000, 99999999999999999);
        } while (Orders::where("order_id", "=", $code)->first());
  
        return $code;
    }
} 
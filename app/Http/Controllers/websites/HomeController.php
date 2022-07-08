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
	    $this->data['slider'] = Slider::sliderListById($user->id);
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['service'] = Service::getServiceListByIdFirst4($user->id,4);
	    $this->data['service6'] = Service::getServiceListByIdFirst4($user->id,6);
	    $this->data['product'] = Products::getRecordForIndex($user->id);
	    $this->data['projects'] = Projects::getRecordForIndex($user->id);
	    $this->data['mobile'] = Mobile::getRecordForIndex($user->id);
	    $this->data['electric'] = Electric::getRecordForIndex($user->id);
	    $this->data['blog'] = Blog::getRecordForIndex($user->id);
	    $this->data['photoshoots'] = PhotoShoots::getPhotoShootsListForIndex($user->id);
	    $this->data['category'] = Category::categorylistbyid($user->id);
	    $this->data['projecttype'] = ProjectType::getListById($user->id);
	    $this->data['ourteam'] = OurTeam::ourteamlistforindex20($user->id);
		$this->data['gallery'] = Gallery::getRecordByIdForIndex6($user->id);
		$this->data['event'] = Event::getEventListForIndex($user->id);
		$this->data['plan'] = Plan::getRecordForIndexLast6($user->id);
		return view('websites.'.$user->site_name.'.index',$this->data);
		
    }
	
	public function about_us(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['about_us'] = AboutUs::editRecordByIdforindex($user->id);
		return view('websites.'.$user->site_name.'.about_us',$this->data);
    }
	public function service(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['service'] = Service::getServiceListByIdPaginate($user->id);
		return view('websites.'.$user->site_name.'.service',$this->data);
    }
	public function gallery(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['gallery'] = Gallery::getRecordByIdForIndex($user->id);
		return view('websites.'.$user->site_name.'.gallery',$this->data);
    }
	
	public function blog(Request $request, $title)
    {     
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['blog'] = Blog::getRecordForIndexList($user->id);
		return view('websites.'.$user->site_name.'.blog',$this->data);
    }
	public function single_blog(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['blog'] = Blog::getRecordById($id);
		$this->data['bloglast3'] = Blog::getRecordForIndexLast3($user->id);
		return view('websites.'.$user->site_name.'.single_blog',$this->data);
    }
	public function products(Request $request, $title,$cat)
    {   
     	$user = User::getRecordByTitle($title);
	    $this->data['search'] = $request->search;
	    $this->data['title'] = $title;
	    $this->data['cat'] = $cat;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		$this->data['products'] = Products::getRecordForIndex20($user->id,$cat,$request->search);
		$this->data['mobile'] = Mobile::getRecordForIndex20($user->id,$cat,$request->search);
		$this->data['electric'] = Electric::getRecordForIndex20($user->id,$cat,$request->search);
		$this->data['category'] = Category::categorylistbyid($user->id);
		return view('websites.'.$user->site_name.'.products',$this->data);
    }
	
	public function projects(Request $request, $title,$cat)
    {   
     	$user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['cat'] = $cat;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		$this->data['projects'] = Projects::getRecordForIndex20($user->id,$cat);
		$this->data['projecttype'] = ProjectType::getListById($user->id);
		return view('websites.'.$user->site_name.'.projects',$this->data);
    }
	

	
	public function single_product(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		$this->data['product'] = Products::getRecordById($id);
		$this->data['products'] = Products::getRecordForIndexByCategory($user->id,$this->data['product']->category_name,$id);
		$this->data['category'] = Category::categorylistbyid($user->id);
		return view('websites.'.$user->site_name.'.single_product',$this->data);
    }
	
	public function single_project(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		$this->data['project'] = Projects::getRecordById($id);
		return view('websites.'.$user->site_name.'.single_project',$this->data);
    }
	
	public function single_electric(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		$this->data['electric'] = Electric::getRecordById($id);
		$this->data['electrics'] = Electric::getRecordForIndexByCategory($user->id,$this->data['electric']->category_name);
		$this->data['category'] = Category::categorylistbyid($user->id);
		return view('websites.'.$user->site_name.'.single_product',$this->data);
    }
	
	public function single_mobile(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		$this->data['mobile'] = Mobile::getRecordById($id);
		$this->data['mobiles'] = Mobile::getRecordForIndexByCategory($user->id,$this->data['mobile']->category_name);
		$this->data['category'] = Category::categorylistbyid($user->id);
		return view('websites.'.$user->site_name.'.single_product',$this->data);
    }
	
	public function contact_us(Request $request, $title)
    {  
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		return view('websites.'.$user->site_name.'.contact_us',$this->data);
    }
	
	public function contact_us_store(Request $request,$title)
    {
    	 $validator = Validator::make($request->all(), [
			'name' => 'required',
			'email' => 'required',
			'mobile' => 'required',
			'message' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect($title."/contact-us")
                            ->withErrors($validator, 'contact_us_error')
                            ->withInput();
        } else {
			
		
        $input = $request->all();
		
		$user = User::getRecordByTitle($title);
		
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['created_by'] = $user->id;
		
		$inser_id = new FrontContactUs($input);
		$inser_id->save();
		$inser_id = $inser_id->id;
		
		
		if($inser_id){
			Session::flash('success', 'Our Customer Service Representative will be in touch shortly');
			 return redirect()->back();
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function photo_shoots(Request $request, $title,$cat)
    {   
     	$user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['cat'] = $cat;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		$this->data['photoshoots'] = PhotoShoots::getRecordForIndex20($user->id,$cat);
		$this->data['category'] = Category::categorylistbyid($user->id);
		return view('websites.'.$user->site_name.'.photo_shoots',$this->data);
    }
		public function ourteam(Request $request, $title)
    {   
     	$user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		$this->data['ourteam'] = OurTeam::ourteamlistforindex($user->id);
		return view('websites.'.$user->site_name.'.our_teams',$this->data);
    }

    public function philosophy(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['philosophy'] = Philosophy::philosophyByUser($user->id);
		return view('websites.'.$user->site_name.'.philosophy',$this->data);
    }
	
	 public function promotion(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['promotion'] = Promotion::getRecordById($user->id);
		return view('websites.'.$user->site_name.'.promotion',$this->data);
    }
	
	public function addresses(Request $request, $title)
    {    
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['quantity'] = $request->quantity;
	    $this->data['product_fk'] = $request->product_fk;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
		return view('websites.'.$user->site_name.'.addresses',$this->data);
    }
	
	public function order(Request $request,$title)
    {
		
    	 $validator = Validator::make($request->all(), [
			'name' => 'required|min:3|max:255',
			'mobile' => 'min:10|numeric',	
			'email' => 'required|email',
			'pincode' => 'required',
			'company' => 'required',
			'area' => 'required|min:5',
			'landmark' => 'required|min:5',
			'city' => 'required|min:5',
			'state' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect($title.'/'.$request->product_fk.'/'.$request->url)
                            ->withErrors($validator, 'Blog')
                            ->withInput();
        } else {
			
		$user = User::getRecordByTitle($title);
        $input = $request->all();
		$product_fk = Crypt::decrypt($request->product_fk);
		$input['created_at'] = date('Y-m-d H:i:s');
		$input['product_fk'] = $product_fk;
		$input['user_id'] = $user->id;
		
		$order = Orders::create($input);
		
		if($order){
			Session::flash('success', 'Our customer service representative will be in touch shortly');
			return redirect($title.'/'.$request->product_fk.'/'.$request->url);
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function plan(Request $request, $title)
    {     
	   
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['plan'] = Plan::getRecordForIndexList($user->id);
		return view('websites.'.$user->site_name.'.plan',$this->data);
    }
	public function single_plan(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['plan'] = Plan::getRecordById($id);
		$this->data['planlast3'] = Plan::getRecordForIndexLast3($user->id);
		return view('websites.'.$user->site_name.'.single_plan',$this->data);
    }
	
	public function events(Request $request, $title)
    {     
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['events'] = Event::getEventList12($user->id);
		return view('websites.'.$user->site_name.'.events',$this->data);
    }
	
	public function singleEvent(Request $request, $title,$id)
    {     
	    $id = Crypt::decrypt($id);
	    $user = User::getRecordByTitle($title);
	    $this->data['title'] = $title;
	    $this->data['site_setting'] = Sitesettings::editRecordByuserId($user->id);
	    $this->data['contact_us'] = ContactUs::editRecordByuserId($user->id);
	    $this->data['event'] = Event::getRecordById($id);
		return view('websites.'.$user->site_name.'.single_event',$this->data);
    }
} 
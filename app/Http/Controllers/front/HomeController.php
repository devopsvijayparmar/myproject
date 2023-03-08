<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use DB;
use Validator;
use Auth;
use App\Models\front\Slider;
use App\Models\front\Sites;
use App\Models\front\AmazingFeatures;
use App\Models\front\FrontContactUs;
use App\Models\front\Pricing;
use App\Models\front\System;
use App\Models\front\WebTemplates;
use App\Models\front\ContactUs;
use App\Models\front\Customization;
use App\Models\front\CMS;
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
		$this->data['contactus'] = ContactUs::find(1); 
    }
	
	public function index(Request $request)
    {  
	    $this->data['title'] = 'Home';
		$this->data['slider'] = Slider::all(); 
		$this->data['amazingfeatures'] = AmazingFeatures::all(); 
		$this->data['pricing'] = Pricing::all(); 
		$this->data['system'] = System::all(); 
		$this->data['slider'] = Slider::all(); 
		$this->data['webtemplates'] = WebTemplates::all(); 
		return view('front.index',$this->data);
    }
	
	public function webTemplate(Request $request)
    {  
	    $this->data['webtemplates'] = WebTemplates::all(); 
		return view('front.web_templates',$this->data);
    }
	
	public function singleWebTemplate(Request $request,$slug)
    {  
	    $this->data['webtemplates'] = WebTemplates::getRecordBySlug($slug); 
		return view('front.single_web_templates',$this->data);
    }
	
	public function pricing(Request $request)
    {  
	    $this->data['pricing'] = Pricing::all(); 
		return view('front.pricing',$this->data);
    }
	
	public function Cms(Request $request,$type)
    {  
	    $this->data['cms'] = CMS::where('type',$type)->first(); 
		return view('front.cms',$this->data);
    }
	
	public function contactUs(Request $request)
    {  
		return view('front.contact_us',$this->data);
    }
	
	public function customization(Request $request)
    {  
	    $this->data['sites'] = Sites::getSites(); 
		return view('front.customization',$this->data);
    }
	
	public function contact_us_store(Request $request)
    {
		
    	$validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255',
			'message' => 'required|max:10000',
			'subject' => 'required|max:255',
        ]);

        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'contact_us_error')
                            ->withInput();
        } else {
		
        $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
	
		$inser_id = new FrontContactUs($input);
		$inser_id->save();
		$inser_id = $inser_id->id;
		
		if($inser_id){
			Session::flash('success', 'Our customer service representative will be in touch shortly');
			 return redirect()->back();
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	public function customizationStore(Request $request)
    {
	
    	$validator = Validator::make($request->all(), [
			'name' => 'required|max:255',
			'email' => 'required|email|max:255',
			'message' => 'required|max:10000',
			'subject' => 'required|max:255',
        ]);

        if ($validator->fails()) {
             return redirect()->back()
                            ->withErrors($validator, 'customization_error')
                            ->withInput();
        } else {
		
        $input = $request->all();
		$input['created_at'] = date('Y-m-d H:i:s');
	
		$inser_id = new Customization($input);
		$inser_id->save();
		$inser_id = $inser_id->id;
		
		if($inser_id){
			Session::flash('success', 'Our customer service representative will be in touch shortly');
			 return redirect()->back();
		}else{
			 Session::flash('error', "we're sorry,but something went wrong.Please try again");
			 return redirect()->back();
		}

		}
    }
	
	
} 
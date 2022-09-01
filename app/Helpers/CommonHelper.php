<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use App\City;
use App\RegionLanguage;
use Auth;
use Crypt;
use Mail;

class CommonHelper {
	
	public static function dateFormate($date){
		return date('d-m-Y',strtotime($date));
	}
	
}
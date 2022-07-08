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

class CryptHelper {
	
	public static function encryptstring($string){
		
		$encrypted = Crypt::encrypt($string);
		return $encrypted;
	}
	
}
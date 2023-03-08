<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use App\Models\AdminSitesettings;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Crypt;
use Config;
use DB;

class UserRegistrationNotificationListener


{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
		
    }

    /**
     * Handle the event.
     *
     * @param  UserRegistered  $event
     * @return void
     */
    public function handle(UserRegistered $event)
    {
        $user = $event;
		
		$site_setting = AdminSitesettings::first();
		$site_logo = "";
		if(isset($site_setting->site_logo)){
			$site_logo = $site_setting->site_logo;
		}
		
	    $userid = Crypt::encrypt($user->user['id']);
	    $link = url('verify-account/'.$userid);
		
        $data = array( 'email' => $user->user['email'], 'name' => $user->user['name'], 'link'=>$link,'site_logo'=>$site_logo);
       
		Mail::send('emails.users.verify_email', $data, function($message) use ($data)
        {
            $message->to($data['email'], 'Webcom')->subject('Please Verify Your Email Address');
        });

    }
}

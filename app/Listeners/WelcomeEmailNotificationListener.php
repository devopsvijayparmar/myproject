<?php

namespace App\Listeners;

use App\Events\WelcomeEmail;
use App\Models\AdminSitesettings;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Crypt;
use Config;
use DB;

class WelcomeEmailNotificationListener


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
     * @param  WelcomeEmail  $event
     * @return void
     */
    public function handle(WelcomeEmail $event)
    {
        $user = $event;
		
		$site_setting = AdminSitesettings::first();
		$site_logo = "";
		if(isset($site_setting->site_logo)){
			$site_logo = $site_setting->site_logo;
		}
		
	    $adminlink = url('/admin/dashboard');
	    $websitelink = url('/'.$user->user['title']);
		
        $data = array( 'email' => $user->user['email'], 'name' => $user->user['name'], 'adminlink'=>$adminlink,'websitelink'=>$websitelink,'site_logo'=>$site_logo);
       
		Mail::send('emails.users.welcome_email', $data, function($message) use ($data)
        {
            $message->to($data['email'], 'Websphare')->subject('Your Websphare Account is Ready - Get Started Now');
        });

    }
}

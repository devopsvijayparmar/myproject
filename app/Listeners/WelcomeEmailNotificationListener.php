<?php

namespace App\Listeners;

use App\Events\WelcomeEmail;
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
		
	    $adminlink = url('/admin/dashboard');
	    $websitelink = url('/'.$user->user['title']);
		
        $data = array( 'email' => $user->user['email'], 'name' => $user->user['name'], 'adminlink'=>$adminlink,'websitelink'=>$websitelink);
       
		Mail::send('emails.users.welcome_email', $data, function($message) use ($data)
        {
            $message->to($data['email'], 'Websphare')->subject('Welcome to Websphare! ');
        });

    }
}

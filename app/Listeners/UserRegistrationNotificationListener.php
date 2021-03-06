<?php

namespace App\Listeners;

use App\Events\UserRegistered;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Crypt;
use Config;
use DB;

class UserRegistrationNotificationListener implements ShouldQueue


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
		
	    $userid = Crypt::encrypt($user->user['id']);
	    $link = url('verify-account/'.$userid);
		
		
        $data = array( 'email' => $user->user['email'], 'name' => $user->user['name'], 'link'=>$link);
       
		Mail::send('emails.users.verify_email', $data, function($message) use ($data)
        {
            $message->to($data['email'], 'Webcom')->subject('Please Verify Your Email Address');
        });

    }
}

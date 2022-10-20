<?php

namespace App\Listeners;

use App\Events\EmailNotifications;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Models\SiteSetting;
use Crypt;


class EmailNotificationsListener
{
    public $email;
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
     * @param  object  $event
     * @return void
     */
    public function handle(EmailNotifications $event)
    {
		
        $user = $event;
		$data = array('email' => $user->user['email'],'subject'=>$user->subject,'user_message'=>$user->message,'name'=>$user->user['name']);
       
		Mail::send('emails.users.email_notifications', $data, function($message) use ($data)
        {
            $message->to($data['email'], $data['subject'])->subject($data['subject']);
        });
		
    }
}

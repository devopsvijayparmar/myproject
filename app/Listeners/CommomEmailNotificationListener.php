<?php

namespace App\Listeners;

use App\Events\CommomEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use Crypt;
use Config;
use DB;

class CommomEmailNotificationListener


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
     * @param  CommomEmail  $event
     * @return void
     */
    public function handle(CommomEmail $event)
    {
        $user = $event;
        $data = array('html' => $user->user['message'],'subject'=>$user->user['subject'],'email'=>$user->user['email']);
       
		Mail::send('emails.users.common_email', $data, function($message) use ($data)
        {
            $message->to($data['email'], config('enum.site_title'))->subject($data['subject']);
        });

    }
}

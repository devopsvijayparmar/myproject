<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Events\EmailNotifications;

class SendEmailJob implements ShouldQueue
{
   use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
	public $params;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($params)
    {
        $this->params = $params;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function handle()
    {
        foreach($this->params['users'] as $retrieved_data){
			
			$html = $email->email;
			$subject = $email->subject;
			$html = str_replace('{{USER_NAME}}',$retrieved_data->name , $html);
			
			event(new EmailNotifications($retrieved_data,$this->params['subject'],$html));
		}
    }
}

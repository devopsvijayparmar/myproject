<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class EmailNotifications
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $user;
    public $subject;
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($user,$subject,$message)
    {
        $this->user = $user;   
        $this->subject = $subject;   
        $this->message = $message;   
    }

}

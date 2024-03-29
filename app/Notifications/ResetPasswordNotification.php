<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\AdminSitesettings;

class ResetPasswordNotification extends Notification
{
    use Queueable;
	private $token;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->token = $data;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
	public function toMail($notifiable)
	{
		$site_setting = AdminSitesettings::first();
		$site_logo = "";
		if(isset($site_setting->site_logo)){
			$site_logo = $site_setting->site_logo;
		}
		$url = url(url('/') . route('password.reset', [
				'token' => $this->token,
				'email' => $notifiable->getEmailForPasswordReset(),
			], false));

		return (new MailMessage)->view('emails.reset', ['url' => $url,'site_logo'=>$site_logo]);
	}

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

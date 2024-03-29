<?php

namespace App\Providers;

use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
		'App\Events\UserRegistered' => [
            'App\Listeners\UserRegistrationNotificationListener',
        ],
		'App\Events\WelcomeEmail' => [
            'App\Listeners\WelcomeEmailNotificationListener',
        ],
		'App\Events\EmailNotifications' => [
            'App\Listeners\EmailNotificationsListener',
        ],
		'App\Events\CommomEmail' => [
            'App\Listeners\CommomEmailNotificationListener',
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}

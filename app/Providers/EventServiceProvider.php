<?php

namespace App\Providers;

use Baleghsefat\User\Listeners\SendEmailVerificationNotificationListener;
use Baleghsefat\User\Listeners\SendMobileVerificationNotificationListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotificationListener::class,
            SendMobileVerificationNotificationListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
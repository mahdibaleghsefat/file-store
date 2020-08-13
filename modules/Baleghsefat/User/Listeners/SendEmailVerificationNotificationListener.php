<?php

namespace Baleghsefat\User\Listeners;

use Baleghsefat\User\Interfaces\MustVerifyMobile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendEmailVerificationNotificationListener
{
    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        if ($event->user instanceof MustVerifyEmail &&
            !$event->user->hasVerifiedMobile() &&
            $event->user->hasVerifiedEmail()
        ) {
            $event->user->sendEmailVerificationNotification();
        }
    }
}

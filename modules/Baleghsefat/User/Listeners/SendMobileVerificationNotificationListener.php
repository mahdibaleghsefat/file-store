<?php

namespace Baleghsefat\User\Listeners;

use Baleghsefat\User\Interfaces\MustVerifyMobile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SendMobileVerificationNotificationListener
{
    /**
     * Handle the event.
     *
     * @param object $event
     * @return void
     */
    public function handle($event)
    {
        if ($event->user instanceof MustVerifyMobile &&
            !$event->user->hasVerifiedMobile() &&
            !$event->user->hasVerifiedMobile()
        ) {
            $event->user->sendMobileVerificationNotification();
        }
    }
}

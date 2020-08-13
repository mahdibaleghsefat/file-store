<?php

namespace App\Channels;

use Baleghsefat\User\Services\VerifyCodeService;
use Illuminate\Notifications\Notification;
use phplusir\smsir\Smsir;

class SmsChannel
{
    /**
     * Send the given notification.
     *
     * @param mixed $notifiable
     * @param \Illuminate\Notifications\Notification $notification
     * @return void
     */
    public function send($notifiable, Notification $notification)
    {
        $message = $notification->toSms($notifiable);
        $mobile = $notifiable->mobile;
        Smsir::send([$message], [$mobile]);
    }
}

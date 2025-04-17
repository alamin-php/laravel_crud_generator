<?php

namespace App\Notifications;

use App\Interfaces\Contracts\NotificationInterface;

class SMSNotification implements NotificationInterface
{
    public function send($message)
    {
        echo "SMS sent". $message;
    }
}

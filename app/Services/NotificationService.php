<?php

namespace App\Services;

use App\Factories\NotificationFactory;

class NotificationService
{
    public function sendNotification($type, $message)
    {
        $notification = NotificationFactory::create($type);
        $notification->send($message);
    }
}

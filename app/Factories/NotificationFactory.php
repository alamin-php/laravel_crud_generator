<?php

namespace App\Factories;

use App\Interfaces\Contracts\NotificationInterface;
use App\Notifications\EmailNotification;

class NotificationFactory
{
    public static function create($type): NotificationInterface
    {
        return match ($type) {
            "email" => new EmailNotification(),
            "sms" => new EmailNotification(),
            default => throw new \Exception("Notification type {$type} not supported")
        };
    }
}

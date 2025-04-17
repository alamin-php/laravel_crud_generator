<?php

namespace App\PaymentProcess;

use App\Enums\PaymentStatus;
use App\Interfaces\PaymentProcessor;

class StripePaymentProcess implements PaymentProcessor
{
    public function pay(): PaymentStatus
    {
        return PaymentStatus::PROCESSING;
    }

    public function checkPayment(): PaymentStatus
    {
        return PaymentStatus::SUCCESS;
    }
}

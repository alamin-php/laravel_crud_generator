<?php

namespace App\Interfaces;

use App\Enums\PaymentStatus;

interface PaymentProcessor
{
    public function pay():PaymentStatus;
    public function checkPayment():PaymentStatus;
}

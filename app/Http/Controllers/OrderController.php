<?php

namespace App\Http\Controllers;

use App\PaymentProcess\PayPalPaymentProcess;
use App\PaymentProcess\StripePaymentProcess;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function create(Request $request): JsonResponse
    {
        if($request->input('payment_method') === 'paypal')
        {
            $paymentProcessor = new PayPalPaymentProcess();
        }elseif($request->input('payment_method') === 'stripe')
        {
            $paymentProcessor = new StripePaymentProcess();
        }else{
            throw new \InvalidArgumentException('Incorrect payment type');
        }
    }
}

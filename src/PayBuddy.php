<?php

namespace BashaNasar\PayBuddy;

class PayBuddy
{
    public function processPayment(float $amount, string $currency = 'USD'): string
    {
        \Yii::info("Processing payment: {$amount} {$currency}", __METHOD__);

        return "Payment of {$amount} {$currency} processed successfully.";
    }
}

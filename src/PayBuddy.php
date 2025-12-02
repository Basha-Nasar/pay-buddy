<?php
namespace BashaNasar\PayBuddy;

class PayBuddy {
    public function processPayment($amount, $currency = 'USD') {
        return "Processing {$amount} {$currency} payment...";
    }
}

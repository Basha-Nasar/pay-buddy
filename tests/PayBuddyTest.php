<?php
require __DIR__ . '/vendor/autoload.php';

use BashaNasar\PayBuddy\PayBuddy;

$payBuddy = new PayBuddy();
echo $payBuddy->processPayment(100, 'USD');

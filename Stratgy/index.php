<?php

require_once __DIR__ . '/PaymentContext.php';
require_once __DIR__ . '/PaypalPayment.php';
require_once __DIR__ . '/CryptoPayment.php';

use Strategy\CryptoPayment;
use Strategy\PaymentContext;
use Strategy\PaypalPayment;

$PaymentContext = new PaymentContext();

$PaymentContext->setStrategy(new PaypalPayment());

echo $PaymentContext->proccessPayment();

$PaymentContext = new PaymentContext();

$PaymentContext->setStrategy(new CryptoPayment());

echo $PaymentContext->proccessPayment();
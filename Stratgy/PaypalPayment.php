<?php

namespace Strategy;

require_once __DIR__ . '/PaymentStrategy.php';


class PaypalPayment implements PaymentStrategy  {
    
    public function pay() {
        return 'paied with paypal';
    }

}
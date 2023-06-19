<?php 

namespace Strategy;

require_once __DIR__ . '/PaymentStrategy.php';

use Strategy\PaymentStrategy;

class PaymentContext {

    private PaymentStrategy $strategy;


    public function setStrategy($strategy) {
        $this->strategy = $strategy;
    }


    public function proccessPayment() {
       return $this->strategy->pay() . PHP_EOL;
    }

}
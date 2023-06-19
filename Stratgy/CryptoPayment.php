<?php

namespace Strategy;


class CryptoPayment implements PaymentStrategy  {
    
    public function pay() {
        return 'paied with Crypto curruncy';
    }

}
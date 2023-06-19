<?php
namespace Observer;

require_once __DIR__ . '/Subscriber.php';

use Observer\Subscriber;

class LoggingEventListner implements Subscriber {
    public function update($event){
        echo "event value has been changed to {$event} from LoggingEventListner" . PHP_EOL;
    }
}
<?php

namespace Observer;

use Observer\Subscriber;

require_once __DIR__ . '/Subscriber.php';

class AuditingEventListner implements Subscriber {

    public function update($event)
    {
        echo "event value has been changed to {$event} from AuditingEventListner" . PHP_EOL;
    }
}

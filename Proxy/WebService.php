<?php 

namespace proxy\WebService;

use proxy\Service\Service;

require_once __DIR__ . '/Service.php';


class WebService implements Service {
    public function connect()
    {
        return 'connected service' . PHP_EOL;
    }
}
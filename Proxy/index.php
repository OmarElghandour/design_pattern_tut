<?php

use proxy\WebService\WebService;
use proxy\WebServiceProxy\WebServiceProxy;

require_once __DIR__ . '/WebService.php';
require_once __DIR__ . '/WebServiceProxy.php';

$serviceProxy = new WebServiceProxy();

$serviceProxy->setClientId(1);
echo $serviceProxy->connect();

$serviceProxy->setClientId(4);
echo $serviceProxy->connect();

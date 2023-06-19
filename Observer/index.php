<?php

use Observer\AuditingEventListner;
use Observer\EventManager;
use Observer\LoggingEventListner;

require_once  __DIR__ . '/EventManager.php';
require_once  __DIR__ . '/LoggingEventListner.php';
require_once  __DIR__ . '/AuditingEventListner.php';


$observable = new EventManager();

$loggingEventListener = new LoggingEventListner();

$auditingEventListner = new AuditingEventListner();

$observable->attach($loggingEventListener);
$observable->attach($auditingEventListner);

$observable->changeState('new state value from Observalbe');


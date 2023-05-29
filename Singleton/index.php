<?php 
require 'Singletone.php';

use Singletone;

$config = [
    'prop' => 'someValue'
];

$classInstance =  Singletone::getInstance($config);
<?php 
require 'Singletone.php';

use Singletone;


$config = [
    'prop' => 'someValue'
];


var_dump($config);


$classInstance =  Singletone::getInstance($config);
<?php

require_once __DIR__ . '/BasicCoffee.php';
require_once __DIR__ . '/CoffeeMilkDecorator.php';

use Decorator\CoffeeMilkDecorator\CoffeeMilkDecorator;

$coffee = new BasicCoffee();

$milkCoffee= new CoffeeMilkDecorator($coffee);


echo $milkCoffee->getDescription() . PHP_EOL;


$coffee = new BasicCoffee();
echo $coffee->getDescription() . PHP_EOL;

<?php 

namespace Decorator\CoffeeMilkDecorator;

require_once __DIR__ . '/BaseCoffeeDecorator.php';
require_once __DIR__ . '/Coffee.php';

use Decorator\BaseCoffeeDecorator\BaseCoffeeDecorator;
use Decorator\Coffee\Coffee;

class CoffeeMilkDecorator extends BaseCoffeeDecorator implements Coffee {

    public function getDescription()
    {
        return parent::getDescription() . 'with added Milk';
    }
}
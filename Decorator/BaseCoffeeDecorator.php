<?php 

namespace Decorator\BaseCoffeeDecorator;

require_once __DIR__ . '/Coffee.php';

use Decorator\Coffee\Coffee;

abstract class BaseCoffeeDecorator implements Coffee {

    private $coffeeWrapper;

    public function __construct(Coffee $coffeeWrapper)
    {
        $this->coffeeWrapper = $coffeeWrapper;
    }


    public function getDescription()
    {
        return $this->coffeeWrapper->getDescription();
    }
}
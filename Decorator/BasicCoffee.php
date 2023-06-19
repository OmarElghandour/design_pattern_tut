<?php

use Decorator\Coffee\Coffee;

require_once __DIR__ . '/Coffee.php';

class BasicCoffee implements Coffee {
    public function getDescription()
    {
        return 'hello Basic coffe';
    }
}
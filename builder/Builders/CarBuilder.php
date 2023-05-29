<?php

namespace Builder;


require __DIR__  . '/../Interfaces/ICarBuilder.php';
require __DIR__ . '/../Car.php';

use Car;
use Interface\ICarBuilder\ICarBuilder;


class CarBuilder implements ICarBuilder {
    private Car $car;

    public function __construct()
    {
        $this->car = new Car();
    }


    public function setEngine(string $engine) : CarBuilder
    {   
        $this->car->setEngine($engine);
        return $this;
    }

    public function setAirBags(bool $hasAirBags) : CarBuilder
    {
        $this->car->setAirBags($hasAirBags);
        return $this;
    }
    


    public function setDoors(int $doors) : CarBuilder
    {
        $this->car->setDoors($doors);
        return $this;
    }


    public function setSeats(int $seats) : CarBuilder
    {
        $this->car->setSeats($seats);
        return $this;
    }

    public function getResult() : Car {
        return $this->car;
    }
}
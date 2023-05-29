<?php

use Builder\CarBuilder;
use Interface\ICarBuilder\ICarBuilder;

class CarDirector {
   private CarBuilder $builder;

   public function __construct(ICarBuilder $builder) {
     $this->builder = $builder;
   }

   public function buildMercedesCar() {
      $this
        ->builder
        ->setEngine('Mercedes Eninge')
        ->setDoors(4)
        ->setSeats(4)
        ->setAirBags(true);

      return $this->builder;
   }

   public function buildBmwCar() {
    $this
      ->builder
      ->setEngine('Bmw Eninge')
      ->setDoors(2)
      ->setSeats(2)
      ->setAirBags(true);

    return $this->builder;
 }
}
<?php 

namespace Interface\ICarBuilder;

use Builder\CarBuilder;
use Car;

interface ICarBuilder {
   public function setSeats(int $seats) : CarBuilder;
   public function setEngine(string $engine);
   public function setAirBags(bool $hasAirBags);
   public function setDoors(int $doors);
   public function getResult(): Car;
}


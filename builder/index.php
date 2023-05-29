<?php

require 'Builders/CarBuilder.php';
require 'CarDirector.php';

use Builder\CarBuilder;

$carBuilder = new CarBuilder();

$carDirector = new CarDirector($carBuilder);
$mercedes = $carDirector->buildMercedesCar();
$bmw = $carDirector->buildBmwCar();

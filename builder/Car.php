<?php

class Car {
    private string $engine;
    private bool $airBags;
    private int $doors;
    private int $seats;

    public function setEngine(string $engine)
    {
        $this->engine = $engine;
    }

    public function setAirBags(bool $airBags)
    {
        $this->airBags = $airBags;
    }

    public function setDoors(int $doors)
    {
        $this->doors = $doors;
    }

    public function setSeats(int $seats)
    {
        $this->seats = $seats;
    }

    public function displayCarDetails()
    {
        echo "Car Details: Engine: {$this->engine}, Airbags: {$this->airBags}, Doors: {$this->doors}, Seats: {$this->seats}\n";
    }
}
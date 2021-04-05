<?php
require_once 'Vehicle.php';
require_once 'Vehicle.php';

class Truck  extends Vehicle {

    private int $charged = 0;
    private int $capacity;

    public function __construct(int $capacity, string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity= $capacity;
        $this->energy = $energy;
        $this->charged ;  
    }

  

    public function getCharged(): string
    {
        if ($this->capacity > $this->charged) {
            return "In folling";
        } else {
            return "full";
        }
    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
    }

       
}
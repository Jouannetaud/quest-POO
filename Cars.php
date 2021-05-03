<?php
require_once 'Vehicle.php';


class Cars extends Vehicle implements LighttableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'H2O',
    ];
    
    private string $energy;

    private int $energyLevel;

    private bool $hasParkBreak;

    public function __construct( string $color,int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats); 
        $this->energy = $energy;
        
    }

    public function switchOn()
    {
        
    }  
 
    public function switchOff()
    {
 
    }

     

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Cars
    
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
        $this->energy = $energy;
        }
        return $this;
    }


    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    

    /**
     * Get the value of hasParkBreak
     */ 
    public function getHasParkBreak(): bool
    {
        return $this->hasParkBreak;
    }

    /**
     * Set the value of hasParkBreak
     *
     * @return  self
     */ 
    public function setHasParkBreak($hasParkBreak): cars
    {   
        $this->hasParkBreak = $hasParkBreak;
        
        return $this;
    }

    public function forward(): string
    {
        $this->currentSpeed = 15;

       if($this->hasParkBreak === true) {

       throw new Exception("impossible de rouler avec le frein à main");

       } 
        return "Go !";
    }
}



<?php
require_once 'Vehicle.php';
require_once 'LightableInterface.php';


class Cars extends Vehicle implements LightableInterface
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
        'H2O',
    ];
    
    private string $energy;

    private int $energyLevel;

    private bool $hasParkBreak = true;

    public function __construct( string $color,int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats); 
        $this->energy = $energy;
        
    }

    public function switchOn()
    {
        return true;
    }  
 
    public function switchOff()
    {
        return false;
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
    public function HasParkBreak(): bool
    {
        return $this->hasParkBreak;
    }

    /**
     * Set the value of hasParkBreak
     *
     * @return  self
     */ 
    public function setHasParkBreak(bool $hasParkBreak)
    {   
        $this->hasParkBreak = $hasParkBreak;
        
        return $this;
    }

    public function start() 
    {
      try { if( $this->hasParkBrake === true){
        throw new Exception ('Oublie du frein main');
      }
  
    } catch (Exception $e) {
        $this->hasParkBrake = false;
        echo $e . ' Frein à main levé';
  
    } finally {
        echo '<br> Ma voiture roule comme un donut <br>' ;
    }
    }
}


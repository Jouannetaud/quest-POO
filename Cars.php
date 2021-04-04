<?php

class Cars {
    private int $nbWeels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private string $energyLevel;

    public function __construct($color, $nbSeats, $energy)
    {
      $this->color = $color;
      $this->nbSeats = $nbSeats;
      $this->energy = $energy; 
    }

    
    public function forward()
    {
        $this->vitesse = 55;

        return 'Go';
    }

    public function brake()
    {
        $sentence = "";
        while ($this->vitesse > 0) {
            $this->vitesse--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
        }


    public function start()
    {
      $fast = "";
      while ($this->currentSpeed > 0) {
          $this->currentSpeed++;
          $fast .= "Accélère";
      } 
      $fast .= "vitesse max";
      return $fast;
    }

    public function getCurrentSpeed()
    {
        return $this->currentSpeed;
    }

    public function setCurrentSpeed($currentSpeed)
    {
        if ($currentSpeed >= 0) {
            $this->currentSpeed = $currentSpeed;
        }
        return $this->currentSpeed = $currentSpeed;
    }


    public function getNbWeels()
    {
        return $this->NbWeels;
    }

    public function getEnerguLevel()
    {
        return $this->energyLevel;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function getNbSeats()
    {
        return $this->getNbSeats;
    }

}


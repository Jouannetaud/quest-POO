<?php

class Bicycle 
{
    private string $color;

    private int $vitesse;

    private  int $nbrPlace = 1;

    private int $nbrRoue = 2;



    public function __construct($color)
    {
       $this->color = $color; 
    }
 
 
 
    public function forward()
    {
        $this->vitesse = 15;

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
        
    public function getColor(): string
    {
        return $this->color;
    }
    public function setColor(string $color)
    {
        return $this->color = $color;
    }

    
    public function getVitesse()
    {
        return $this->vitesse;
    }

    public function setVitesse(int $vitesse)
    {
        
        if ($vitesse >= 0) {
            $this->vitesse = $vitesse;
        }
        return $this->vitesse = $vitesse;
    }

  
    
    public function getnbrPlace()
    {
        return $this->nbrPlace;
    }


    public function setnbrPlace(int $nbrPlace)
    {
        return $this->nbrPlace = $nbrPlace;
    }

  
  
    public function getnbrRoue()
    {
            return $this->nbrRoue;
    }

    public function setnbrRoue(int $nbrRoue)
    {
        return $this->nbrRoue = $nbrRoue;
    }




}

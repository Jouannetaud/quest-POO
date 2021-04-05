<?php

require_once 'HighWay.php';

final class PedestrianWay extends HighWay{ 

    

    public function __construct()
    {
       parent::__construct(1, 10);
       
    }
    
    
    
        
      
    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle  ) {
            $get = parent::getCurrentVehicles();
            array_unshift($get,$vehicle);
            parent::setCurrentVehicles($get);
            
        } else {
            echo "véhicule non autorisé";
        }
    }
    
}
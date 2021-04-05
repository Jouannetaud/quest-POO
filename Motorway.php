<?php


require_once 'HighWay.php';



final class MotorWay extends HighWay 
{
    

    public function __construct()
    
    {
       
       parent::__construct(4, 130);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Cars || $vehicle instanceof Truck ) {
            $get = parent::getCurrentVehicles();
            array_unshift($get,$vehicle);
            parent::setCurrentVehicles($get);
            
        } else {
            echo "ne fait pas partie de voiture ni camion";
        }

    }
}
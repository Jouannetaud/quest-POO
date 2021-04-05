<?php
 require_once 'HighWay.php';


final class ResidentialWay extends HighWay{

   

    public function __construct()
    {
       
        parent::__construct(2, 50);
    }

    public function addVehicle(Vehicle $vehicle)
    {
        if($vehicle instanceof Cars || $vehicle instanceof Truck || $vehicle instanceof Bicycle) {
            $get = parent::getCurrentVehicles();
            array_unshift($get,$vehicle);
            parent::setCurrentVehicles($get);
            
        } else {
            echo "véhicule pas instancer";
        }
    }
    
}
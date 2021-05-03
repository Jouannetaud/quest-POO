<?php
require_once 'Cars.php';
require_once 'Truck.php';
require_once 'Bicycle.php';
//require_once 'Motorway.php';
//require_once 'PedestrianWay.php';
//require_once 'ResidentialWay.php';
//require_once 'LightableInterface.php';
//require_once 'Speedometer.php';


$bike = new Bicycle("red", 2); 

$bike->setCurrentSpeed = 35;
//var_dump($bike);



/*echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();*/

$rockRider = new Bicycle('yellow', 2);


$tornado = new Bicycle('black', 2);



$tornado->setCurrentSpeed(15);

$homer = new Cars("pink", 5 , 'fuel');

 



/*var_dump($homer);
$homer->setCurrentSpeed = 30;

echo '<br> Vitesse de la voiture de Homer : ' . $homer->setCurrentSpeed . ' km/h' . '<br>';
echo $homer->brake();
echo '<br> Vitesse de la voiture de Homer : ' . $homer->setCurrentSpeed . ' km/h' . '<br>';
echo $homer->brake();*/


$marge = new Cars('yellow', 5 ,'fuel'); 

/*var_dump($marge);
$marge->setCurrentSpeed = 50;
echo $marge->forward();
echo '<br> Vitesse de la voiture de Marge : ' . $marge->setCurrentSpeed . ' km/h' . '<br>';
echo $marge->brake();
echo '<br> Vitesse de la voiture de Marge : ' . $marge->setCurrentSpeed . ' km/h' . '<br>';
echo $marge->brake();*/

$bicycle = new Bicycle('blue', 1);
//echo $bicycle->forward();
//var_dump($bicycle);

$car = new Cars('green', 4, 'electric');
//echo $car->forward();
//var_dump($car);*/

$truck = new Truck(80, 'black', 2, 'fuel');

/*var_dump($truck);

echo $truck->forward();
echo $truck->brake();
echo $truck->getCharged();*/
/*
$A11 = new MotorWay();

$A11->addVehicle($car);
$A11->addVehicle($bike);
$A11->addVehicle($truck);

$parc = new PedestrianWay();

$parc->addVehicle($bike);
$parc->addVehicle($tornado);
$parc->addVehicle($car);

var_dump($parc->getCurrentVehicles());

$avenue = new ResidentialWay();

$avenue->addVehicle($car);
$avenue->addVehicle($bike);
$avenue->addVehicle($truck);

var_dump($avenue->getCurrentVehicles());
*/

$car->setHasParkBreak(true); 
$car->start();

$bicycle->setcurrentSpeed(15);
echo $bicycle->switchOn();

echo Speedometer::convertKmToMiles(10);
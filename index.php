<?php

require_once 'Cars.php';
require_once 'Vehicle.php';

$bike = new Bicycle("red", 2);

$bike->setCurrentSpeed = 35;
var_dump($bike);



echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setCurrentSpeed . ' km/h' . '<br>';
echo $bike->brake();

$rockRider = new Bicycle('yellow', 2);


$tornado = new Bicycle('black', 2);

$tornado->forward();
$tornado->setCurrentSpeed(15);

$homer = new Cars("pink", 5 , 'électrique');


var_dump($homer);
$homer->setCurrentSpeed = 30;
echo $homer->forward();
echo '<br> Vitesse de la voiture de Homer : ' . $homer->setCurrentSpeed . ' km/h' . '<br>';
echo $homer->brake();
echo '<br> Vitesse de la voiture de Homer : ' . $homer->setCurrentSpeed . ' km/h' . '<br>';
echo $homer->brake();


$marge = new Cars('yellow', 5 ,'gasoil'); 

var_dump($marge);
$marge->setCurrentSpeed = 50;
echo $marge->forward();
echo '<br> Vitesse de la voiture de Marge : ' . $marge->setCurrentSpeed . ' km/h' . '<br>';
echo $marge->brake();
echo '<br> Vitesse de la voiture de Marge : ' . $marge->setCurrentSpeed . ' km/h' . '<br>';
echo $marge->brake();

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Cars('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$truck = new Truck(80, 'black', 2, 'fuel');

var_dump($truck);

echo $truck->forward();
echo $truck->brake();
echo $truck->getCharged();
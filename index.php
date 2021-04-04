<?php

require 'Cars.php';
require 'Bicycle.php';
$bike = new Bicycle("red");

$bike->setvitesse = 15;
var_dump($bike);



echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->setvitesse . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->setvitesse . ' km/h' . '<br>';
echo $bike->brake();

$rockRider = new Bicycle('yellow');


$tornado = new Bicycle('black');

$tornado->forward();
$tornado->setvitesse(15);

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
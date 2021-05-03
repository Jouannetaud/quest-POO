<?php

require_once 'Vehicle.php';


class Speedometer{


    public const CONVERT_SPEED = 1.6;

    public static function convertKmToMiles($speed): float 
        
    {
        return $speed / self::CONVERT_SPEED;
    }


    public static function convertMilesToKm($speed): float
        
    {
        return $speed * self::CONVERT_SPEED;
    }
}    
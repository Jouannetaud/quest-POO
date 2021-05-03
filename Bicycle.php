<?php
require_once 'Vehicle.php';

class Bicycle extends Vehicle implements LighttableInterface

{
   public function switchOn()
   {
      if($this->getCurrentSpeed() > 10) {

         return true;
      }

      return false;
   }  

   public function switchOff()
   {
      return false;
   }
}

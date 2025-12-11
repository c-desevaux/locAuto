<?php

    require_once 'classes/Vehicule.class.php';
    require_once 'classes/VehiculeException.class.php';

    $voiture = new Vehicule ("vroom", "vroomvroom", "B8430BG");
    $voiture->__toString();

?>
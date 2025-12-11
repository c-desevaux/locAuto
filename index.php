<?php

    require_once 'classes/Vehicule.class.php';
    require_once 'classes/VehiculeException.class.php';
    require_once 'classes/Citadine.class.php';
    require_once 'classes/Familiale.class.php';
    require_once 'classes/Utilitaire.class.php';

   

    $twingo = new Citadine ("Renault", "Twingo", "", 5);
    $twingo->__toString();

?>
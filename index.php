<?php

    require_once 'classes/Vehicule.class.php';
    require_once 'classes/VehiculeException.class.php';
    require_once 'classes/Citadine.class.php';
    require_once 'classes/Familiale.class.php';
    require_once 'classes/Utilitaire.class.php';
    require_once 'classes/ParcVehicule.class.php';

   

    $twingo = new Citadine ("Renault", "Twingo", "GF652TF", 5);
    $twingo->__toString();
    
    $voiture2 = new Familiale("Renault", "Senic", "RF864PL", 5);
    $voiture2->__toString();
    
    $voiture3 = new Utilitaire("Renault", "Master", "TH584PL", 3);
    $voiture3->__toString();
    

    $parc = new ParcVehicule ();

    $parc->save($twingo);
    $parc->save($voiture2);
    $parc->save($voiture3);

    $parc->getParc();

    print_r($parc);
?>
<?php

    require_once 'Vehicule.class.php';

    class ParcVehicule {



        private static $parc;
        
        public static function save(Vehicule $vehicule){
            self::$parc[] = $vehicule;
        }



    }


?>
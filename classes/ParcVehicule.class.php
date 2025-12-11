<?php

    require_once 'Vehicule.class.php';

    class ParcVehicule {



        private static $parc;

        public static function save(Vehicule $vehicule){
            self::$parc[] = $vehicule;
        }

        public static function getParc(){
            foreach (self::$parc as $vehicule){
                echo get_class($vehicule).":".$vehicule->__toString();
            }
        }

        

    }


?>
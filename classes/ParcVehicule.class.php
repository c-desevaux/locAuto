<?php

    require_once 'Vehicule.class.php';

    class ParcVehicule {



        private static $parc;

        public static function save(Inventoriable $inventoriable){
            self::$parc[] = $inventoriable;
        }

        public static function getParc(){
            foreach (self::$parc as $inventoriable){
                echo get_class($inventoriable).":".$inventoriable->getAllInfo();
            }
        }

        

    }


?>
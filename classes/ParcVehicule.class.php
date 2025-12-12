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

        public static function searchParcById(string $id): ?Inventoriable {
            foreach (self::$parc as $inventoriable){
                if($inventoriable->getId() === $id){
                    echo $inventoriable->getAllInfo();
                    return $inventoriable;
                }
            }
            echo "Nous n'avons pas trouvé d'élément avec l'id ".$id."<br>";
            return null;

        }

        

    }


?>
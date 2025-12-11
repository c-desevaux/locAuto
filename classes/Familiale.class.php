<?php

    require_once 'Vehicule.class.php';


    class Familiale extends Vehicule {

        private $nbPlace;

        public function __construct($brand, $modele, $id, $nbPlace){
            parent::__construct($brand, $modele, $id);

            $this->setNbPlace($nbPlace);

        }

//GETTERS

        public function getNbPlace(){
            return $this->nbPlace;
        }

//SETTERS

        public function setNbPlace(int $nbPlace): void{

            if($nbPlace){
                $this->nbPlace = $nbPlace;
            }
            
        }

        public function planifierRevision(){
            echo "";
        }

        public function __toString()
        {
            $str = parent::__toString().", places max: ".$this->getNbPlace()."<br>";

            return $str;
        }
        
    }

?>
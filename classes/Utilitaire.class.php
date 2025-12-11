<?php

    require_once 'Vehicule.class.php';


    class Utilitaire extends Vehicule {
        private $charge;

            public function __construct($brand, $modele, $id, $charge){
                parent::__construct($brand, $modele, $id);

                $this->setCharge($charge);

            }

//GETTERS

            public function getCharge(){
                return $this->charge;
            }

//SETTERS

            public function setCharge(int $charge): void{
                $this->charge = $charge;
            }

            public function planifierRevision(){
                echo "";
            }

            public function __toString()
        {
            $str = "Vehicule de la marque: ".$this->getBrand().", modèle: ".$this->getModel().", immatriculaiton: ".$this->getId();

            echo $str;
            return $str;
        }
    }

?>
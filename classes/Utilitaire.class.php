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

                if($charge > 0){
                    $this->charge = $charge;
                }
                
            }
//FUNCTIONS
            public function planifierRevision(){
                echo "";
            }
            public function getAllInfo(): string {

            return $this->__toString();
            }

            public function __toString()
            {
            $str = parent::__toString().", charge utile: ".$this->getCharge()."kg <br>";

            return $str;
            }
    }

?>
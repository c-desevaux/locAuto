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

            public function planifierRevision(){
                echo "";
            }

            public function __toString()
            {
            $str = parent::__toString().", charge utile: ".$this->getCharge()."<br>";

            return $str;
            }
    }

?>
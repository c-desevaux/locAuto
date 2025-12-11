<?php

    require_once 'Vehicule.class.php';


    class Citadine extends Vehicule {

        private $autonomie;

        public function __construct($brand, $modele, $id, $autonomie){
            parent::__construct($brand, $modele, $id);

            $this->setAutonomie($autonomie);

        }

//GETTERS

        public function getAutonomie(){
            return $this->autonomie;
        }

//SETTERS

        public function setAutonomie(int $autonomie): void{
            if($autonomie>0){
                $this->autonomie = $autonomie;
            }
            
        }

        public function planifierRevision(){
            echo "";
        }
        
        public function __toString()
        {
            $str = parent::__toString().", autonomie: ".$this->getAutonomie();

            echo $str;
            return $str;
        }


    }

    

?>
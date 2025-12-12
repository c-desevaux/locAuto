<?php

    require_once 'Materiel.class.php';



    class Depaneuse extends Materiel implements Inventoriable {

        private $id;
        
        public function __construct($id){
            $this->setId($id);
        }

//SETTERS

        public function setId(string $id): void {
            $this->id = $id;
        }

//GETTERS
        
        public function getId(): string {
            return $this->id;
        }
//FONCTIONS

        public function getAllInfo(): string {
            return $this->__toString();
        }

        public function __toString()
        {
            $str = "Outil de dépannage, id: ".$this->getId()."<br>";

            return $str;
        }
    }

?>
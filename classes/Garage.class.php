<?php

    

    class Garage extends Inventoriable {

        private $surface;
        private $capacite;
        private $niv;
        private $id;



        public function __construct(float $surface, int $capacite, int $ni, string $id){
            $this->setSurface($surface);
            $this->setCapacite($capacite);
            $this->setNiv($niv);
            $this->setId($id);
        }

//GETTERS


        public function getSurface(){
            return $this->surface;
        }
        public function getCapacite(){
            return $this->capacite;
        }
        public function getNiv(){
            return $this->niv;
        }
        public function getId(): string{
            return $this->id;
        }

//SETTERS   

        public function setSurface(float $surface): void{
            if($surface > 0){
                $this->surface = $surface;
            }
        }
        public function setCapacite(int $capacite): void{
            if($capacite > 0){
                $this->capacite = $capacite;
            }
        }
        public function setNiv(int $niv): void{
            if($niv > 0){
                $this->niv = $niv;
            }
        }
        public function setId(string $id): void{
            $this->id = $id;
        }
    }


?>
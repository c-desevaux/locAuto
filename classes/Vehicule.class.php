<?php
    require_once 'Inventoriable.class.php';

    abstract class Vehicule implements Inventoriable {

        private $brand;
        private $model;
        private $id;

        public function __construct($brand, $model, $id){

            $this->setBrand($brand);
            $this->setModel($model);
            $this->setId($id);

        }

//GETTERS

        public function getBrand(): string{
            return $this->brand;
        }

        public function getModel(): string{
            return $this->model;
        }

        public function getId(): string{
            return $this->id;
        }

//SETTERS

        public function setBrand(string $brand): void{
            $this->brand = $brand;
        }

        public function setModel(string $model): void{
            $this->model = $model;
        }

        public function setId(string $id): void{
            $this->id =$id;
        }


//FONCTIONS


        public function __toString()
        {
            $str = "Vehicule de la marque: ".$this->getBrand().", modèle: ".$this->getModel().", immatriculaiton: ".$this->getId();

            return $str;
        }

        public abstract function planifierRevision();

        
        
        
    }

?>
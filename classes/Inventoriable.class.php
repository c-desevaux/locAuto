<?php

    require_once 'Vehicule.class.php';

    abstract class Inventoriable {
        





        public abstract function getAllInfo(): string;
        public abstract function getId(): string;
    }


?>
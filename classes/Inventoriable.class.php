<?php

    require_once 'Vehicule.class.php';

    interface Inventoriable {
        

        public function getAllInfo(): string;
        public function getId(): string;
    }


?>
// Créer une classe représentant une partie/course
// Créer une classe représentant un joueur
// Créer une classe représentant un véhicule

<?php 

class Vehicle {
    // Vitesse max

    private $model;
    private $power;

    private $engine = false;
    private $state = 100; //Si voiture se déteriore, le state peut diminuer, à 0 voiture hors course
    private $speed = 0;

    public function start() {

    }
    
    public function increaseSpeed() {

    }

    public function decreaseSpeed() {

    }

    public function setDamage( $damage ) {

    }

    public function repair() {

    }
    
    public function stop() {

    }
}
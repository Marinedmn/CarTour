<?php 

// Créer une classe représentant une partie/course
// Créer une classe représentant un joueur
// Créer une classe représentant un véhicule

class Vehicle {
    // Vitesse max
    const MAX_SPEED = 350;

    private $model;
    private $power;

    private $engine = false;
    private $state = 100; //Si voiture se déteriore, le state peut diminuer, à 0 voiture hors course
    private $speed = 0;

    public function __construct($model, $power) {
        $this->model = $model;
        $this->power = $power;
    }

    public function start() {
        $this->engine = true;
    }

    public function isStart() {
        return $this->engine;
    }
    
    public function increaseSpeed() {
        $this->speed += $this->power * 10;
        if($this->speed >= 350) {
            $this->speed = 350;
        }
        return $this->speed;
    }

    public function decreaseSpeed() {
        $this->speed -= $this->power * 5;
        if($this->speed < 0) {
            $this->speed = 0;
        }
        return $this->speed;
    }

    public function setDamage( $damage ) {
        $this->state -= $damage;

        if($this->state <= 0) {
            $this->state = 0;
            return false;
        }
        return true;
    }

    public function repair() {
        $this->state = 100;
    }

    public function stop() {
        $this->engine = false;
    }

    public function getSpeed() {
        return $this->speed;
    }
    
}
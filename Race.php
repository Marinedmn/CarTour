<?php

class Race {
    // Nombre de joueur minimum

    private $track;
    private $type;
    private $distance;
    private $lap = 5;
    private $weather;

    private $players = array();
    private $ranking = array();

   public function __construct($track, $type, $distance, $weather, $lap = null) {
        $this->track = $track;
        $this->type = $type;
        $this->weather = $weather;

        if( is_int($distance) && $distance > 1000 ) {
            $this->distance = $distance;
        }
        else {
            $this->distance = 100;
        }
        
        if(is_int($lap) && $lap > 0) {
            $this->lap = $lap;
        }
    }

    public function addPlayer( $player ) {
        $this->players[] = $player;
    }

    public function start() {

    }

    public function getRanking() {
        return $this->ranking;
    }
}
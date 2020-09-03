<?php

class Player {
    private $username;
    private $team;
    private $vehicle;

    private $level = 1;
    private $care;

    public function __construct($username, $team, $vehicle, $level) {
        $this->username = $username;
        $this->team = $team;
        $this->vehicle = $vehicle;

        if(is_int($level) && $level > 0 && $level <= 100) {
            $this->level = $level;
        }
        
        $this->care = mt_rand(0, 5); // genere un nb alléatoire entre 0 & 5
    }

    public function getIdentity() {
        // Retourne nom + équipe
        return $this->username . ' ' . $this->team;
    }
}
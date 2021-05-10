<?php

class Personnage {

    // Attributs
    private $_force = 40;
    private $_classe = "Plombier";
    private $_couleurCasquette = "Rouge";


    // constructor
    public function __construct($force) {
        $this->setForce($force);
    }

    // Methods
    public function getForce() {
        return $this->_force;
    }

    public function setForce($force) {
        $this->_force = $force;
    }

    public function getCouleurCasquette() {

    }

    public function setCouleurCasquette() {
        
    }

    public function getClasse() {

    }

    public function setClasse() {
        
    }
}

$mario = new Personnage(80);
echo $mario->getForce();
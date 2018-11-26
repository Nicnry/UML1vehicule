<?php

class Avion extends Vehicule implements iVehiculeAMoteur {

    protected $marque;
    protected $couleur;

    public function __construct($marque, $couleur) {
		parent::__construct($marque, $couleur);
		//echo 'Je suis de type : '.__CLASS__;
	}


	public function avancer() {
		echo 'Avancer comme un avion';
    }
    
    public function decoller() {
        echo 'decoller comme un avion';
    }

    public function atterrir() {
        echo 'atterir comme un avion';
    }

    public function demarrer() {
        echo 'demarrer comme un avion';
    }

    public function arreter() {
        echo 'arreter comme un avion';
    }

}
<?php

class Voiture extends Vehicule implements iVehiculeAMoteur {

    private $moteur;
    private $listeRoues;
    public $portes;
    public $climatisation;

    public function __construct($marque, $couleur) {
		parent::__construct($marque, $couleur);
		//echo 'Je suis de type : '.__CLASS__;
	}


	public function avancer() {
		echo 'Avancer comme une voiture';
    }

    public function demarrer() {
		echo 'demarrer comme une voiture';
    }

    public function arreter() {
        echo 'arreter comme une voiture';
    }
    
    public function ajouterRoues($R1, $R2, $R3, $R4) {
        $this->listeRoues [] = $R1;
        $this->listeRoues [] = $R2;
        $this->listeRoues [] = $R3;
        $this->listeRoues [] = $R4;
    }

}
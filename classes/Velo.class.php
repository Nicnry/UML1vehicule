<?php

class Velo extends Vehicule
{	
	public function __construct($marque, $couleur)
	{
		parent::__construct($marque, $couleur);
		//echo 'Je suis de type : '.__CLASS__;
	}


	public function avancer()
	{
		echo 'Avancer comme un Velo';
	}


}
?>
<?php

abstract class Vehicule
{
	protected $marque;
	protected $couleur;
	
	public function __construct($marque, $couleur)
	{
		$this->marque = $marque;
		$this->couleur = $couleur;
        echo "Construction d'un Vehicule de type ".get_called_class()." : ".$marque." ".$couleur. ". ";
	}

    public function typeclasse(){
        return get_called_class();
    }

	public function repeindre($newCouleur)
	{
		echo 'Je repeins en '.$newCouleur.'...';
		$this->couleur = $newCouleur;
	}
	
	public abstract function avancer();
	
	public function __destruct()
	{
		
	}
		
	public function __clone()
	{
		echo "Construction d'un clone de type : ".get_class($this);
	}
	
	public function __toString()
	{
		return json_encode(get_object_vars($this));
	}

    public function __get($attr)
    {
        if(isset($this->$attr))
            return $this->$attr;
        else
            throw new \Exception('Unknow attribute '.$attr);
    }

    public function __set($attr,$value)
    {
        if(isset($this->$attr))
            $this->$attr = $value;
        else
            throw new \Exception('Unknow attribute '.$attr);
    }
}
?>
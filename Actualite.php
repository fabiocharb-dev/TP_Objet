<?php
class Actualite {
	public $nom;
	public $contenu;
    public $date;

	public  function __construct(string $nom, string $contenu, date $date)
	{
		$this -> Nom = $nom;
		$this -> Contenu = $contenu;
        $this -> Date = $date;
	}

}


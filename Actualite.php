<?php
class Actualite {
	public $Nom;
	public $Contenu;
    public $Date

	public  function __construct(string $Nom, string $Contenu, date $Date)
	{
		$this -> Nom = $Nom;
		$this -> Contenu = $Contenu;
        $this -> Date = $Date;
	}
}
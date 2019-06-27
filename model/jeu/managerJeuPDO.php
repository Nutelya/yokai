<?php

namespace yokai\model\jeu;
use \PDO;
use \DateTime;

class ManagerJeuPDO {
	
	protected  $db;

	public  function __construct(PDO $db)
	  {
	    $this->db = $db;
	  }

	public   function add(Jeu $jeu)
	{
		$request = $this->db->prepare('INSERT INTO jeux(nom, image, visibilite, dateAjout, dateModif) VALUES(:nom, :image, :visibilite, NOW(), NOW())');
		$request->bindValue(':nom', $jeu->nom());
		$request->bindValue(':image', $jeu->image());
		$request->bindValue(':visibilite', 0, PDO::PARAM_INT);
		$request->execute();
	}
}
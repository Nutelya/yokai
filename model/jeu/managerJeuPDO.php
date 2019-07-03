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

	public  function list($start = -1, $end = -1, $visibilite = 0)
	{
		$sql = "SELECT id, nom, image, visibilite, dateAjout, dateModif FROM jeux WHERE visibilite = ". $visibilite ." ORDER BY id DESC";
    	if ($start != -1 || $end != -1)
		{
      		$sql .= ' LIMIT '.(int) $end.' OFFSET '.(int) $start;
    	}

    	$request = $this->db->query($sql);
    	$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '\yokai\model\jeu\Jeu');
		$list = $request->fetchAll();

    	foreach ($list as $jeu)
    	{
     		$jeu->setDateAjout(new DateTime($jeu->dateAjout()));
      		$jeu->setDateModif(new DateTime($jeu->dateModif()));
    	}

    	$request->closeCursor();
  		return $list;
	}
}
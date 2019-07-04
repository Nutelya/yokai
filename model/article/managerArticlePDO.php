<?php

namespace yokai\model\article;
use \PDO;
use \DateTime;

class ManagerArticlePDO {
	
	protected  $db;

	public  function __construct(PDO $db)
	  {
	    $this->db = $db;
	  }

	public   function add(Article $article)
	{
		$request = $this->db->prepare('INSERT INTO article(auteur, titre, contenu, image, visibilite, etiquette, dateAjout, dateModif) VALUES(:auteur, :titre, :contenu, :image, :visibilite, :etiquette, NOW(), NOW())');
		$request->bindValue(':auteur', $article->auteur());
		$request->bindValue(':titre', $article->titre());
		$request->bindValue(':contenu', $article->contenu());
		$request->bindValue(':image', $article->image());
		$request->bindValue(':visibilite', 0, PDO::PARAM_INT);
		$request->bindValue(':etiquette', $article->etiquette());
		$request->execute();
	}

	public  function delete($id) 
	{
		$this->db->exec('DELETE FROM article WHERE id = '.(int) $id);
	}

	public  function list($start = -1, $end = -1, $visibilite = 0)
	{
		$sql = "SELECT id, auteur, titre, contenu, image, visibilite, etiquette, dateAjout, dateModif FROM article WHERE visibilite = ". $visibilite ." ORDER BY id DESC";
    	if ($start != -1 || $end != -1)
		{
      		$sql .= ' LIMIT '.(int) $end.' OFFSET '.(int) $start;
    	}

    	$request = $this->db->query($sql);
    	$request->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, '\yokai\model\article\Article');
		$list = $request->fetchAll();

    	foreach ($list as $article)
    	{
     		$article->setDateAjout(new DateTime($article->dateAjout()));
      		$article->setDateModif(new DateTime($article->dateModif()));
    	}

    	$request->closeCursor();
  		return $list;
	}
}
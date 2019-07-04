<?php

namespace yokai\model\article;
class Article
{
	protected  $id;
	protected  $auteur;
	protected  $titre;
	protected  $contenu;
	protected  $image;
	protected  $visibilite;
	protected  $etiquette;
	protected  $dateAjout;
	protected  $dateModif;

	public   function __construct($value = array())
	{
		if (!empty($value))
			{
				$this->hydrate($value);
			}
	}

	public   function hydrate($data)
	{
		foreach ($data as $attribute => $value)
		{
			$methode = 'set'.ucfirst($attribute);

			if (is_callable([$this, $methode]))
			{
				$this->$methode($value);
			}
		}
	}

	public   function setId($id)
	{
		$this->id = (int) $id;
	}

	public   function setAuteur($auteur)
	{
		$this->auteur = $auteur;
	}

	public   function setTitre($titre)
	{
		$this->titre = $titre;
	}

	public   function setContenu($contenu)
	{
		$this->contenu = $contenu;
	}

	public   function setImage($image)
	{
		$this->image = $image;
	}

	public   function setVisibilite($visibilite)
	{
		$this->visibilite = (int) $visibilite;
	}

	public   function setEtiquette($etiquette)
	{
		$this->etiquette = $etiquette;
	}


	public   function setDateAjout($dateAjout)
	{
		$this->dateAjout = $dateAjout;
	}

	public   function setDateModif($dateModif)
	{
		$this->dateModif = $dateModif;
	}


	public   function id()
	{
		return $this->id;
	}

	public   function auteur()
	{
		return $this->auteur;
	}

	public   function titre()
	{
		return $this->titre;
	}

	public   function contenu()
	{
		return $this->contenu;
	}

	public   function image()
	{
		return $this->image;
	}

	public   function visibilite()
	{
		return $this->visibilite;
	}

	public   function etiquette()
	{
		return $this->etiquette;
	}

	public   function dateAjout()
	{
		return $this->dateAjout;
	}

	public   function dateModif()
	{
		return $this->dateModif;
	}
}

?>
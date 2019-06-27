<?php

namespace yokai\model\jeu;
class Jeu
{
	protected  $id;
	protected  $nom;
	protected  $image;
	protected  $visibilite;
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

	public   function setNom($nom)
	{
		$this->nom = $nom;
	}

	public   function setImage($image)
	{
		$this->image = $image;
	}

	public   function setVisibilite($visibilite)
	{
		$this->visibilite = (int) $visibilite;
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

	public   function nom()
	{
		return $this->nom;
	}

	public   function image()
	{
		return $this->image;
	}

	public   function visibilite()
	{
		return $this->visibilite;
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
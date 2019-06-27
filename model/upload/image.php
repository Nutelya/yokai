<?php

  namespace yokai\model\upload;

  class Image 
  {

     protected $cible;
     protected $poidMax;
     protected $largeurMax;
     protected $hauteurMax;
     protected $nom;

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

  public   function setCible($cible)
  {
    $this->cible = $cible;
  }

  public   function setPoidMax($poidMax)
  {
    $this->poidMax = (int) $poidMax;
  }

  public   function setLargeurMax($largeurMax)
  {
    $this->largeurMax = (int) $largeurMax;
  }

  public   function setHauteurMax($hauteurMax)
  {
    $this->hauteurMax = (int) $hauteurMax;
  }

  public function setNom($nom)
  {
    $this->nom = $nom;
  }

  public   function cible()
  {
    return $this->cible;
  }

  public   function poidMax()
  {
    return $this->poidMax;
  }

  public   function largeurMax()
  {
    return $this->largeurMax;
  }

  public   function hauteurMax()
  {
    return $this->hauteurMax;
  }

  public   function nom()
  {
    return $this->nom;
  }
}

?>
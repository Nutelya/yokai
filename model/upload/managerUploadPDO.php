<?php 
  namespace yokai\model\upload;

  class ManagerUploadPDO 
  {

    public function add(Image $image, $fichier) {
   
        // Si c'est OK, on teste l'upload
       if(move_uploaded_file($fichier['fichier']['tmp_name'], $image->cible().$image->nom()))
        {
          $message = 'Upload réussi !';
        }
    }

  public function verification(Image $image,$fichier) 
  {
    $tabExt = array('jpg','gif','png','jpeg');
    $infosImg = array();
    $extension = '';

    if( !is_dir($image->cible()) ) 
      {
        if( !mkdir($image->cible(), 0755) ) 
        {
          exit('Erreur : le répertoire cible ne peut-être créé ! Vérifiez que vous diposiez des droits suffisants pour le faire ou créez le manuellement !');
        }
      }

      // Recuperation de l'extension du fichier
      $extension  = pathinfo($fichier['fichier']['name'], PATHINFO_EXTENSION);
      // On verifie l'extension du fichier
      if(in_array(strtolower($extension),$tabExt))
      {
        // On recupere les dimensions du fichier
        $infosImg = getimagesize($fichier['fichier']['tmp_name']);
   
        // On verifie le type de l'image
        if($infosImg[2] >= 1 && $infosImg[2] <= 14)
        {
          // On verifie les dimensions et taille de l'image
          if(($infosImg[0] <= $image->largeurMax() && ($infosImg[1] <= $image->hauteurMax()) && (filesize($fichier['fichier']['tmp_name']) <= $image->poidMax())))
          {
            // Parcours du tableau d'erreurs
            if(isset($fichier['fichier']['error']) 
              && UPLOAD_ERR_OK === $fichier['fichier']['error'])
            {
              $verification = true;
            }
            else
            {
              $verification = false;
            }
          }
          else
          {
            $verification = false;
          }
        }
        else
        {
          $verification = false;
        }
      }
      else
      {
        $verification = false;
      }
      return $verification;
  }
}
?>
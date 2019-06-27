<?php
namespace yokai\controller;

$db = \yokai\model\Dbfactory::getMysqlConnexionWithPDO();
$managerJeu = new \yokai\model\jeu\managerJeuPDO($db);
$managerUpload = new \yokai\model\upload\managerUploadPDO();

function accueil() {
	require('../yokai/view/frontend/accueil.php');
}

function administration () {
	require('../yokai/view/backend/administration.php');
}

function ajoutJeu ($managerJeu,$managerUpload) {
	$image = new \yokai\model\upload\Image(
			[
				'cible' => '../yokai/public/images/jeux/',
				'poidMax' => 100000,
				'largeurMax' => 8000,
				'hauteurMax' => 8000,
				'nom' => ''
			]
		);
	if ((isset($_POST["nom"])) && (isset($_FILES['fichier']['name']))) {
		if ($managerUpload->verification($image,$_FILES)) 
		{
			$extension = pathinfo($_FILES['fichier']['name'], PATHINFO_EXTENSION);
			$nomImage = md5(uniqid()) .'.'. $extension;
			$image->setNom($nomImage);
			$managerUpload->add($image,$_FILES);
			$jeu = new \yokai\model\jeu\Jeu(
			[
				'nom' => htmlspecialchars($_POST['nom']),
				'image' => htmlspecialchars($nomImage)
			]
			);
			$managerJeu->add($jeu);
		}
		
	}
	require('../yokai/view/backend/ajoutJeu.php');
}
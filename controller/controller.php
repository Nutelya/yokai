<?php
namespace yokai\controller;

$db = \yokai\model\Dbfactory::getMysqlConnexionWithPDO();
$managerJeu = new \yokai\model\jeu\managerJeuPDO($db);
$managerUpload = new \yokai\model\upload\managerUploadPDO();
$managerArticle = new \yokai\model\article\managerArticlePDO($db);

function accueil($managerJeu) {
	$listeJeu = $managerJeu->list();
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
				'image' => htmlspecialchars($image->cible().$image->nom())
			]
			);
			$managerJeu->add($jeu);
		}
		
	}
	require('../yokai/view/backend/ajoutJeu.php');
}

function listeJeu ($managerJeu) {
	$listeJeu = $managerJeu->list();
	require('../yokai/view/backend/listeJeu.php');
}

function listeArticle ($managerArticle) {
	if (isset($_GET['supprimer'])) {
		$managerArticle->delete($_GET['supprimer']);
	}
	$listeArticle = $managerArticle->list();
	require('../yokai/view/backend/listeArticle.php');
}

function article ($managerArticle, $managerUpload) {
	require('../yokai/view/backend/article.php');
}
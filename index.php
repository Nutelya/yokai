<?php
namespace yokai\controller;

require('../yokai/app/autoload.php');
\yokai\app\Autoloader::register();
require('../yokai/controller/controller.php');
session_start();

if (isset($_GET['action']))
{
	if ($_GET['action'] == 'administration')
	{
		administration();
	}
	else if ($_GET['action'] == 'ajoutJeu') {
		ajoutJeu($managerJeu,$managerUpload);
	}
}
else
{
	accueil();
}
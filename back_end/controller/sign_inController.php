<?php
session_start();
require_once("/wamp64/www/php/orientech/back_end/var/variables.inc.php");
require_once URL_MODEL."eleve/GestionEleve.php";

if (isset($_POST["submit"])){
	extract($_POST);
	$user = GestionEleve::isUserExists(new Eleve($nom,$pwd,$email));
	if(isset($user['nom'])){
		dump($user);
		$_SESSION['idUser'] = $user['code'];
		$_SESSION['nameUser'] = strtoupper( $user['nom']);
		$_SESSION['emailUser'] = $user['email'];
		
		$_SESSION['user'] = 'connect';
		dump($_SESSION);
		header("location: ".URL_CONTROLLER2."acceuilController.php ");
		exit;
	}else{
		$error = "<p class='error'>information incoorect !</p>";
	}
}

require(URL_PAGE."sign_in.php");
?>
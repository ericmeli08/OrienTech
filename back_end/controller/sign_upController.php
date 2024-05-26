<?php 
session_start();
require_once("/wamp64/www/php/orientech/back_end/var/variables.inc.php");
require_once URL_MODEL."eleve/GestionEleve.php";

if(isset($_POST['submit'])){
    extract($_POST);
    $verification_eleve = GestionEleve::verificationEleve($nom,$email);
    if (!isset($verification_eleve['nom'])) {
        $nom = htmlentities(addslashes(trim($nom)));
        $pwd = htmlentities(addslashes(trim($pwd)));
        $email = htmlentities(addslashes(trim($email)));
        GestionEleve::inscrireEleve(new Eleve($nom,$pwd,$email));
        $lastId = GestionEleve::getLastId();

        $_SESSION['idUser'] = $lastId;
		$_SESSION['emailUser'] = $email;
        $_SESSION['nameUser'] = strtoupper( $user['nom']);
		$_SESSION['user'] = 'connect';
        header("location:".URL_CONTROLLER2."acceuilController.php");
    }else{
        $error = 'This email already exists !!!';
    }

}

require_once(URL_PAGE."sign_up.php");
?>
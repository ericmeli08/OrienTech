<?php 
session_start();
require_once("/wamp64/www/php/orientech/back_end/var/variables.inc.php");
require_once URL_MODEL."filiere/GestionFiliere.php";

require(URL_TMP."verification_connection.php");

// $filieres = [];

// $filieres = GestionLivres::getLivresAvailable();

// $commentaires = GestionCommentaires::getCommentaires();
// if(isset($commentaires['email'])){
//     $commentaires = [$commentaires];
// }

$fili = GestionFiliere::listeFiliere();
$filieres = null;
$filiere1 = null;

if(isset($_POST['submit'])){
    extract($_POST);
    echo $filiere1;
    echo $filiere2;
    $filiere1 = GestionFiliere::rechercherFiliereNom($filiere1);
    $filiere2 = GestionFiliere::rechercherFiliereNom($filiere2);
}

foreach ($fili as $filiere) {
    $message  = new Filiere($filiere['code_filiere'],$filiere['nom_filiere'],$filiere['serie'],$filiere['pourcentage'],$filiere['debauche'],$filiere['matiere_secondaire']);
    $message->setSerie(implode("-",explode(";;",$message->getSerie())));
    $filieres[] = $message;
}

if(isset($filieres['codeLivre'])){
    $filieres = [$filieres];
}

require URL_PAGE."comparaison.php";
?>
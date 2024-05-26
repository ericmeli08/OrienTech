<?php 
session_start();
require_once("/wamp64/www/php/orientech/back_end/var/variables.inc.php");
require_once URL_MODEL."eleve/GestionEleve.php";
require_once URL_MODEL."filiere/GestionFiliere.php";
require_once URL_MODEL."temoignage/GestionTemoignage.php";

require(URL_TMP."verification_connection.php");


$max_caratere = 35;

$temoigne = GestionTemoignage::listeTemoignage();
if(isset($temoigne['code_eleve'])){
    $temoigne = [$temoigne];
}
$temoignages = null;
foreach ($temoigne as $temoignage) {
    $message  = new Temoignage($temoignage['code_eleve'],$temoignage['temoignage'],$temoignage['code_temoignage'],$temoignage['date_temoignage']);
    $user = GestionEleve::getEleveById($message->getCodeEleve());
    if(strlen($message->getTemoignage())>$max_caratere)
        $message->setTemoignage(substr($message->getTemoignage(),0,$max_caratere)."...");
    
    $eleve = new Eleve($user['nom'],$user['password'],$user['email']);
    $emails[] = $eleve->getEmail();
    $temoignages[] = $message;
}


$filieres = null;

if(isset($_POST['submit'])){
    extract($_POST);
    
    $typeRech = addslashes($typeRech);
    $termeRech = addslashes(trim($termeRech));
    echo ($typeRech=='nom');

    if($typeRech=='nom'){
        $fili = GestionFiliere::rechercherFiliereNom($termeRech);
    }else{
        $fili = GestionFiliere::rechercheFiliereSerie($termeRech);
    }
}else{
    $fili = GestionFiliere::listeFiliere();
}

if(isset($fili['code_filiere'])){
    $fili = [$fili];
}

foreach ($fili as $filiere) {
    $message  = new Filiere($filiere['code_filiere'],$filiere['nom_filiere'],$filiere['serie'],$filiere['pourcentage'],$filiere['debauche'],$filiere['matiere_secondaire']);
    $message->setSerie(implode("-",explode(";;",$message->getSerie())));
    $filieres[] = $message;
}

require URL_PAGE."acceuil.php";
?>
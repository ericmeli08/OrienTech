<?php 
session_start();
require_once("/wamp64/www/php/orientech/back_end/var/variables.inc.php");
require_once URL_MODEL."eleve/GestionEleve.php";
require_once URL_MODEL."forum/GestionForum.php";


require(URL_TMP."verification_connection.php");


$forums = GestionForum::listeForum();
$id = !isset($_REQUEST['id']) ? 1 : $_REQUEST['id'];

$reponse_forum = GestionForum::getReponsesByForumId($id);

if(isset($_REQUEST['submit_reponse_forum'])){
    extract($_GET);
    GestionForum::insertReponse($reponseforum,$id_reponse,$id_user);
}
// $filieres = [];

// $filieres = GestionLivres::getLivresAvailable();

// $commentaires = GestionCommentaires::getCommentaires();
// if(isset($commentaires['email'])){
//     $commentaires = [$commentaires];
// }

// if(isset($_POST['submit'])){
//     extract($_POST);
    
//     $typeRech = addslashes($typeRech);
//     $termeRech = addslashes(trim($termeRech));

//     $filieres = GestionLivres::rechercheLivres($typeRech,$termeRech);
// }

// if(isset($filieres['codeLivre'])){
//     $filieres = [$filieres];
// }

require URL_PAGE."forum.php";
?>
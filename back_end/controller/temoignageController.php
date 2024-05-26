<?php 
session_start();
require_once("/wamp64/www/php/orientech/back_end/var/variables.inc.php");
require_once URL_MODEL."temoignage/GestionTemoignage.php";

require(URL_TMP."verification_connection.php");

extract($_POST);
GestionTemoignage::ajouterTemoignage(new Temoignage($id,$temoignage));

header("location: ".URL_CONTROLLER2."acceuilController.php ");

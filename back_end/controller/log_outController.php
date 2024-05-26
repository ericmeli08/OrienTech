<?php 
session_start();
require_once("/wamp64/www/php/orientech/back_end/var/variables.inc.php");


 unset($_SESSION['user']);
 unset($_SESSION['userAdmin']);
 session_destroy();

 header("Location: ".URL_CONTROLLER2."sign_inController.php");
?>
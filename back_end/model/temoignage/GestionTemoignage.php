<?php
require_once (URL_FONCTION."fonction.php");
require_once (URL_MODEL."temoignage/Temoignage.php");

class GestionTemoignage
{
       // Ajouter un temoignage ========================================================================
    public static function ajouterTemoignage(Temoignage $temoignage)
    {
        $query = "INSERT INTO ".DB_TABLE_TEMOIGNAGE."  (  code_Eleve,temoignage) VALUES(?,?)";
        executeRequest($query, [ $temoignage->getCodeEleve(), $temoignage->getTemoignage()]);
    }
   
    public static function listeTemoignage()
    {
        $query = "SELECT * FROM ".DB_TABLE_TEMOIGNAGE."";
        return executeRequest($query);
    }

}
?>
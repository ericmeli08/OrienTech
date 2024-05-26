<?php 

require_once URL_MODEL."eleve/GestionEleve.php";
require_once (URL_FONCTION."fonction.php");

class GestionForum 
{
    
    public static function listeForum()
    {
        $query = "SELECT * FROM ".DB_TABLE_FORUME."";
        return executeRequest($query);
    }
    
    public static function insertReponse($reponse,$id,$user)
    {
        $query = "INSERT INTO `reponse_forum`( `reponse`,  `id_forum`,`id_user`) VALUES (?,?,?)";
        return executeRequest($query,[$reponse,$id,$user]);
    }

    public static function getForumById($code)
    {
        $query = "SELECT * FROM ".DB_TABLE_FORUME." WHERE code_for=? ";
        $r = executeRequest($query, [$code]);
        return $r;
    }

    public static function getReponsesByForumId($code)
    {
        $query = "SELECT * FROM ".DB_TABLE_FORUME_REPONSE." WHERE id_forum=? ";
        $r = executeRequest($query, [$code]);
        return $r;
    }




}

















?>
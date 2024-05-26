<?php

require_once (URL_FONCTION."fonction.php");
require_once (URL_MODEL."filiere/Filiere.php");
    class GestionFiliere
    {
        public static function rechercherFiliereNom($nomFiliere)
        {
            $query = "SELECT * FROM ".DB_TABLE_FILIERE." WHERE nom_filiere LIKE  '%$nomFiliere%'";
           
            return executeRequest($query);
        }
        public static function listeFiliere()
        {
            $query = "SELECT * FROM ".DB_TABLE_FILIERE ;
            return executeRequest($query);
        }
        public static function rechercheFiliereSerie($serie)
        {
            $query = "SELECT * FROM Filiere WHERE serie LIKE  '%$serie%'";
            return executeRequest($query);
        }
     
        public static function getFiliereById($code)
        {
            $query = "SELECT * FROM Filiere WHERE code_filiere = '$code' ";
            return executeRequest($query);
        }
        
    }
?>
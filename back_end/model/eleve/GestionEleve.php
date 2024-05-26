
<?php
require_once (URL_FONCTION."fonction.php");
require_once (URL_MODEL."eleve/Eleve.php");


    class GestionEleve
    {
        // Ajouter un eleve ========================================================================
        public static function inscrireEleve(Eleve $eleve)
        {
            $query = "INSERT INTO ".DB_TABLE_ELEVE."(nom, prenom, password, email) VALUES(?,?,?,?)";
            executeRequest($query, [$eleve->getNom(), $eleve->getPrenom(), md5($eleve->getPassword()), $eleve->getEmail()]);
        }
        // Ajouter un eleve ========================================================================
        public static function verificationEleve($nom,$email)
        {
            $query = "SELECT * FROM ".DB_TABLE_ELEVE." WHERE nom=? AND email=? ";
            $r = executeRequest($query, [$nom, $email]);
            return $r;
        }

        public static function getEleveById($code)
        {
            $query = "SELECT * FROM ".DB_TABLE_ELEVE." WHERE code=? ";
            $r = executeRequest($query, [$code]);
            return $r;
        }
       
        public static function isUserExists(Eleve $eleve)
        {
            $query = "SELECT * FROM ".DB_TABLE_ELEVE." WHERE  email=? AND password=? ";
            // dump( [$eleve->getNom(), $eleve->getEmail(),md5($eleve->getPassword())]);
            return executeRequest($query, [ $eleve->getEmail(),md5($eleve->getPassword())]);
        }
        // Ajouter un eleve ========================================================================
        public static function getLastId()
        {
            $query = "SELECT max(code) FROM ".DB_TABLE_ELEVE."";
            return executeRequest($query);
        }

        // Connecter un eleve ======================================================================
        public static function connecterEleve($email, $password)
        {
            $query = "SELECT * FROM ".DB_TABLE_ELEVE." WHERE email = ?, password = ?";
            return executeRequest($query, [$email, $password]);
        }

        // Evaluer un eleve =====================================================
        public static function evaluerEleve($filiere)
        {
            $query = "SELECT Quiz.* FROM Filiere, MatierePrincipale, Quiz WHERE Filiere.codeMatiere = MatierePrincipale.codeMatiere ".
            "AND MatierePrincipale.codeQuiz = Quiz.codeQuiz AND Filiere.nomFiliere = ?";
            return executeRequest($query, [$filiere]);
        }
        
    }
?>
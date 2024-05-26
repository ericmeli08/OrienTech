<?php
    class Eleve
    {
        private $code;
        private $nom;
        private $prenom;
        private $password;
        private $email;
        private $code_filiere;
        private $code_for;

        public function __construct( $nom, $password, $email,$code="",$prenom="", $code_filiere="", $code_for="")
        {
            $this->code=$code;
            $this->nom = $nom;
            $this->prenom = $prenom;
            $this->password = $password;
            $this->email = $email;
            $this->code_filiere = $code_filiere;
            $this->code_for = $code_for;
            // $this->photo = $photo;
        }

        public function getCode()
        {  
            return $this->code;
        }

        public function getNom()
        {
            return $this->nom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function getPassword(){
            return $this->password;
        }
        public function getEmail(){
            return $this->email;
        }
        // public function getPhoto(){
        //     return $this->photo;
        // }
        public function getCodeForum(){
            return $this->code_for;
        }
        public function setCode($code){
            $this->code = $code;
        }
        public function setNom($nom)
        {  
            $this->nom = $nom; 
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }
        public function setEmail($email)
        {
           $this->email = $email;
        }
        public function setCodeForum($code_for)
        {
            $this->code_for = $code_for;
        }
        // public function setPhoto($photo)
        // {
        //     $this->photo = $photo;
        // }

    }
?>
<?php
class Filiere{
    private $code_filiere;
    private $nom_filiere;
    private $serie;
    private $niveau_choix;
    private $debauche;
    private $matiere_secondaire;
    public function __construct($code_filiere, $nom_filiere, $serie, $niveau_choix, $debauche, $matiere_secondaire){
        $this->code_filiere = $code_filiere;
        $this->nom_filiere = $nom_filiere;
        $this->serie = $serie;
        $this->niveau_choix = $niveau_choix;
        $this->debauche = $debauche;
        $this->matiere_secondaire = $matiere_secondaire;
    }
    public function getCodeFiliere(){
        return $this->code_filiere;
    }
    public function getNomFiliere(){
        return $this->nom_filiere;
    }
    public function getSerie(){
        return $this->serie;
    }
    public function getNiveauChoix(){
        return $this->niveau_choix;
    }
    public function getDebauche(){
        return $this->debauche;
    }
    public function getMatiere_secondaire(){
        return $this->matiere_secondaire;
    }
    public function setCodeFiliere($code_filiere){
        $this->code_filiere = $code_filiere;
    }
    public function setNiveauChoix($niveau_choix){
        $this->niveau_choix = $niveau_choix;
    }
    public function setSerie($serie){
        $this->serie = $serie;
    }
    public function setDebauche($debauche){
        $this->debauche = $debauche;
    }
    public function setMatiere_secondaire($matiere_secondaire){
        $this->matiere_secondaire = $matiere_secondaire;
    }
}
?>
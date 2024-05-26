<?php
   class Temoignage{
    private $codeEleve;
    private $temoignage;
    private $codeTemoignage;
    private $date;

    public function __construct($codeEleve, $temoignage,$codeTemoignage=null,$date=null){
        $this->codeEleve = $codeEleve;
        $this->temoignage = $temoignage;
        $this->codeTemoignage=$codeTemoignage;
        $this->date = $date;
   }
   public function getCodeEleve(){
    return $this->codeEleve;
   }
   public function getTemoignage(){
    return $this->temoignage;
   }
   public function getDate(){
    return $this->date;
   }
   public function getCodeTemoignage(){
    return $this->codeTemoignage;
   }
   public function setCodeEleve($codeEleve){
        $this->codeEleve = $codeEleve;
   }
    public function setTemoignage($temoignage)
    {
        $this->temoignage=$temoignage;
    }
    public function setCodeTemoignage($codeTemoignage){
        $this->codeTemoignage=$codeTemoignage;
    }
}
?>
<?php
class Stagaire{
    private $nom;
    private array $notes;
    public function __construct($nom, $notes){
        $this->nom = $nom;
        $this->notes = $notes;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getNOTES(): array
    {
        return $this->notes;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setNotes($notes)
    {
        $this->notes = $notes;
    }
    public function calculMoyen()
    {
        return array_sum($this->notes)/count($this->notes);
    }
    public function afficherMax()
    {
        return max($this->notes);
    }
    public function afficherMin()
    {
        return min($this->notes);
    }
}
$Stagaires = [
                $st1 = new Stagaire("karima fetouaki",[12,10,9,18,13]),
                $st2 = new Stagaire("rachid lbaz",[17,14,12,10,07])

];
foreach ($Stagaires as $Stagiare) {
    echo $Stagiare->getNom();
    echo "<br>";
    echo $Stagiare->calculMoyen();
    echo "<br>";
    echo $Stagiare->afficherMax();
    echo "<br>";
    echo $Stagiare->afficherMin();
    echo "<br>";
}

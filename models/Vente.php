<?php
class Vente{
    private int $id;
    private DateTime $date;
    private int $prix;
    private int $montant;
    private int $quantite;
    private string $observation;


    public function setId($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }

    public function setdate($date){
            $this->date = $date;
        }
    public function getdate(){
        return $this->date;
    }
    public function setprix($prix){
        $this->prix = $prix;
    }
    public function getprix(){
    return $this->prix;
    }
    public function setObservation($Observation){
        $this->Observation = $Observation;
    }
    public function getObservation(){
    return $this->Observation;
    }
    public function setmontant($montant){
        $this->montant = $montant;
    }
    public function getmontant(){
    return $this->montant;
    }
    public function setquantite($quantite){
        $this->quantite = $quantite;
    }
    public function getquantite(){
    return $this->quantite;
    }
    public function create () {
        
    }
    public function find () {
        
    }
    public function All () {
        
    }
}
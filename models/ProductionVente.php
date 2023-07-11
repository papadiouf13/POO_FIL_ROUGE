<?php
class ProductionVente{
    private int $id;
    private DateTime $date;
    private int $quantite;
    private string $Observation;


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
    public function setquantite($quantite){
        $this->quantite = $quantite;
    }
    public function getquantite(){
    return $this->quantite;
    }
    public function setObservation($Observation){
        $this->Observation = $Observation;
    }
    public function getObservation(){
    return $this->Observation;
    }
    public function create () {
        
    }
    public function find () {
        
    }
}
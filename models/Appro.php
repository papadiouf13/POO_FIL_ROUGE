<?php 
class Appro extends Model {
    public int $id;
    public string $dateAppro;
    public int $montant;
    public string $fournisseur;
    public bool $paiement;
    protected static function tableName(){
        return "appro";
       }

    public  DetailAppro $detailAppro;

    // public function __construct(){
    //     $this->detailAppro = new DetailAppro();
    // }
    public function details(){
        return $this->dateAppro->findDetailByAppro($this->id);
    }

}
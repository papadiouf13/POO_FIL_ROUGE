<?php
class ArticleVente extends Model{
    private int $id;
    private string $libelle;
    private float $prixVente;
    private int $quantiteVente;
    private float $montant;
    private string $photo;
    private int $idCategorieVente;
    private CategorieVente $categorieVente;

    protected  static function tableName(){
        return "article_vente";
       }
    public function setId($id){
        $this->id = $id;
    
    }
    public function getId(){
        return $this->id;
    }

    public function setLibelle($libelle){
            $this->libelle = $libelle;
        }
    public function getLibelle(){
        return $this->libelle;
    }
    public function setprix($prixVente){
        $this->prixVente = $prixVente;
    }
    public function getprixVente(){
        return $this->prixVente;
    }
    public function setquantiteVente($quantiteVente){
        $this->quantiteVente = $quantiteVente;
    }
    public function getquantiteVente(){
        return $this->quantiteVente;
    }
    public function setmontant($montant){
        $this->montant = $montant;
    }
    public function getmontant(){
        return $this->montant;
    }
    public function getphoto(){
        return $this->photo;
    }
    public function setphoto($photo){
        $this->photo = $photo;
    }
    
   
  
}
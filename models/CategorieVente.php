<?php
class CategorieVente extends Model{
    private int $id;
    private string $libelle;
    protected  static function tableName(){
        return "categorie_vente";
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
   
}
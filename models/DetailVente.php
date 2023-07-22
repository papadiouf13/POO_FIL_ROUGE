<?php
class DetailVente extends Model{
    private int $id;
    private int $idArticleVente;
    private ArticleVente $articleVente;
    private Vente $vente;
    private int $idVente;
    private string $montantTotal;
    protected  static function tableName(){
        return "detail_vente";
       }

    public function getId(){
    
        return $this->id;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function getMontantTotal(){
        return $this->montantTotal;
    }
    public function setMontantTotal($montantTotal){
        $this->montantTotal = $montantTotal;
    }

}
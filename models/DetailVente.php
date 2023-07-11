<?php
class ProductionVente{
    private int $id;
    private int $idArticleVente;
    private ArticleVente $articleVente;
    private Vente $vente;
    private int $idVente;
    private string $montantTotal;

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
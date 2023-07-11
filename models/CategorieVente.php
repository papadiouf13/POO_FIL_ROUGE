<?php
class CategorieVente{
    private int $id;
    private string $libelle;

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
    public function create () {
        
    }
    public function all () {
        $connect= get_connection();
        $sql=("SELECT * FROM categorie_vente");
        $stmt=$connect->query($sql);
        $new=$stmt->fetchAll();
        var_dump($new);die();
    }
}
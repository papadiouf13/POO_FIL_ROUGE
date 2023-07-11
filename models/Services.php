<?php
class Services{
    public function all(){
         $conn = get_connection();
         $sql = "SELECT * FROM categorie";
         $stmt = $conn->query($sql);
         $categorie = $stmt->fetchAll();
        var_dump($categorie);die('aaaaa');
    }
    

}

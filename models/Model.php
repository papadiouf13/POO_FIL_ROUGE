<?php
class Model {
    protected static function tableName(){
        
    }

    public static function all(){
        $conn = get_connection();
        $sql = $conn->prepare('SELECT * FROM '.static::tableName());
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_CLASS, get_class());
        $sql ->closeCursor();
        return $data;
        // $sql = "SELECT * FROM categorie";
        // $stmt = $conn->query($sql);
        // $categorie = $stmt->fetchAll();
        // var_dump($categorie);die('TIOUKH');
    }
}
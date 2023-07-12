<?php
 abstract class Model extends BaseDeDonnees {
    protected  abstract static function tableName();
    

    public static function all(){
        $connect = parent::ouvrirConnexion();
        $sql = $connect->prepare('SELECT * FROM '.static::tableName());
        $sql->execute();
        $data = $sql->fetchAll(PDO::FETCH_CLASS, get_called_class());
        $sql ->closeCursor();
        return $data;
    }

    public static function find($id){
        $connect = parent::ouvrirConnexion();
        $sql = $connect->prepare('SELECT * FROM '.static::tableName().' WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->setFetchMode(PDO::FETCH_CLASS, get_called_class());
        //$sql->execute([':id' => $id]);
        $sql->execute();
        $data = $sql->fetch();
        $sql ->closeCursor();
        return $data;
    }

    public static function create($data){
        $connect = parent::ouvrirConnexion();
        if($data==false){
            $sql = $connect->prepare('INSERT INTO '.static::tableName().' ('.implode(',', array_keys($data)).') VALUES (:'.implode(',:', array_keys($data)).')');

        }
        return $data;
        $sql->execute($data);
        $sql ->closeCursor();
        return $connect->lastInsertId();
    }

    public static function update($id, $data){
        $connect = parent::ouvrirConnexion();
        $sql = $connect->prepare('UPDATE '.static::tableName().' SET '.implode(',', array_keys($data)).' = :'.implode(',', array_keys($data)).' WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute($data);
        $sql ->closeCursor();
    }

    public static function delete($id){
        $connect = parent::ouvrirConnexion();
        $sql = $connect->prepare('DELETE FROM '.static::tableName().' WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();
        $sql ->closeCursor();
    }


}
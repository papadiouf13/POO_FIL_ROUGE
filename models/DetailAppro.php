<?php
class DetailAppro extends Model{
    public int $id;
    public int $qteAppro;
    public int $articleConfId;
    public int $approId;

    protected static function tableName(){
        return "detail_appro_article_conf";
    }

    public ArticleConfection $articleModel;

    public function  __construct() {
        $this->articleModel = new ArticleConfection();
    }

    // public function article(){
    //     return $this->articleModel->find($this->articleConId);
    // }

    public static function findDetailByAppro(int $approId){
        // die('tioukh');
       return parent::query("SELECT * FROM ".self::tableName()." WHERE approId =:approId", ["approId"=>$approId], false);
    }
}
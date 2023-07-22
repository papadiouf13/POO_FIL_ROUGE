<?php
require "./../core/BaseDeDonnees.php";
require "../core/Model.php";
require "./../models/Categorie.php";

class CategorieController extends Controller {
/** 
*
*@return mixed
*/


public function index() {
    // die('SALAM');
    $datas = Categorie::all();
    // dd($datas);
    $this -> view('categorie/liste',["datas" => $datas]);
}

/** 
*
*@return mixed
*/

public function create(){

}

/** 
*
*@return mixed
*/

public function store(){
    Validator::isVide($_POST['libelle'], 'libelle');
    if (Validator::validate()) {
        try {
            Categorie::create([
                'libelle' => $_POST['libelle']
            ]);
            
        } catch (PDOException $th) {
            Validator::$errors['libelle'] ="le libelle existe deja";
        }
        
    }
        Session::set("errors", Validator::$errors);
    
    $this -> redirect('categorie');
}
}
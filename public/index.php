<?php 
require_once "../core/Controller.php";
require_once "../controllers/CategorieController.php";
require_once "../controllers/ArticleConfectionController.php";
require_once "../controllers/ApproController.php";
require_once "../controllers/DetailApproController.php";
require_once "../core/bootstrap.php";
// dd($_POST);
$ctrl = new CategorieController();
$ctrlArticle = new ArticleConfectionController();
$ctrlAppro = new ApproController();
$ctrlApproDetail = new DetailApproController();



if (isset($_REQUEST["path"])) {
    $path = $_REQUEST["path"];
    if ($path=="categorie") {
        $ctrl -> index();
    }elseif($path=="article"){
        $ctrlArticle->index();
    }elseif($path=="appro"){
        $ctrlAppro->index();
    }elseif($path=="detailappro"){
        $_SESSION['id'] = $_GET['id'];
        $ctrlApproDetail->index();
    }elseif($path=="store-categorie"){
        $ctrl->store();
    }elseif($path=="form-article"){
        $ctrlArticle->form();
    }elseif($path=="store-article"){
        $ctrlArticle->store();
    }
}else{
    $ctrl -> index();
}











/**
 * Manipulation une Classe 
 *  1.Creer Objet   $objet =new NomClasse()
 *  2.Hydrater Objet ==> Donner un etat ==> Donner une valeur a ses attributs
 *     Methode 1 : Lorsque les attributs ont une visibilite a public
 *      -> : operateur de portee sur un objet 
 *      $objet->  : interface de la classe ==> correspond au attributs et methodes publiques de la classe
 *        $objet->attributPublic
 *        $objet->methodePublic()
 * 
 *   
 */
// dd(ArticleConfection::all('article_confection'));die;
// dd(Categorie::all('article_confection'));die;

// $artt = new ArticleConfection();

// PARTIE CATEGORIE


// $categorie = Categorie::all();
// $data = [
//     'libelle' => 'Mansour'
// ];
// $yarr =false;
// foreach ($categorie as $key => $value) {
//     if($value->getlibelle() == $data['libelle']){
//         $yarr = true;
//     }
// }
// if($yarr){
//     echo 'Ce libelle existe deja ';
// }else{
//     dd(Categorie::create($data));die();
// }

// PARTIE UPDATE
// $data =[
//     'libelle' => 'Cette'
// ];

// dd(CategorieVente::update(3 , $data));
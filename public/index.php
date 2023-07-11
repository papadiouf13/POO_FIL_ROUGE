<?php 
require "../models/Model.php";
require "./../models/Categorie.php";
require "./../models/ArticleConfection.php";
require "./../models/bd.php";
require_once "../helpers/help.php";
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
dd(ArticleConfection::all('article_confection'));die;
// dd(categorie::all('categorie'));die;
$categorie=new Categorie();
$categorie->setLibelle("DALL");
$categorie->create();
var_dump($categorie);die;



require "./../models/Approvisionnement.php";
$approvisionnement=new Approvisionnement();
$approvisionnement->setId(1);
$approvisionnement->setmontant(20000); 
$approvisionnement->setfournisseur("Mamadou Diouf"); 
$approvisionnement->setpaiement(20000); 
$approvisionnement->setdateAppro("12-01-2015"); 
$approvisionnement->all();
//var_dump($approvisionnement);die();








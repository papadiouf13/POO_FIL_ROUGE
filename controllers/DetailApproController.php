<?php
require "./../models/DetailAppro.php";

class DetailApproController extends Controller {

/** 
*
*@return mixed[]
*/

public function index() {
    $datas = DetailAppro::findDetailByAppro($_SESSION['id']);
    // dd($datas);
    // die('OKKK');
    ob_start();
    require "../ressources/views/detailappro/liste.html.php";
    $content_for_view = ob_get_clean();
    require "../ressources/views/base.layout.html.php";
    
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

}
}
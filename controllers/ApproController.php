<?php
require "./../models/Appro.php";

class ApproController extends Controller {

/** 
*
*@return mixed[]
*/

public function index() {
    $datas = Appro::all();
    // die('OKKK');
    ob_start();
    require "../ressources/views/appro/liste.html.php";
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
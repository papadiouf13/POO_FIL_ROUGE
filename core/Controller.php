<?php
abstract class Controller {
    public abstract function index();
    public abstract function create();
    public abstract function store();

    public function __construct()
    {
        Session::openSession();
    }


    public function view(string $file , array $data= []){
        extract($data); 
        ob_start();
    require "../public/ressources/views/".$file.".html.php";
    $content_for_view = ob_get_clean();
    require "../public/ressources/views/base.layout.html.php";
    }
    public function redirect(string $path){
        header("Location:".WEB_URL."?path=$path");
    }
}
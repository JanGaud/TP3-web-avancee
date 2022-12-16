<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');
require("library/config.php");

class ControllerAdmin{

    public function index(){
        if( isset($_SESSION['admin']) && $_SESSION['admin']){
        twig::render("admin-index.php");
    }
    else{
        header('location:' . $GLOBALS["path"]);
    }
}}
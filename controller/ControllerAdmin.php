<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');
RequirePage::requireModel('ModelLogUser');
require("library/config.php");

class ControllerAdmin{

    public function index(){
        if( isset($_SESSION['admin']) && $_SESSION['admin']){
            $session = new ModelLogUser();
            $data = $session->getSessions();
            
            twig::render("admin-index.php", ['logSession' => $data]);
        }
        else{
        header('location:' . $GLOBALS["path"]);
        }

}}
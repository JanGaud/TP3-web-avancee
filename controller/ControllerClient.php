<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');
require("library/config.php");

class ControllerClient{

    public function index(){
        if( isset($_SESSION['compteActif']) && $_SESSION['compteActif']){
        $client = new ModelClient;
        $select = $client->select("idClient");
        twig::render("client-index.php", ['clients' => $select, 
                                        'client_list' => "Liste de Client"]);
        }
        else{
            header('location:' . $GLOBALS["path"]);
        }
    }

    public function create(){
       twig::render('client-create.php');
    }

    public function store(){
     // print_r($_POST);
     $client = new ModelClient;
     $insert = $client->insert($_POST);
    requirePage::redirectPage('{{ path }}client');
    }

    public function show($id){
        $client = new ModelClient;
        $selectClient = $client->selectId($id);
        twig::render('client-show.php', ['client' => $selectClient]);
    }

    public function edit($id){
        $client = new ModelClient;
        $selectClient = $client->selectId($id);
        twig::render('client-edit.php', ['client' => $selectClient]);
    }

    public function update(){
        $client = new ModelClient;
        $update = $client->update($_POST);
    }
    public function delete(){
        $client = new ModelClient;
        $delete = $client->delete($_POST);

    }
}
?>

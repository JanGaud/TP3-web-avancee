<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelMaison');
require("library/config.php");

class ControllerMaison{

    public function index(){
        if( isset($_SESSION['compteActif']) && $_SESSION['compteActif']){
        $maison = new ModelMaison;
        $select = $maison->select("idMaison_edition");
        twig::render("maison-index.php", ['maisons' => $select, 
                                        'maison_list' => "Liste de maisons"]);
        }
        else{
            header('location:' . $GLOBALS["path"]);
        }
    }

    public function create(){
       twig::render('maison-create.php');
    }

    public function store(){
     // print_r($_POST);
     $maison = new ModelMaison;
     $insert = $maison->insert($_POST);
    requirePage::redirectPage('{{ path }}maison');
    }

    public function show($id){
        $maison = new ModelMaison;
        $selectmaison = $maison->selectId($id);
        twig::render('maison-show.php', ['maison' => $selectMaison]);
    }

    public function edit($id){
        $maison = new ModelMaison;
        $selectmaison = $maison->selectId($id);
        twig::render('maison-edit.php', ['maison' => $selectMaison]);
    }

    public function update(){
        $maison = new ModelMaison;
        $update = $maison->update($_POST);
    }
    public function delete(){
        $maison = new ModelMaison;
        $delete = $maison->delete($_POST);

    }
}
?>
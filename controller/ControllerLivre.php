<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelLivre');
RequirePage::requireModel('ModelMaison');
RequirePage::requireModel('ModelAuteur');
require("library/config.php");

class Controllerlivre{

    public function index(){
        $livre = new ModelLivre;
        $select = $livre->select("idLivre");
        twig::render("livre-index.php", ['livres' => $select, 
                                        'livre_list' => "Liste de livre", 
                                        'page' => ["Livres"]]);
        
    }

    public function create(){
        $livre = new ModelLivre;
        $auteur = new ModelAuteur;
        $maison = new ModelMaison;
        $selectLivre = $livre->select("idLivre");
        $selectAuteur = $auteur->select("idAuteur");
        $selectMaison = $maison->select("idMaison_edition");

        if( isset($_SESSION['admin']) && $_SESSION['admin']){
            twig::render("livre-create.php", ['livres' => $selectLivre,
                                             'auteurs' => $selectAuteur,
                                             'maisons' => $selectMaison,
                                             'livre_list' => "Ajout de livres"]);
        }
        else{
            header('location:' . $GLOBALS["path"]);
        }
    }

    public function store(){
        // print_r($_POST);
        $livre = new ModelLivre;
        $insert = $livre->insert($_POST);
        requirePage::redirectPage('{{ path }}livre');
    }

    public function show($id){
        $livre = new ModelLivre;
        $selectLivre = $livre->selectId($id);
        twig::render('livre-show.php', ['livre' => $selectLivre]);
    }

    public function edit($id){
        $livre = new ModelLivre;
        $selectLivre = $livre->selectId($id);
        twig::render('livre-edit.php', ['livre' => $selectLivre]);
    }

    public function update(){
        $livre = new ModelLivre;
        $update = $livre->update($_POST);
    }
    
    public function delete(){
        $livre = new ModelLivre;
        $delete = $livre->delete($_POST);

    }
}
?>

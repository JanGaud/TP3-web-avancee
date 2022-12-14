<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelAuteur');

class ControllerAuteur{

    public function index(){
        $auteur = new ModelAuteur;
        $select = $auteur->select("idAuteur");
        twig::render("auteur-index.php", ['auteurs' => $select, 
                                        'auteur_list' => "Liste de auteur", 'page' => ["Auteurs"]]);
    }

    public function create(){
       twig::render('auteur-create.php');
    }

    public function store(){
     // print_r($_POST);
     $auteur = new ModelAuteur;
     $insert = $auteur->insert($_POST);
    requirePage::redirectPage('{{ path }}auteur');
    }

    public function show($id){
        $auteur = new ModelAuteur;
        $selectAuteur = $auteur->selectId($id);
        twig::render('auteur-show.php', ['auteur' => $selectAuteur]);
    }

    public function edit($id){
        $auteur = new ModelAuteur;
        $selectAuteur = $auteur->selectId($id);
        twig::render('auteur-edit.php', ['auteur' => $selectAuteur]);
    }

    public function update(){
        $auteur = new Modelauteur;
        $update = $auteur->update($_POST);
    }
    public function delete(){
        $auteur = new ModelAuteur;
        $delete = $auteur->delete($_POST);

    }
}
?>

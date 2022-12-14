<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelLivre');

class Controllerlivre{

    public function index(){
        $livre = new ModelLivre;
        $select = $livre->select("idLivre");
        twig::render("livre-index.php", ['livres' => $select, 
                                        'livre_list' => "Liste de livre", 
                                        'page' => ["Livres"]]);
        
    }

    public function create(){
       twig::render('livre-create.php');
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

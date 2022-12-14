<?php
    RequirePage::requireModel('Crud');
    RequirePage::requireModel('ModelClient');
    require("library/config.php");

class ControllerRegister{

    public function index(){
        $error = null;
        if(isset($_SESSION["error"])){
            $error = $_SESSION["error"];
            $_SESSION["error"] = null;
        };
    
        twig::render("client-create.php", ['page' => ["Comptes", "Inscriptions"], 'error' => $error]);
    }

    public function inscription(){
        // print_r($_POST);
        $client = new ModelClient;
        $clientExistant = $client->selectClient($_POST["client_courriel"]);

        if($clientExistant == null){
            $_POST["mdp"] =  hash('sha256', $_POST['mdp']);
            $insert = $client->insert($_POST);
            $_SESSION['compteActif'] = true;
            $_SESSION['nomClient'] = $_POST["nom_client"];
            header('Location:' . $GLOBALS["path"] . 'client');
        }
        else{
            $_SESSION["error"] = "Le courriel fournit est déjà dans notre base de donnée!";
            header('location:' . $GLOBALS["path"] . 'register');
        }

        
    }
}
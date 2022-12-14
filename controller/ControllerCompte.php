<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');
require("library/config.php");
class ControllerCompte{

    public function index(){
        $error = null;
        if(isset($_SESSION["error"])){
            $error = $_SESSION["error"];
            $_SESSION["error"] = null;
        };
        
        twig::render("connexion.php", ['page' => ["compte", "connexion"], 'error' => $error]);
    }

    public function connexion(){
        $modelClient = new ModelClient;
        $_POST["mdp"] =  hash('sha256', $_POST['mdp']);
        $user = $modelClient->selectClient($_POST["client_courriel"]);
        if($user == null){
            $_SESSION["error"] = "le compte n'existe pas dans notre base de donnée!";
            header('location:' . $GLOBALS["path"] . 'compte');
        }
        else{
            $mdpValid = $_POST["mdp"] === $user["mdp"];
            if($mdpValid){
                $_SESSION['compteActif'] = true;
                $_SESSION['nomClient'] = $user['nom_client'];
                header('Location:' . $GLOBALS["path"] . 'client');
            }
            else{
                $_SESSION["error"] = "Le mot de passe n'est pas valide avec ce compte!";
                header('location:' . $GLOBALS["path"] . 'compte');
            }
        }
    }

    public function deconnexion(){
        session_destroy();
        header('Location:' . $GLOBALS["path"]);
    }
}
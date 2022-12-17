<?php
RequirePage::requireModel('Crud');
RequirePage::requireModel('ModelClient');
require("service/LoginService.php");
require("library/config.php");


class ControllerCompte{

    private $loginService;

    function __construct()
    {
        $this->loginService = new LoginService;
    }

    public function index(){
        $error = null;
        if(isset($_SESSION["error"])){
            $error = $_SESSION["error"];
            $_SESSION["error"] = null;
        };
        
        twig::render("connexion.php", ['page' => ["compte", "connexion"], 'error' => $error, 'ip' =>$_SERVER['REMOTE_ADDR']]);
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
                $this->loginService->loginUser($user["nom_client"], $user);
                header('Location:' . $GLOBALS["path"] . 'client');
            }
            else{
                $_SESSION["error"] = "Le mot de passe n'est pas valide avec ce compte!";
                header('location:' . $GLOBALS["path"] . 'compte');
            }
        }
    }

    public function deconnexion(){
        $this->loginService->logoutUser();
        header('Location:' . $GLOBALS["path"]);
    }
}
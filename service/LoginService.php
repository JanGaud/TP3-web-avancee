<?php
    RequirePage::requireModel('ModelLogUser');

    class LoginService{
        
        private $modelLogUser;

        function __construct()
        {
            $this->modelLogUser = new ModelLogUser;
        }

        public function loginUser($nomClient, $user = null){
   
            $_SESSION['compteActif'] = true;
            $_SESSION['nomClient'] = $nomClient;
            $_SESSION['utilisateur'] = $user;
            $_SESSION['admin'] = $user['admin'];
            $this->modelLogUser->logUserLoggedIn($user['idClient']);
        }


        public function logoutUser(){
            $this->modelLogUser->logUserLoggedOut($_SESSION['utilisateur']['idClient']); 
            session_destroy();
        }
    }

?>
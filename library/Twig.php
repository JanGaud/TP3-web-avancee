<?php

class Twig{

    static public function render($template, $data = array()){
        $loader = new \Twig\Loader\FilesystemLoader('view');
       // $twig = new \Twig\Environment($loader, array('auto_reload' => true,'cache' => false));
        $twig = new \Twig\Environment($loader, array('auto_reload' => true));
        if($_SERVER["SERVER_NAME"] == 'localhost'){
            $twig->addGlobal('path', 'http://localhost/TP3-Twig-MVC/');
            $GLOBALS["path"] = 'http://localhost/TP3Twig-MVC/';
        }
        else{
            $twig->addGlobal('path', 'https://e2194798.webdev.cmaisonneuve.qc.ca/TP3-Twig-MVC/');
            $GLOBALS["path"] = 'https://e2194798.webdev.cmaisonneuve.qc.ca/TP3-Twig-MVC/';
        }

        $twig->addGlobal('session', $_SESSION);
        $twig->addGlobal('get', $_GET);
        echo $twig->render($template, $data);
    }
}

?>
<?php

    if($_SERVER["SERVER_NAME"] == 'localhost'){
        $GLOBALS["path"] = 'http://localhost/TP3-Twig-MVC/';
    }
    else{
        $GLOBALS["path"] = 'https://e2194798.webdev.cmaisonneuve.qc.ca/TP3-Twig-MVC/';
    }
?>
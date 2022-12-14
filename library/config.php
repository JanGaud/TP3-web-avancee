<?php

    if($_SERVER["SERVER_NAME"] == 'localhost'){
        $GLOBALS["path"] = 'http://localhost/TP2-Twig-MVC/';
    }
    else{
        $GLOBALS["path"] = 'https://e2194798.webdev.cmaisonneuve.qc.ca/TP2-Twig-MVC/';
    }
?>